<?php 
class Ajax extends Controller{

   public function index(){ 
    
    $data = json_decode(file_get_contents('php://input'));
    // print_r($data);
    if(is_object($data) && isset($data->data_type)){
        $db = Database::getInstance();
        $category = $this->load_model('Category');
        if($data->data_type == 'add_category'){         
            // here we are loading this model to get a respective method for category creation   
            
            $category->create($data);     
            if( isset($_SESSION['error']) && $_SESSION['error']!= ""){
                $arr['message'] = $_SESSION['error'];
                $_SESSION['error'] = '';
                $arr['message_type'] = 'error';
                $arr['data'] = '';
                $arr['data_type'] = 'add_new';

                // Above we are taking care of all the errors and data type checks
                echo json_encode($arr);
            }else{
                $arr['message'] = 'Category added';
                $arr['message_type'] = 'info';
                $allCategory = $category->getAll();
                $arr['data'] = $category->make_table($allCategory);
                $arr['data_type'] = 'add_new';
                echo json_encode($arr);
            }
        }
        elseif($data->data_type == 'toggleState_row') {
            $disabled = $data->currentStateValue ? 0 : 1;
            // a bug could be above in thhe disabled var
            $id = $data->id;
            $query = "UPDATE categories SET disabled = '$disabled' WHERE id = '$id' LIMIT 1";
            $db->write($query);
            $arr['message'] = "Row succecfully toggled";
            $_SESSION['error'] = '';
            $arr['message_type'] = 'info';
            $allCategory = $category->getAll();
            $arr['data'] = $category->make_table($allCategory);
            $arr['data_type'] = 'toggled_row';
            echo json_encode($arr);
        }
        elseif($data->data_type == 'delete_row') {
            $category->delete($data->id);    
            $arr['message'] = "Row succecfully Deleted";
            $_SESSION['error'] = '';
            $arr['message_type'] = 'info';
            $allCategory = $category->getAll();
            $arr['data'] = $category->make_table($allCategory);
            $arr['data_type'] = 'delete_row';
            echo json_encode($arr);
        } elseif($data->data_type == 'edit_row') {
            $category->edit($data->id, $data->category);    
            $arr['message'] = "Row succecfully Edited";
            $_SESSION['error'] = '';
            $arr['message_type'] = 'info';
            $allCategory = $category->getAll();
            $arr['data'] = $category->make_table($allCategory);
            $arr['data_type'] = 'edit_row';
            echo json_encode($arr);
        }
        
    }

    }
}



?>