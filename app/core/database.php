<?php
// this is the database class IMP start reading the code from the $db = Database::getInstance(); line

class Database{
    public static $con=NULL;
    public function __construct(){

       try{
        $string = DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME;
        self::$con = new PDO($string,DB_USER,DB_PASS);

       }catch (PDOException $e){
        die($e->getMessage());
       }      
    }


    public static function getInstance(){
        if(self::$con){
          return self::$con;
        }else{
            return  $instance = new self();            
        }
    }
    public static function newInstance(){   
            return  $instance = new self();            
    }
    // read function from database
    public function read($query, $data= array()){

        $stmt = self::$con->prepare($query);
        $result = $stmt->execute($data);
        // after executing lets check if the result was ok 
        if($result){
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        if(is_array($data) && count($data)>0){
            return $data;
        }
            return false;
        }
    }

    // write function to database
    public function write($query, $data=array()){
        $stmt = self::$con->prepare($query);
        $result = $stmt->execute($data);
        // after executing lets check if the result was ok 
        if($result){
            return true;  
        }
        return false;
    }

}


// IMP START READING FROM HERE IMP
// we run this line below to get the instance of the database class 
// $db = Database::getInstance();
// inside the getInstance() function if the class has already been inititalied
// we return the instance of the class if its not then we initialize the class from inside
// $data = $db->read("describe crioretailers");
// show($data);
?>