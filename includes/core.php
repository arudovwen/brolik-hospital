<?php
ob_start();

if (!isset($_SESSION)) {
    session_start();
} else {
    session_destroy();
    session_start();
}
;


require 'dbconnect.php';
$current_file= $_SERVER['SCRIPT_NAME'];
$http_refer = @$_SERVER['HTTP_REFERER'];



if (!function_exists('loggedin')) {
    function loggedin(){
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
            return true;
        }else {
            return false;
        }
    }
} 
?>