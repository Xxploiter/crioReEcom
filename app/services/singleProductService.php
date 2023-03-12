<?php

class SingleProductService
{

    private function uniqueId() {
        $microtime = microtime();
        $rand = mt_rand();
    
        // combine microtime and random number to create a unique ID
        $unique_id = md5($microtime . $rand);
    
        return $unique_id;
    }
    // This function will get the colors available for a specefic itemId
    private function getAvailableColorsFromInventoryByItemId($itemId)
    {
        $url = "https://raiganj.crio77.com/api/sizeNColorItem.php?itemId=".$itemId."&choice=color";
        $response = file_get_contents($url);
        $uniqueColors = json_decode($response, true);
        return $uniqueColors;
    }

    // This function will get the sizes available for a specefic itemId
    private function getAvailableSizesFromInventoryByItemId($itemId)
    {

        $url = "https://raiganj.crio77.com/api/sizeNColorItem.php?itemId=".$itemId."&choice=size";
        $response = file_get_contents($url);
        $uniqueSizes = json_decode($response, true);

        return $uniqueSizes;
    }

    //This function will get all the sizes available for a specefic colorId and itemId
    private function getAvailableSizesFromInventoryByItemIdAndColorId($itemId, $colorId)
    {
        $url = "https://raiganj.crio77.com/api/inventory2.php?itemId=" . $itemId . "colorId=" . $colorId;
        $response = file_get_contents($url);
        $availableSizesForAPerticularColorId = json_decode($response, true);

        return $availableSizesForAPerticularColorId;
    }

    // This function will get the total no of units available in inventery of a specefic itemId filter 
    // based on colorId and sizeId
    public function getQuantityFromInventoryByItemIdColorIdSizeId($itemId, $sizeId = null, $colorId = null)
    {
        $quantity = 0;

        if ($colorId && $sizeId) {
            // If we are getting both colorId and sizeId we will filter it with both 
            $url = "https://raiganj.crio77.com/api/inventory.php?itemId=" . $itemId . "&colorId=" . $colorId . "&sizeId=" . $sizeId;
        } elseif (!$sizeId && $colorId) {
            // If we are getting only the sizeId we will only filter it with sizeId and vice varsa
            $url = "https://raiganj.crio77.com/api/inventory.php?itemId=" . $itemId . "&colorId=" . $colorId;
        } elseif (!$colorId && $sizeId) {
            $url = "https://raiganj.crio77.com/api/inventory.php?itemId=" . $itemId . "&sizeId=" . $sizeId;
        } else {
            $url = "https://raiganj.crio77.com/api/inventory.php?itemId=" . $itemId;
        }

        $response = file_get_contents($url);
        $decodedResponce = json_decode($response, true);

        if ($decodedResponce) {
            for ($i = 0; $i < sizeof($decodedResponce); $i++) {
                $quantity = $quantity + $decodedResponce[$i]['quantityIs'];
            }
            return $quantity;
        } else {
            return 'notAvailable';
        }
    }

    public function getUniqueColorAndSize($itemId, $colorId = null)
    {

        $uniqueColors = $this->getAvailableColorsFromInventoryByItemId($itemId);
        $uniqueSizes = $this->getAvailableSizesFromInventoryByItemId($itemId);

        return array($uniqueColors, $uniqueSizes);
    }

    public function getAvailableSizesForAperticularColorId($itemId, $colorId)
    {
        $availableSizesForColorId = $this->getAvailableSizesFromInventoryByItemIdAndColorId($itemId, $colorId);

        return $availableSizesForColorId;
    }

    public function debuggerIs($itemId)
    {
        show('i am in ' . $itemId);
        die;
    }

    // getting all the colors and sizes 
    public function getAllColorsSizesFromDb()
    {
        $db = Database::newInstance();
        $colors = $db->read("SELECT * FROM colors;");
        $sizes = $db->read("SELECT * FROM sizes;");
        return array($colors, $sizes);
    }

