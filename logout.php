<?php 
require 'core.php';

session_destroy();


if (isset($_COOKIE["user"]) AND isset($_COOKIE["pass"])){
    setcookie("user", '', time() - (3600));
    setcookie("pass", '', time() - (3600));
}

header('Location: '.$http_refer);





?> 