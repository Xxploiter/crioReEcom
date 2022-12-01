<?php 

class Category {
   
    public function create($DATA){
       $db = Database::getInstance();
       $arr['category'] = ucwords($DATA->data);
       if(!preg_match('/^[a-z A-Z ]+$/', trim($arr['category']))){
        $_SESSION['error'] = 'please insert a valid cata name';
       }
       if( !isset($_SESSION['error']) || $_SESSION['error'] == ""){
           $query = "INSERT INTO categories (category) VALUES (:category)";
           $check = $db->write($query, $arr);
           if($check) {
            return true;
        }
       }
       return false;
    }

    public function edit($DATA){

    }

    public function delete($DATA){

    }
    public function getAll(){
        $db = Database::newInstance();
         $result = $db->read("SELECT * FROM categories ORDER BY id DESC");
         return $result;
        
    }
    public function make_table($allCategory){
        $result = "";
        if(is_array($allCategory)){
            $index = 1;
            foreach ($allCategory as $categoryRow) {
                if($categoryRow->disabled){
                    $status = 'Not-Active';
                    $class = 'danger';
                }else{
                    $status = 'Active';
                    $class = 'success';
                   
                }
                $result .= '<tr class="tableRow">
                    <td><strong>'.$index.'</strong></td>
                    <td>'.$categoryRow->category.'</td>
                    <td><span class="badge light badge-'.$class.'">'.$status.'</span></td>
                    <td> <button type="button" class="btn light btn-info">Active/Deactive</button>
                        <button type="button" class="btn light btn-warning">Edit</button>
                        <button type="button" class="btn light btn-danger">Dlt</button>
                    </td>
                </tr>';
                $index = $index + 1;

            }
        }
        return $result;
    }
}
