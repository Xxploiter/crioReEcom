<?php 
session_start();

$root = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
$root = str_replace("index.php", "", $root);
define('ROOT', $root);
// above code is used to get the root path for accessing the assets.
define('ASSETS', $root."assets/");
// above we are assigning the paths to some constant variables for later use 

include "../app/init.php";
$app = new App();


