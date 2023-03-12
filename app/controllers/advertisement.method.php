<?php
function Advertisement($boundedThis, $params = null)
{
    $retailer = $boundedThis->load_model('crioretailers');

    $advertisementModel = $boundedThis->load_model("Advertisement");

    $retailerAuthData = $retailer->check_login(true, ['admin']);
    // the check_login() function is in crioRetailers.class.php
    // retailerAuthData contains an array if user exist and false if no user exist and true is passes then the user is redirected to the login page
    if (is_object($retailerAuthData)) {
        // here if needed i can write code to unable users to enter the site 
        // if theyy dont have an account if no acc then simply redirect the control to the login page
        $data['retailerAuthData'] = $retailerAuthData;
    }

    //Getting all the ads from the db through model
    $allAdvertisement = $advertisementModel->getAllAdvertisement();

    //Shaping the data into a table body so that we can use it in the userview more easily
    $allAdvertisementTableBodyHTML = $advertisementModel->makeTable($allAdvertisement);

    $data['advertisementRows'] = $allAdvertisementTableBodyHTML;
    return $data;
}
