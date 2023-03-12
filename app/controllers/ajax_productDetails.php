<?php

class Ajax_productDetails extends Controller
{
    public function index()
    {
        if (count($_POST) > 0) {
            $data = (object)$_POST;
        } else {
            $data = json_decode(file_get_contents('php://input'));
        }

        if (is_object($data) && isset($data->data_type)) {

            if ($data->data_type == 'getQtyFromColorSize') {
                $returnData['qty'] = 12;
                
                echo json_encode($returnData);
            }
        }
    }
}
?>