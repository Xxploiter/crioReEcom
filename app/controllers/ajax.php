<?php 
class Ajax extends Controller{

   public function index(){ 
    
    $data = json_decode(file_get_contents('php://input'));
    // print_r($data);
    if(is_object($data)){
        if($data->data_type == 'add_category'){
            
            $category = $this->load_model('Category');
            $check = $category->create($data);
            if( isset($_SESSION['error']) && $_SESSION['error']!= ""){
                $arr['message'] = $_SESSION['error'];
                $_SESSION['error'] = '';
                $arr['message_type'] = 'error';
                $arr['data'] = '';
                // $allCategory = $category->getAll();
                // $arr['data'] = $category->make_table($allCategory);
               
                echo json_encode($arr);
            }else{
                $arr['message'] = 'category added';
                $arr['message_type'] = 'info';
                $allCategory = $category->getAll();
                $arr['data'] = $category->make_table($allCategory);
                echo json_encode($arr);
            }
        }
    }

    }
}



?>