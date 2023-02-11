<?php
require_once 'retailerservice.php';
require_once 'InventoryService.php';
// please while writing the services take care of your spelling it is case sensitive
class ServiceFactory
{
    // The createService method is made static in the ServiceFactory class because
    // it does not require any instance of the class to be created, instead
    // it can be directly invoked using the class name and the scope resolution
    // operator(::). Making it static allows the method to be invoked without having 
    // to instantiate the class and provides a more efficient way to access the method.
    public static function createService($serviceType)
    {
        switch ($serviceType) {
            case 'retailerservice':
                return new RetailerService();
                break;
            case 'inventoryservice':
                return new InventoryService();
                break;
            default:
                return false;
                break;
        }
    }
}
