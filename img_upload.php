<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" enctype="multipart/form-data" method="post">
        <input type="file" name="file[]" multiple >
        <input type="submit" name="upload">
    </form>
</body>
</html>

<?php
if(isset($_POST['upload'])){

    for($i=0;$i<=count($_FILES['file']['name']);$i++){
        $name = $_FILES['file']['name'][$i];
        $tmp_name = $_FILES['file']['tmp_name'][$i];
        $dest = "image/".$name;
        move_uploaded_file($tmp_name,$dest);
    }


    
}



?>