<?php
class Ajax_advertisement extends Controller
{

    public function index()
    {

        if (count($_POST) > 0) {
            $data = (object)$_POST;
        } else {
            $data = json_decode(file_get_contents('php://input'));
        }
        // $data = json_decode(file_get_contents('php://input'));
        // print_r($_POST);
        // print_r($_FILES);
        // die;

        if (is_object($data) && isset($data->data_type)) {
            $advertisement = $this->load_model('Advertisement');
            // $categoryClass = $this->load_model('Category');
            $imageProcessingClass = $this->load_model('Image');
            if ($data->data_type == 'add_advertisement') {
                // here we are loading this model to get a respective method for product creation   
                $advertisement->create($data, $_FILES, $imageProcessingClass);
                if (isset($_SESSION['error']) && $_SESSION['error'] != "") {
                    $arr['message'] = $_SESSION['error'];
                    $_SESSION['error'] = '';
                    $arr['message_type'] = 'error';
                    $arr['data'] = '';
                    $arr['data_type'] = 'add_new';

                    // Above we are taking care of all the errors and data type checks
                    echo json_encode($arr);
                } else {
                    $arr['message'] = 'Product added';
                    $arr['message_type'] = 'info';
                    $allAdvertisement = $advertisement->getAllAdvertisement();
                    $arr['data'] = $advertisement->makeTable($allAdvertisement); //using category class's function to get the name of a category
                    $arr['data_type'] = 'add_new';
                    echo json_encode($arr);
                }
            } elseif ($data->data_type == 'toggleState_row') {
                $wouldBeState = $data->currentStateValue ? 0 : 1;
                $id = $data->id;
                $advertisement->toggle($id, $wouldBeState);
                $arr['message'] = "Row succecfully toggled";
                $_SESSION['error'] = '';
                $arr['message_type'] = 'info';
                $allAdvertisement = $advertisement->getAllAdvertisement();
                $arr['data'] = $advertisement->makeTable($allAdvertisement);
                $arr['data_type'] = 'toggled_row';
                echo json_encode($arr);
            } elseif ($data->data_type == 'delete_row') {
                $advertisement->delete($data->id);
                $arr['message'] = "Row succecfully Deleted";
                $_SESSION['error'] = '';
                $arr['message_type'] = 'info';
                $allAdvertisement = $advertisement->getAllAdvertisement();
                $arr['data'] = $advertisement->makeTable($allAdvertisement);
                $arr['data_type'] = 'delete_row';
                echo json_encode($arr);
            } elseif ($data->data_type == 'edit_advertisement') {
                $advertisement->edit($data, $_FILES, $imageProcessingClass);
                $arr['message'] = "Row succecfully Edited";
                $_SESSION['error'] = '';
                $arr['message_type'] = 'info';
                $allAdvertisement = $advertisement->getAllAdvertisement();
                $arr['data'] = $advertisement->makeTable($allAdvertisement);
                $arr['data_type'] = 'edit_advertisement';
                echo json_encode($arr);
            }
        }
    }
}
