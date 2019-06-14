<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="form">
    <form action="#" enctype="multipart/form-data" method="post">
        <label for="username">username</label>
        <input type="text" name="uname" placeholder="uname"> 
        <br>
        <label for="email">email</label>
        <input type="email" name="email" placeholder="email"> 
        <br>
        <input type="file" name="img" >
        <input type="submit" name="submit">
    </form>
    </div>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    echo $_POST['uname'];
    echo $_POST['email'];
    echo $imgname = $_FILES['img']['name'];
    echo $tmpname = $_FILES['img']['tmp_name'];
}















?>