    public function getCategoryAndBrand($brandId, $categoryId = null)
    {
        $db = Database::newInstance();
        $brandName = $db->read("SELECT name FROM brands WHERE crioId = '$brandId' ;");
        // $categoryName = $db->read("SELECT category FROM categories WHERE crioId = '$categoryId'; ");
        $categoryName = 'Female Clothes';
        return array($brandName, $categoryName);
    }

    public function getPriceForProducts($data)
    {
        if ($data) {
            $items = $data;
            $url = "https://raiganj.crio77.com/api/priceInfo.php";
            $postData = json_encode($items);
            $options = [
                'http' => [
                    'method' => 'POST',
                    'header' => 'Content-Type: application/json',
                    'content' => $postData,
                ],
            ];
            $context = stream_context_create($options);
            $response = file_get_contents($url, false, $context);


            $itemsCrioidPrice =  json_decode($response, true);
          
            // Merge $itemsCrioidPrice to $_SESSION['CART']
            foreach ($_SESSION['CART'] as &$item) {
                // Only merge if the item has variants
                if (isset($item['variants'])) {
                    foreach ($item['variants'] as &$variant) {
                        // Check if the variant's sizeId matches a key in $itemsCrioidPrice
                        if (isset($itemsCrioidPrice[$item['crioId']][$variant['sizeId']])) {
                            // Add the price to the variant
                            $variant['price'] = $itemsCrioidPrice[$item['crioId']][$variant['sizeId']]['price'];
                        }
                    }
                }
            }
        }
    }

    public function placeOrder($cart){
        $db = Database::newInstance();
        
        // Generate unique order ID
        $orderId = $this->uniqueId();
        // Insert new row in orders table with the order ID and user ID
        $orderQuery = "INSERT INTO orders (cartUuId, user_url) VALUES (?, ?)";
        $orderParams = array($orderId, $_SESSION['user_url']);
        $db->write($orderQuery, $orderParams);
        
        // Insert cart items in cart table with the order ID
        $cartQuery = "INSERT INTO cart (orderId, itemId, crioId, qty, colorId, colorName, sizeName, sizeId, quantity, price) VALUES ";
        $params = array();
        $cartValues = array();
        foreach($cart as $item){
            $itemId = $item['id'];
            $crioId = $item['crioId'];
            $qty = $item['qty'];
            foreach($item['variants'] as $variant){
                $colorId = $variant['colorId'];
                $colorName = $variant['colorName'];
                $sizeName = $variant['sizeName'];
                $sizeId = $variant['sizeId'];
                $quantity = $variant['quantity'];
                $price = $variant['price'];
                $cartValues[] = "(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
                $params[] = $orderId; // Insert the order ID along with the cart details
                $params[] = $itemId;
                $params[] = $crioId;
                $params[] = $qty;
                $params[] = $colorId;
                $params[] = $colorName;
                $params[] = $sizeName;
                $params[] = $sizeId;
                $params[] = $quantity;
                $params[] = $price;
            }
        }
        $cartQuery .= implode(",", $cartValues);
        $result = $db->write($cartQuery, $params);
        
        // Get cart items for the order
        $cartItems = $this->getCartItemsForOrder($orderId);
        
        // Calculate total amount for the order
        $totalAmount = 0;
       
        foreach($cartItems as $item){
            $totalAmount += $item->quantity * $item->price;
        }
        
        // Update orders table with total amount
        $updateQuery = "UPDATE orders SET totalAmount = ? WHERE cartUuId = ?";
        $updateParams = array($totalAmount, $orderId);
        $db->write($updateQuery, $updateParams);
        
        return $result;
    }
   
    public function getCartItemsForOrder($orderId){
        $db = Database::newInstance();
        $query = "SELECT * FROM cart WHERE orderId = '$orderId'";       
        $result = $db->read($query);
        return $result;
    }

    public function getOrdersForUser($user_url){
        $db = Database::newInstance();
        $query = "SELECT * FROM orders WHERE user_url = ?";
        $params = array($user_url);
        $orders = $db->read($query, $params);
    
        foreach ($orders as $key => $order) {
            $orderId = $order->cartUuId;
            $cartItems = $this->getCartItemsForOrder($orderId);
            $orders[$key]->cartItems = $cartItems;
        }
    
        return $orders;
    }
}

 
}
