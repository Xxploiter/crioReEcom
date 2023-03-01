<!-- Devloped by Souvik -->
<?php

class SingleProductService
{

    // This function will get the colors available for a specefic itemId
    private function getAvailableColorsFromInventoryByItemId($itemId)
    {
        $url = "https://raiganj.crio77.com/api/inventory2.php?itemId=" . $itemId . "&choice=color";
        $response = file_get_contents($url);
        $uniqueColors = json_decode($response, true);
        return $uniqueColors;
    }

    // This function will get the sizes available for a specefic itemId
    private function getAvailableSizesFromInventoryByItemId($itemId)
    {

        $url = "https://raiganj.crio77.com/api/inventory2.php?itemId=" . $itemId . "&choice=size";
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

        for ($i = 0; $i < sizeof($decodedResponce); $i++) {
            $quantity = $quantity + $decodedResponce[$i]['quantityIs'];
        }

        return $quantity;
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
}

?>