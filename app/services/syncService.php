<?php

class SyncService
{
    // about the getLedgerDataFromAPI function this gets data from the api the cache time is one day
    private function getUpdateStatus($productClass)
    {

        $apiData = file_get_contents('https://raiganj.crio77.com/api/checkUpdate.php');
        // Perform data processing, if necessary
        $processedJSONData = json_decode($apiData, true);
        // parse the data and check which needs to be synchronized item, size, brand or color

        $itemLastCrioId = $processedJSONData['lastItem'];
        $sizeLastCrioId = $processedJSONData['lastSize'];
        $colorLastCrioId = $processedJSONData['lastColor'];
        $brandLastCrioId = $processedJSONData['lastBrand'];

        // getting the local database data 
        $itemLastData = $productClass->productsLastCrioId()[0]->{'MAX(crioId)'} ?: 0;
        $sizeLastData = $productClass->sizesLastCrioId()[0]->{'MAX(crioId)'} ?: 0;
        $colorLastData = $productClass->colorLastCrioId()[0]->{'MAX(crioId)'} ?: 0;
        $brandLastData = $productClass->brandsLastCrioId()[0]->{'MAX(crioId)'} ?: 0;

        // now lets check wther there is a need for syn or not, by subtracting 
        $itemUpdate = $itemLastData;
        $sizeUpdate =  $sizeLastData;
        $colorUpdate =  $colorLastData;
        $brandUpdate = $brandLastData;

        return array($itemUpdate, $sizeUpdate, $colorUpdate, $brandUpdate);
    }
    private function syncItem($productClass)
    {
        [$itemSync, $sizeSync, $colorSync, $brandSync] = $this->getUpdateStatus($productClass);
        if ($itemSync >= 0) {
            // here need to wtite the code for getting all the data after a specific id from an API TODO
            $lastItem = $itemSync;
            $apiLatestItemData = file_get_contents('https://raiganj.crio77.com/api/updateStatus.php?lastItem=' . $lastItem);
            // IMP
            $apiLatestItemData = json_decode($apiLatestItemData);
            // this can be abstracted using a method where each item is passed inside foreach


            $db = Database::newInstance();
            // $limitTry = 0;
            foreach ($apiLatestItemData as $item) {
                $arr['crioId'] = ucwords($item->id);
                $arr['code'] = ucwords($item->code ?: '');
                $arr['title'] = ucwords($item->title ?: '');
                $arr['itemtype'] = ucwords($item->itemType ?: '');
                $arr['description'] = ucwords($item->description ?: '');
                $arr['gst'] = ucwords($item->gst ?: '');
                $arr['hsn'] = ucwords($item->hsn ?: '');
                $arr['imgCrio'] = ucwords($item->imgUrl ?: '');
                $arr['brand'] = ucwords($item->brandId ?: '');
                $arr['cata'] =  ucwords($item->catIdIs ?: '');
                $arr['review'] =  ucwords($item->reviewIs ?: '');
                $arr['user_url'] =  $_SESSION['user_url'];

                $query = "INSERT INTO products (crioId, code, title, itemtype, description, gst, hsn, imgCrio, brand, cata, review, user_url) VALUES ( :crioId, :code, :title, :itemtype, :description, :gst, :hsn, :imgCrio, :brand, :cata, :review, :user_url)";
                $db->write($query, $arr);
                //    $limitTry++;                 
                // if($limitTry>3){
                //     break;
                // }
                $arr = null;
            }
            // IMP......
            //  after that the data returned will be passed to a method in product Model TODO synchronizeProductCrio($data)
        }
    }
    private function syncSize($productClass)
    {
        [$itemSync, $sizeSync, $colorSync, $brandSync] = $this->getUpdateStatus($productClass);
        if ($sizeSync >= 0) {
            // below
            $lastSize = $sizeSync;
            $apiLatestSizeData = file_get_contents('https://raiganj.crio77.com/api/updateStatus.php?lastSize=' . $lastSize);
            $apiLatestSizeData = json_decode($apiLatestSizeData);
            // this can be abstracted using a method where each item is passed inside foreach

            $db = Database::newInstance();

            foreach ($apiLatestSizeData as $size) {
                $arr['crioId'] = ucwords($size->id);
                $arr['size'] = ucwords($size->size ?: 0);
                $arr['unit'] = ucwords($size->unit ?: '');
                $arr['description'] = ucwords($size->description ?: '');

                $query = "INSERT INTO sizes (crioId, size, unit, description) VALUES (:crioId, :size, :unit, :description)";
                $db->write($query, $arr);

                $arr = null;
            }
        }
    }
    private function syncColor($productClass)
    {
        [$itemSync, $sizeSync, $colorSync, $brandSync] = $this->getUpdateStatus($productClass);
        if ($colorSync >= 0) {
            // below
            $lastColor = $colorSync;
            $apiLatestColorData = file_get_contents('https://raiganj.crio77.com/api/updateStatus.php?lastColor=' . $lastColor);

            $apiLatestColorData = json_decode($apiLatestColorData);
            // this can be abstracted using a method where each item is passed inside foreach

            $db = Database::newInstance();
            // $limitTry=0;
            foreach ($apiLatestColorData as $color) {
                $arr['crioId'] = ucwords($color->id);
                $arr['name'] = ucwords($color->name ?: 0);
                $arr['hex'] = ucwords($color->hex ?: '');
                $arr['description'] = ucwords($color->description ?: '');

                $query = "INSERT INTO colors (crioId, name, hex, description) VALUES (:crioId, :name, :hex, :description)";
                $db->write($query, $arr);
                //      $limitTry++;                 
                // if($limitTry>3){
                //     break;
                // }
                $arr = null;
            }
        }
    }
    private function syncBrand($productClass)
    {
        [$itemSync, $sizeSync, $colorSync, $brandSync] = $this->getUpdateStatus($productClass);
        if ($brandSync >= 0) {
            // below
            $lastBrand = $brandSync;
            $apiLatestBrandData = file_get_contents('https://raiganj.crio77.com/api/updateStatus.php?lastBrand=' . $lastBrand);

            $apiLatestBrandData = json_decode($apiLatestBrandData);
            // this can be abstracted using a method where each item is passed inside foreach

            $db = Database::newInstance();
            // $limitTry=0;
            foreach ($apiLatestBrandData as $brand) {
                $arr['crioId'] = ucwords($brand->id);
                $arr['name'] = ucwords($brand->name ?: '0');
                $arr['websiteIs'] = ucwords($brand->websiteIs ?: '');
                $arr['companyIs'] = ucwords($brand->companyIs ?: '');
                $arr['qualityIs'] = ucwords($brand->qualityIs ?: '');
                $arr['dealsIn'] = ucwords($brand->dealsIn ?: '');
                $arr['catalogType'] = ucwords($brand->catalogType ?: 0);
                $arr['remark'] = ucwords($brand->remark ?: '');

                $query = "INSERT INTO brands (crioId, name, websiteIs, companyIs, qualityIs, dealsIn, catalogType, remark) VALUES (:crioId, :name, :websiteIs, :companyIs, :qualityIs, :dealsIn, :catalogType, :remark)";
                $db->write($query, $arr);
                //      $limitTry++;                 
                // if($limitTry>3){
                //     break;
                // }
                $arr = null;
            }
        }
    }

    public function syncAll($productClass)
    {
        // here call all the sync private methods
        $this->syncItem($productClass);
        $this->syncSize($productClass);
        $this->syncColor($productClass);
        $this->syncBrand($productClass);

        return 'success';
    }
}
