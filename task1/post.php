<?php
include_once "session.php";
?>

 <!-- <div class="container-fluid">
     <button class="btn btn-primary">View profile</button>
 </div>
 <div class="container">
     <div class="jumbotron bg-info">
         <div class="bg-danger container-fluid">
             Create Post
         </div>
         <form action="#" method="post" enctype="multipaert/form-data">
            <textarea  name="blog" class="btn btn-outline-light" id="" cols="90" rows="10">
                
            </textarea>
            <br>
            Upload Image/Videos : <input type="file" class="btn btn-light" multiple name="file[]"><br>
            <input type="submit" name="post" class="btn btn-danger">
        </form>
     </div>
 </div> -->
<script>
    function abc(id){
        document.getElementById("id").value=id;
        // document.getElementById("jugad").value=id;
        //document.getElementById("id").textContent = id;
    }
    </script>

 <div class="container-fluid">
   <div class="row">
        <div class="bg-primary col-sm-3 profile-area">
            <div align='center'>
                <?php
                    $user = $_SESSION['user'];
                    $select_user = "SELECT * FROM user WHERE username='$user' ";
                    $get_user_result = mysqli_query($con,$select_user);
                    $get_user_image = mysqli_fetch_array($get_user_result);
                    // echo '<img src="'.$get_user_image['image'].' class="profile_pic">';
                ?>
                 <img src="<?php echo $get_user_image['image']; ?>" class="profile_pic"> 
            </div>
            <div class="text-light u_name text-center">
                <?php echo $_SESSION['user']; ?>
            </div>
            <div align='center'>
                <a href="profile.php" class="btn btn-success">View Profile</a> &nbsp;
                <a href="update.php" style="color:white;" class="btn btn-warning">Update Profile</a>
            </div>
            <br>
            <div align='center'>
                <a href="Our_post.php" class="btn btn-dark">Your Posts</a> 
            </div>
            <br>
            <div align='center'>
                <a href="logout.php" class="btn btn-danger">Logout</a> 
            </div>
        </div>

<!-- post area -->

        <div class="col-sm-9 post-area">
            <div class="jumbotron">
                <div class="tag-head btn-dark">
                    Create Post
                </div>
                <div class="c_post"><br>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="container">
                            <table  class="table-hover table table-border">
                                <tr>
                                <textarea name="content" id="" class="btn btn-outline-dark" placeholder="#Write Your Content Here!!" title="Write Your Content Here!" cols="90" rows="5"></textarea>
                                </tr>
                                &nbsp;
                                <tr>
                                    <input style="margin:20px;" type="file" name="file[]" multiple class="btn btn-outline-dark">
                                </tr>
                               &nbsp;
                                <tr>
                                    <input type="submit" class='btn btn-outline-info' value='upload' name="upload" >
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
<!-- all posts -->

            <?php
            $post_fetch = "SELECT * FROM post order by id desc";
            $result = mysqli_query($con,$post_fetch);
            while($row = mysqli_fetch_assoc($result)){
                $username = $row['username'];
                $get_img = "SELECT * FROM user WHERE username='$username'";
                $runn = mysqli_query($con,$get_img);
                $user_image = mysqli_fetch_array($runn);
            ?>
            <div class="jumbotron">
                <div class="bg-primary post-head">
                    <div class="post_admin text-light"><img src="<?php echo $user_image['image'] ;?>" class="tag-pic" width="32px" height="32px" >&nbsp;<?php echo $row['username']; ?>&nbsp;<span style="float:right;"><?php echo $row['date']; ?></span><div>
                </div>
            </div>
            <div class="bg-light text-center post-content">
                <?php echo $row['content']; ?>
            </div>
            <div class="bg-light text-center post-content">
                <?php
                $image = $row['images'];
                $image = explode('/',$image);
                // print_r($image);
                $total_img = count($image);
                $width = 850 / ($total_img-1);
                $height= 300;
                // echo $width;
                for($i=0;$i<$total_img-1;$i++){
                    ?>
                    <img src="<?php echo "image/".$image[$i]; ?>" width="<?php echo $width."px";?>" height="<?php echo $height."px";?>">
                    <?php
                }

                ?>
            </div>
            </div>
            <!-- like /dislike -->
            
            <div class="form-group">
                <?php 
                    // $user = $_SESSION['user'];
                    // $postid =$row['id'];
                    // $check_like = "SELECT * FROM like_dislike WHERE username='user' AND post_id='$postid' ";
                    // $find_re = mysqli_query($con,$check_like);
                    // if($find_re){
                ?>
                <input type="button" name="like_btn" value="like" id="Like<?php echo $row['id'];?>" onclick="like( <?php echo $row['id'];?>,'<?php echo $_SESSION['user'];?>' );">
                <?php
                    // }else{
                ?>
                <input type="button" name="like_btn" value="Dis_like" id="Like<?php echo $row['id'];?>" onclick="like( <?php echo $row['id'];?>,'<?php echo $_SESSION['user'];?>' );">
                <?php 
                // } 
                ?>
                <!-- Extra large modal -->

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Comment</button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="container-fluid" style="padding:10px;font-size:20px;letter-spacing:4px;"><b>Comment <br> <hr> </b></div>
                        </div>
                    </div>
                </div>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Comment</button>

                <div class="modal fade bd-example-modal-lg"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <div class="modal-content" >
                        <div style="padding:20px; color: #758AA2;font-size: 20px;" class="container-fluid"><b>Comment</b> <br><hr></div>
                        
                        <div style="width: 500px;height: 200px; border: 1px solid #535C68;" class="container">

                        </div>
                    </div>
                </div>
                </div> -->
            </div>
           
            <!-- <button class="btn btn-danger">Dislike</button> -->
 
        </div>
        <?php } ?>
   </div>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
 <script src="js/post.js"></script>
