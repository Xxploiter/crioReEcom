<?php 
class Ajax_syncData extends Controller{
// As it has extended the controller class it has access to services IMP
   public function index(){ 
    if(count($_POST)>0){
        $data = (object)$_POST;
    }else{
        $data = json_decode(file_get_contents('php://input'));
    }

    if(is_object($data) && isset($data->data_type)){
        $db = Database::getInstance();
        $product = $this->load_model('Product');
        if($data->data_type == 'sync'){ 
        //    here i will call the synService and start the synchronization process
        // TODO create a new product model instance pass it to the service
         }
        
    }

   }
}

?>