<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="img">
    <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
$con = mysqli_connect("localhost","root","","imgup");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $name_img = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    $size = $_FILES['img']['size'];
    $type= $_FILES['img']['type'];
    $error = $_FILES['img']['error'];
    // echo $_FILES ;
    $dest = "$name_img";

    move_uploaded_file($tmp,$dest);

    $insert = "insert into img(name , image) values ('$name','$dest')";
    if(mysqli_query($con,$insert)){
        echo "success";
    }
}

$select = 'SELECT * FROM `img` WHERE 1';
$result = mysqli_query($con,$select);
while($row = mysqli_fetch_assoc($result)){
   
        print_r($row);
        ?>
        <img src="<?php echo $row['image']; ?>" alt="">
        <?php
    
}




?>