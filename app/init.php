<?php 
// here in init this will be the single point of accessing the files from core folder IMP  
// this file will include all the important frequently needed stuff and will be later imported by the index.php in the public index.php
include "../app/core/config.php";
include "../app/core/controller.php";
include "../app/core/functions.php";
include "../app/core/database.php";
include "../app/core/app.php";
?>