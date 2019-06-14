<?php
include_once 'header.php';
?>
<?php
include_once 'connection.php';
error_reporting(0);
if(isset($_POST['signup']))
{
    $name= mysqli_real_escape_string($con,$_POST['full_name']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $password_con = mysqli_real_escape_string($con,$_POST['password_con']);
    $dob = mysqli_real_escape_string($con,$_POST['DOB']);
    $hobbie = mysqli_real_escape_string($con,$_POST['hobbies']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $country = mysqli_real_escape_string($con,$_POST['country']);
    $username = "";
    $enc_pass = md5($password);
    $error = array();
    if($password !== $password_con){
        array_push($error,"password not match");
    }

    $check_user = "SELECT * from user where email='$email' or phone = '$phone' ";
    $result = mysqli_query($con,$check_user);
    
    if(mysqli_num_rows($result)){
        array_push($error,"email phone no already registered");
    }

    $hobbies=str_replace(" ", ",", $hobbie);

    // echo $hobbies;
    // print_r($error);
    $pic_name= $_FILES['pic']['name'];
    $pic_tmp_name = $_FILES['pic']['tmp_name'];
    $destination = "image/".$pic_name;
    if(!move_uploaded_file($pic_tmp_name,$destination))
    {
        array_push($error,"picture not uploaded");
    }

    if(empty($error))
    {
        $insert = "INSERT INTO user(name,email,password,dob,hobbies,phone,country,username) VALUES ('$name','$email','$enc_pass','$dob','$hobbies','$phone','$country','$username')";
        if(mysqli_query($con,$insert)){
            header("location:index.php");
        }
    }else{
      

      
        foreach($error as $errors)
        {
            // echo $errors;
            echo '<script>alert("'.$errors.'")</script>';
        }
    }
}

 ?>

<div class="login_body">
<br>
    <div class="signup_box">
    <div align="center" class="bg-danger text-light">
            <?php
       
            ?>
        </div>
   
        <div id="tag_login"> SignUp Here! </div>
        
       
        <form action="#" enctype="multipart/form-data" method="post">
            <table class="table table-hover">
                <tr>   
                    <th class="form_tag">
                        Full Name : 
                    </th>
                    <td>
                        <input type="text" required class="form-group" name="full_name">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Email : 
                    </th>
                    <td>
                        <input type="email" required class="form-group" name="email">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Password : 
                    </th>
                    <td>
                        <input type="password" required class="form-group" name="password">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Confirm Password : 
                    </th>
                    <td>
                        <input type="password" required class="form-group" name="password_con">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        DOB : 
                    </th>
                    <td>
                        <input type="date" required class="form-group" name="DOB">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Hobbies : 
                    </th>
                    <td>
                        <input type="radio" value="coding" required name="hobbies">Coding&nbsp;<input type="radio" value="playing" required name="hobbies">playing&nbsp;<input type="radio" value="singing" required  name="hobbies">singing
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Phone : 
                    </th>
                    <td>
                        <input type="number" required class="form-group" name="phone">
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Country : 
                    </th>
                    <td>
                        <select name="country" class="form-group">
                            <option value="India">India</option>
                            <option value="US">US</option>
                            <option value="Pakistan">pakistan</option>
                        </select>
                    </td>
                <tr>
                <tr>   
                    <th class="form_tag">
                        Profile Picture : 
                    </th>
                    <td>
                        <input type="file" required class="form-group" name="pic">
                    </td>
                <tr>
                <tr>
                    <td align="center" colspan="2">
                        <input type="submit" value="SignUp" name="signup" class=" btn btn-outline-info">
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                       <a href="index.php">Allready Have An Account</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>




<?php
include_once 'footer.php';

?>