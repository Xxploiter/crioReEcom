<?php

// This class is devloped by Souvik

class Advertisement
{
    // Function to add data in the database 
    public function create($DATA, $FILES, $imageEditClass = null)
    {
        $_SESSION['error'] = '';

        $arr['itemId'] = $DATA->itemId;
        $arr['description'] = ucwords($DATA->description);
        $arr['title'] = ucwords($DATA->title);
        $arr['discount'] = $DATA->discount;
        $arr['price'] = $DATA->price;
        $arr['availability'] = $DATA->availability;
        $arr['for'] = ucwords($DATA->for);
        $arr['forSubSection'] = ucwords($DATA->forSubSection);

        // validating the recieved data below

        if (!preg_match('/^[a-z A-Z 0-9.\-_]+$/', trim($arr['description']))) {
            $_SESSION['error'] .= 'please insert a valid description for this advertisement';
        }
        if (!preg_match('/^[a-z A-Z 0-9.\-_]+$/', trim($arr['title']))) {
            $_SESSION['error'] .= 'please insert a valid title for this advertisement';
        }
        if (!is_numeric($arr['discount'])) {
            $_SESSION['error'] .= 'please insert a valid discount for this advertisement';
        }
        if (!is_numeric($arr['price'])) {
            $_SESSION['error'] .= 'please insert a valid price for this advertisement';
        }
        if (!preg_match('/^[a-z A-Z 0-9.\-_]+$/', trim($arr['for']))) {
            $_SESSION['error'] .= 'please insert a valid for for this advertisement';
        }
        if (!preg_match('/^[a-z A-Z 0-9.\-_]+$/', trim($arr['forSubSection']))) {
            $_SESSION['error'] .= 'please insert a valid forSubSection for this advertisement';
        }


        $arr['image1'] = '';
        $arr['image2'] = '';
        $arr['image3'] = '';

        $allowedFileTypes[] = "image/jpeg";
        $allowedFileTypes[] = "image/jpg";
        $allowedFileTypes[] = "image/png";
        $allowedFileSizeInMB = 10 * 1024 * 1024;
        $imageDirectory = "uploads/";
        if (!file_exists($imageDirectory)) {
            mkdir($imageDirectory, 0777, true);
        }

        // now we check for files
        foreach ($FILES as $actualImagePathName => $image) {
            if ($image['error'] == 0 && in_array($image['type'], $allowedFileTypes)) {
                if ($image['size'] < $allowedFileSizeInMB) {

                    $destination = $imageDirectory . $image['name'];
                    move_uploaded_file($image['tmp_name'], $destination);
                    $arr[$actualImagePathName] = $destination; //here we are moving the image to the destination folder path 
                    // as the image is moved we can perform some editing on it 
                    $imageEditClass->resize_image($destination, $destination, 1280, 720); // here we are taking the image destination and as source and the final destination as
                    //    $destination as well as we want to replace the same file after doing some processing on it and 1200 * 1200 is the resolution
                } else {
                    $_SESSION['error'] .= $actualImagePathName . 'PLease provide a small size image';
                }
            } else {
                $_SESSION['error'] .= $actualImagePathName . 'PLease check file type or any errors';
            }
        }
        $arr['disabled'] = 0;
        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {
            $db = Database::newInstance();
            // show($arr);
            // die;
            $query = "INSERT INTO advertisement (itemId, description, title, discount, price, availability, forCat, forSubSection, image1, image2, image3, disabled) VALUES ( :itemId, :description, :title, :discount, :price, :availability, :for, :forSubSection, :image1, :image2, :image3, :disabled)";
            $check = $db->write($query, $arr);
            if ($check) {
                return true;
            }
        }
        return false;
    }


    public function edit($data, $FILES, $imageEditClass = null)
    {


        // images
        $images = '';
        $allowedFileTypes[] = "image/jpeg";
        $allowedFileTypes[] = "image/jpg";
        $allowedFileTypes[] = "image/png";
        $allowedFileSizeInMB = 10 * 1024 * 1024;
        $imageDirectory = "uploads/";
        if (!file_exists($imageDirectory)) {
            mkdir($imageDirectory, 0777, true);
        }

        // now we check for files
        foreach ($FILES as $actualImagePathName => $image) { // $actualImagePathName will have the images names ex:- image1 { $image: { type: '', tmp_name } } its like an assoc array of objects
            if ($image['error'] == 0 && in_array($image['type'], $allowedFileTypes)) {
                if ($image['size'] < $allowedFileSizeInMB) {
                    $destination = $imageDirectory . $image['name'];
                    move_uploaded_file($image['tmp_name'], $destination); //here we are moving the image to the destination folder path 
                    // as the image is moved we can perform some editing on it 
                    $arr[$actualImagePathName] = $destination; // $arr[image1] = uploads/imageNameis.jpg then the ppdo will do its thing and set the result to image1 column
                    $imageEditClass->resize_image($destination, $destination, 1200, 1200); // here we are taking the image destination and as source and the final destination as
                    //    $destination as well as we want to replace the same file after doing some processing on it 
                    $images .= "," . $actualImagePathName . "= :$actualImagePathName"; //Building the image query, later i am using the $image variable in the query to edit 
                } else {
                    $_SESSION['error'] .= $actualImagePathName . 'PLease provide a small size image';
                }
            } else {
                $_SESSION['error'] .= $actualImagePathName . 'PLease check file type or any errors';
            }
        }

        // images end // 


        $arr['id'] = $data->advertisementIdEdit;
        $arr['itemId'] = $data->advertisementItemIdEdit;
        $arr['description'] = $data->advertisementDescriptionEdit;
        $arr['title'] = $data->advertisementTitleEdit;
        $arr['discount'] = $data->advertisementDiscountEdit;
        $arr['price'] = $data->advertisementPriceEdit;
        $arr['availability'] = $data->advertisementAvailabilityEdit;
        $arr['forCat'] = $data->advertisementForEdit;
        $arr['forSubSection'] = $data->advertisementForSubSectionEdit;



        $db = Database::newInstance();
        $query = "UPDATE advertisement SET itemId = :itemId, description = :description, title = :title, discount = :discount, price = :price, availability = :availability, forCat = :forCat, forSubSection = :forSubSection  $images WHERE id = :id limit 1";
        $result = $db->write($query, $arr);
        return $result;
    }


