<?php

include "connection.php";
if(isset($_POST['like'])){
    $id = $_POST['postid'];
    $user = $_POST['username'];
    // echo '<script>alert("'.$user.'")</script>';
    $like= "INSERT INTO like_dislike(username,post_id) VALUES ('$user','$id')";
    $check_like = "SELECT * FROM like_dislike WHERE username='$user' AND post_id='$id'  ";
    $check_result = mysqli_query($con,$check_like);
    if(!mysqli_num_rows($check_result)){
      mysqli_query($con,$like);
      echo "<script>
                document.getElementById('like').textContent='Like';
            </script>";
    }
    else{
        echo '<script>
        document.getElementById("like").style.background-color="Dislike";
    </script>';
        $unlike = "DELETE FROM like_dislike WHERE username='$user' AND post_id='$id' ";
        mysqli_query($con,$unlike);
    }
}