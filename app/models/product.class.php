<?php

class Product
{

    // below function takes in a string and makes it proper slag format or url fomrat
    public function str_to_url($url)
    {
        $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
        $url = trim($url, "-");
        $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
        $url = strtolower($url);
        $url = preg_replace('~[^-a-z0-9_]+~', '', $url);
        return $url;
    }
    public function create($DATA, $FILES,$imageEditClass = null)
    {
        $_SESSION['error'] = '';
        $db = Database::newInstance();
        $arr['description'] = ucwords($DATA->description);
        $arr['category'] = ucwords($DATA->category);
        $arr['price'] = ucwords($DATA->price);
        $arr['quantity'] = ucwords($DATA->quantity);
        $arr['name'] = ucwords($DATA->name);
        $arr['date'] = date("Y-m-d H:i:s");
        $arr['user_url'] = $_SESSION['user_url'];
        $arr['slag'] = $this->str_to_url($arr['name']);

        // validating the recieved data below

        if (!preg_match('/^[a-z A-Z 0-9.\-_]+$/', trim($arr['description']))) {
            $_SESSION['error'] .= 'please insert a valid description for this product';
        }
        if (!is_numeric($arr['quantity'])) {
            $_SESSION['error'] .= 'please insert a valid quantity for this product';
        }
        if (!is_numeric($arr['price'])) {
            $_SESSION['error'] .= 'please insert a valid price for this product';
        }
        if (!is_numeric($arr['category'])) {
            $_SESSION['error'] .= 'please insert a valid price for this product';
        }
        if (!preg_match('/^[a-z A-Z 0-9.\-_]+$/', trim($arr['name']))) {
            $_SESSION['error'] .= 'please insert a valid name for this product';
        }
        // making sure the slag is unique

        // slag creation
        $checkSlagRepetition['slag'] = $arr['slag'];
        $query = "SELECT slag FROM products WHERE slag = :slag limit 1";
        $check = $db->read($query, $checkSlagRepetition);
        if ($check) {
            $arr['slag'] .= '-' .rand(0,999999);
        }
        // slag end

        $arr['image1'] = '';
        $arr['image2'] = '';
        $arr['image3'] = '';
        $arr['image4'] = '';

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
                    $arr[$actualImagePathName] = $destination;//here we are moving the image to the destination folder path 
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

        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {
            $query = "INSERT INTO products ( description, category, price, quantity, name, date, user_url, image1, image2, image3, image4, slag) VALUES ( :description, :category, :price, :quantity, :name, :date, :user_url, :image1, :image2, :image3, :image4, :slag)";
            $check = $db->write($query, $arr);
            if ($check) {
                return true;
            }
        }
        return false;
    }
// IMP------------------------------------------------------------EDIT function
    public function edit($data, $FILES, $imageEditClass = null) 
    {
        $db = Database::newInstance();

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
                    $imageEditClass->resize_image($destination, $destination,1200, 1200);// here we are taking the image destination and as source and the final destination as
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


        $arr['id'] = $data->productIdEdit;
        $arr['name'] = $data->productNameEdit;
        $arr['price'] = $data->productPriceEdit;
        $arr['category'] = $data->productCataEdit;
        $arr['description'] = $data->productDescriptionEdit;
        $arr['quantity'] = $data->productQuantityEdit;
        $query = "UPDATE products SET description = :description, category = :category, price = :price, quantity = :quantity, name = :name $images WHERE id = :id limit 1";
        $result = $db->write($query, $arr);
        return $result;
    }
// ---------------------------------------------------DELETE function
    public function delete($id)
    {
        $db = Database::newInstance();
        $id = (int)$id;
        $query = "DELETE FROM products WHERE id = '$id' limit 1";
        show($query);
        die;
        $result = $db->write($query);
        return $result;
        
    }
// ---------------------------------------------------ALL PRODUCTS
    public function getAll()
    {
        $db = Database::newInstance();
        $result = $db->read("SELECT * FROM products ORDER BY id DESC");
        return $result;
    }
// ---------------------------------------------------MAKE TABLE
    public function make_table($allProducts, $model = NULL)
    {
        $result = "";
        if (is_array($allProducts)) {
            $index = 1;
            foreach ($allProducts as $productsRow) {
                $productNameIs =  "'$productsRow->description'"; //here extracting the category name first as string values in onlick js creates problem
                $onclickParams = array();
                $onclickParams['id'] = $productsRow->id;
                $onclickParams['name'] = $productsRow->name;
                $onclickParams['description'] = $productsRow->description;
                $onclickParams['price'] = $productsRow->price;
                $onclickParams['category'] = $productsRow->category;
                $onclickParams['quantity'] = $productsRow->quantity;
                $onclickParams['image1'] = $productsRow->image1;
                $onclickParams['image2'] = $productsRow->image2;
                $onclickParams['image3'] = $productsRow->image3;
                $onclickParams['image4'] = $productsRow->image4;


                $onclickParams = str_replace('"', "'", json_encode($onclickParams));

                $singleCategoryName = $model->getOne($productsRow->category); //getting the equivalent category name using their id from category classes method getOne which returns a single object
                $categoryName =  $singleCategoryName->category ?? 'No-category Alloted';
                if ($productsRow->disabled) {
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
                    <td>' . $productsRow->name . '</td>
                    <td><div class="d-flex align-items-center"><img src="' . ROOT . $productsRow->image1 . '" class="rounded-lg mr-2" width="24" alt=""><img src="' . ROOT . $productsRow->image2 . '" class="rounded-lg mr-2" width="24" alt=""><img src="' . ROOT . $productsRow->image3 . '" class="rounded-lg mr-2" width="24" alt=""><img src="' . ROOT . $productsRow->image4 . '" class="rounded-lg mr-2" width="24" alt=""></div></td>
                    <td>' . $productsRow->description . '</td>
                    <td>' . $categoryName . '</td>
                    <td>' . $productsRow->price . '</td>
                    <td>' . $productsRow->quantity . '</td>
                    <td>' . date("jS M, y H:i:s ", strtotime($productsRow->date)) . '</td>
                    <td><span class="badge light badge-' . $class . '">' . $status . '</span></td>
                    <td><button onClick="toggleStateProduct({event:event,id:' . $productsRow->id . ',currentState:' . $productsRow->disabled . '})" type="button" class="btn light btn-' . $toggleStyle . '">' . $toggle . '</button>
                        <button data-toggle="modal" data-target="#editProductModal" onClick="editProductModalData({props:' . $onclickParams . '})" type="button" class="btn light btn-info">Edit</button>
                        <button onClick="dltProduct({event:event,id:' . $productsRow->id . '})" type="button" class="btn light btn-danger">Dlt</button>
                    </td>
                </tr>';
                $index = $index + 1;
            }
        }
        return $result;
    }

}
