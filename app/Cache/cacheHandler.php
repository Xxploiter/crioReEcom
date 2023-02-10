<?php
//In other services or files where you want to use this caching function, 
//include the CacheHandler.php file and call the CacheHandler::getDataFromCacheOrAPI() method. 

// ledger_data.retailerId.cache is the cache file name, 'https://raiganj.crio77.com/api/ledger_data.php?id=' . $retailerId is the API URL, 
//and 60 * 60 * 24 is the time to live (TTL) in seconds (24 hours).

class CacheHandler
{

    public static function getRetailerDataFromCacheOrAPI($cacheFile, $apiUrl, $ttl, $retailerId)
    {   
        $cacheFile = $cacheFile.$retailerId.'.cache';
        // Check if the cache file exists
        if (file_exists($cacheFile) && filemtime($cacheFile) > time() - $ttl) {
            // If the cache file is less than 24 hours old, use it
            return unserialize(file_get_contents($cacheFile));
        }
        // Fetch data from the API
        $apiData = file_get_contents($apiUrl);
        // Perform data processing, if necessary
        $processedLedgerData = json_decode($apiData, true);
        // Store the processed data in a cache file
        file_put_contents($cacheFile, serialize($processedLedgerData));

        return $processedLedgerData;
    }
    public static function getSyncFromCacheOrAPI($cacheFile, $apiUrl, $ttl, $retailerId)
    {   
    //    here some other method to get the data from cache or API
    }
}
