<?php 
function show($data){
    echo "<pre>";
    print_r($data);
    echo "<pre>";
}

function check_error(){
    // here we use this function to check for any type of error in the session super global 
   if(isset($_SESSION['ERROR']) && $_SESSION['ERROR'] != ""){
    echo $_SESSION['ERROR'];
    unset($_SESSION['ERROR']);
   } 
}

?>