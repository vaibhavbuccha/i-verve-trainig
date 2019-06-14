<?php


session_start();

// echo $_SESSION['user'];
if(!$_SESSION['user']){
    header("location:index.php");
}


