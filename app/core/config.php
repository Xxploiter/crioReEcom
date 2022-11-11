<?php 
// this config file will be used to configure the website
define("WEBSITE_TITLE", 'Crio-Re');
define("DB_NAME", 'CriorRe_db');
define("DB_HOST", 'Localhost');
define("DB_USER", 'root');
define("DB_PASS", '');
// below we can choose the type of database we might want to use in the future
define("DB_TYPE", 'mysql');
define('DEBUG', true);



define('THEME', 'userview/');
define('ADMIN_THEME', 'admin/');

if(DEBUG){
    // ini setting is used to tell php how to run or configure php
    ini_set('display_errors', 1);
}else{
    ini_set('display_errors', 0);
}

?>