    // This func will make the html format for table using all the advertsement values
    // we will use this func to create table in the view page
    public function makeTable($allAdvertisement)
    {
        $result = "";
        if (is_array($allAdvertisement)) {
            $index = 1;
            foreach ($allAdvertisement as $advertisementRow) {
                // $advertisementNameIs =  "'$advertisementRow->description'"; //here extracting the category name first as string values in onlick js creates problem
                $onclickParams = array();
                $onclickParams['id'] = $advertisementRow->id;
                $onclickParams['itemId'] = $advertisementRow->itemId;
                $onclickParams['description'] = $advertisementRow->description;
                $onclickParams['title'] = $advertisementRow->title;
                $onclickParams['discount'] = $advertisementRow->discount;
                $onclickParams['price'] = $advertisementRow->price;
                $onclickParams['availability'] = $advertisementRow->availability;
                $onclickParams['for'] = $advertisementRow->forCat;
                $onclickParams['forSubSection'] = $advertisementRow->forSubSection;
                $onclickParams['image1'] = $advertisementRow->image1;
                $onclickParams['image2'] = $advertisementRow->image2;
                $onclickParams['image3'] = $advertisementRow->image3;


                $onclickParams = str_replace('"', "'", json_encode($onclickParams));

                // $singleCategoryName = $model->getOne($advertisementRow->category); //getting the equivalent category name using their id from category classes method getOne which returns a single object
                // $categoryName =  $singleCategoryName->category ?? 'No-category Alloted';
                if ($advertisementRow->disabled) {
                    $status = 'Not-Active';
                    $class = 'danger';
                    $toggle = 'Activate';
                    $toggleStyle = 'success';
                } else {
                    $status = 'Active';
                    $class = 'success';
                    $toggle = 'Deactivate';
                    $toggleStyle = 'warning';
                }
                $result .= '<tr class="tableRow">
                    <td><strong>' . $index . '</strong></td>
                    <td>' . $advertisementRow->itemId . '</td>
                    <td><div class="d-flex align-items-center"><img src="' . ROOT . $advertisementRow->image1 . '" class="rounded-lg mr-2" width="24" alt=""><img src="' . ROOT . $advertisementRow->image2 . '" class="rounded-lg mr-2" width="24" alt=""><img src="' . ROOT . $advertisementRow->image3 . '" class="rounded-lg mr-2" width="24" alt=""></div></td>
                    <td>' . $advertisementRow->title . '</td>
                    <td>' . $advertisementRow->description . '</td>
                    <td>' . $advertisementRow->discount . '</td>
                    <td>' . $advertisementRow->price . '</td>
                    <td>' . $advertisementRow->availability . '</td>
                    <td>' . $advertisementRow->forCat . '</td>
                    <td>' . $advertisementRow->forSubSection . '</td>
                    <td><span class="badge light badge-' . $class . '">' . $status . '</span></td>
                    <td><button onClick="toggleStateAdvertisement({event:event,id:' . $advertisementRow->id . ',currentState:' . $advertisementRow->disabled . '})" type="button" class="btn light btn-' . $toggleStyle . '">' . $toggle . '</button>
                        <button data-toggle="modal" data-target="#editAdvertisementModal" onClick="editAdvertisementModalData(' . $onclickParams . ')" type="button" class="btn light btn-info">Edit</button>
                        <button onClick="dltAdvertisement({event:event,id:' . $advertisementRow->id . '})" type="button" class="btn light btn-danger">Dlt</button>
                    </td>
                </tr>';
                $index = $index + 1;
            }
        }
        return $result;
    }

    //This function will get all the adds from the datbase
    public function getAllAdvertisement()
    {

        $db = Database::newInstance();
        $advertisements = $db->read("SELECT * FROM advertisement ORDER BY id DESC");

        return $advertisements;
    }

    // Delete advertisement by id
    public function delete($id)
    {
        $db = Database::newInstance();
        $id = (int)$id;
        $query = "DELETE FROM advertisement WHERE id = '$id' limit 1";
        $result = $db->write($query);
        return $result;
    }

    // To activate or deactivate a advertisement
    public function toggle($id, $wouldBeState)
    {

        $db = Database::newInstance();
        $id = (int)$id;
        $wouldBeState = (int)$wouldBeState;
        $query = "UPDATE advertisement SET disabled = '$wouldBeState' WHERE id = $id LIMIT 1 ;";
        $result = $db->write($query);
        return $result;
    }
}
