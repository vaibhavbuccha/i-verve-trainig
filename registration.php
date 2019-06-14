<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
    name : <input type="text" name="name">
    <br>
    email : <input type="email" name="email">
    <br>
    phone : <input type="number" name="phone">
    <br>
    password : <input type="password" name="password">
    <br>
    confirm password : <input type="password" name="con_password">
    <br>
    <input type="submit" name="register">
    </form>
</body>
</html>

<?php

if(isset($_post['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $con_pass = $_POST['con_password'];
    $error = array();

    if($pass === $con_pass){
        array_push($error,"password dont match");
    }
}





?>