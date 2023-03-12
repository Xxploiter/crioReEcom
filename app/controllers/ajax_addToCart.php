<?php
class Ajax_addToCart extends Controller
{

    public function index()
    {

        if (count($_POST) > 0) {
            $data = (object)$_POST;
        } else {
            $data = json_decode(file_get_contents('php://input'));
        }

        if (is_object($data) && isset($data->data_type)) {

            if ($data->data_type == 'addToCart') {

                $id = $data->itemId;
                // if repeated remove buttons are pressed removing the item itself from the CART
                if (!$data->variants) {
                    if (isset($_SESSION['CART'])) {
                        foreach ($_SESSION['CART'] as $singleCartProduct => $productDetails) {
                            # code...
                            if ($productDetails['id'] == $id) {
                                unset($_SESSION['CART'][$singleCartProduct]); // after unsetting a specific key there will be a gap so to reaarange the array without any gap
                                $_SESSION['CART'] = array_values($_SESSION['CART']); // array_values() is used and assigned again to the session so we retain the other values this time in proper order                            
                                break;
                            }
                        }
                        echo 'item-removed';
                        die;
                    }
                }
                $productVariants = $data->variants;
                $productId = esc($id); //get the product id from the ajax
                $db = Database::newInstance();
                $product = $db->read("SELECT * FROM products WHERE id = :id LIMIT 1", ['id' => $productId]);

                if ($product) {
                    $productDetails = $product[0];
                    // if cart is not created we create a Cart
                    if (isset($_SESSION['CART'])) { // if the cart is their 
                        // see if the product is added to the card or not
                        $idsInCart = array_column($_SESSION['CART'], "id");
                        if (in_array($productDetails->id, $idsInCart)) { // if the same product is there then we increase the qty
                            $productsKey = array_search($productDetails->id, $idsInCart); //searching for the key of the specific product whoes qty we need to increase
                            $_SESSION['CART'][$productsKey]['qty']++; //increasing the qty by 1 
                            $_SESSION['CART'][$productsKey]['variants'] = $productVariants; //replacing the old arrayy with the new one
                        } else { //product is not in the cart we do this below
                            $singleProduct = array();
                            $singleProduct['id'] = $productDetails->id;
                            $singleProduct['crioId'] = $productDetails->crioId;
                            $singleProduct['qty'] = 1;
                            $singleProduct['variants'] = $productVariants; //this will be the variants array
                            $_SESSION['CART'][] = $singleProduct; // this adds a product to the end of thhe cart
                        }
                    } else {
                        // if the cart doesnt exists then we are doing this creating the session cart
                        // fetching the product details and adding it to an assoc array called singleProduct 
                        // adding the id of the pproduct and the qty
                        // then adding it to the cart which is in the session variable 
                        $singleProduct = array();
                        $singleProduct['id'] = $productDetails->id;
                        $singleProduct['crioId'] = $productDetails->crioId;
                        $singleProduct['qty'] = 1;
                        $singleProduct['variants'] = $productVariants;
                        $_SESSION['CART'][] = $singleProduct;
                    }
                }

                // send the variants to the service and get all the price
                echo json_encode($_SESSION['CART']);
            } elseif ($data->data_type == 'removeVariants') {
                $itemId =  $data->itemId;
                $sizeId =  $data->sizeId;
                $colorId =  $data->colorId;

                foreach ($_SESSION['CART'] as $key => $item) {
                    if ($item['id'] == $itemId) {
                        foreach ($item['variants'] as $vKey => $variant) {
                            if ($variant['sizeId'] == $sizeId && $variant['colorId'] == $colorId) {
                                unset($_SESSION['CART'][$key]['variants'][$vKey]);
                            }
                        }
                        $_SESSION['CART'][$key]['variants'] = array_values($_SESSION['CART'][$key]['variants']);
                    }
                }
                echo 'done';
            } elseif ($data->data_type == 'removeProduct') {
                $itemId =  $data->itemId;
                foreach ($_SESSION['CART'] as $key => $product) {
                    if ($product['id'] == $itemId) {
                        unset($_SESSION['CART'][$key]);
                    }
                }
                // Re-index the array to remove any empty spaces
                $_SESSION['CART'] = array_values($_SESSION['CART']);
                echo 'removed product';
            } elseif ($data->data_type == 'approveRequest') {
                $singleProductDetailsService = $this->load_service('singleproductservice');
                $result = $singleProductDetailsService->placeOrder($_SESSION['CART']);
                // unset the session variable
                unset($_SESSION['CART']);
                echo $result;
            }
        }
    }
}
