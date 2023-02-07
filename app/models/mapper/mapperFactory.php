<?php  
require_once 'colorMapper.php';
require_once 'sizeMapper.php';
require_once 'productMapper.php';

class MapperFactory
{
    public static function getMapper($data)
    {
        switch ($data) {
            case is_array($data) && isset($data[0]['name']):
                return new ColorMapper();
                break;
            case is_array($data) && isset($data[0]['size']):
                return new SizeMapper();
                break;
            case is_array($data) && isset($data[0]['title']):
                return new ProductMapper();
                break;
            default:
                throw new Exception("No mapper found for this data type");
        }
    }
}
?>