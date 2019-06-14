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

 <div class="container-fluid">
   <div class="row">
        <div class="bg-primary col-sm-3 profile-area">
            <div align='center'>
                <img src="image/pic.jpg" class="profile_pic">
            </div>
            <div class="text-light u_name text-center">
                <?php echo $_SESSION['user']; ?>
            </div>
            <div align='center'>
                <a href="#" class="btn btn-success">View Profile</a> &nbsp;
                <a href="#" style="color:white;" class="btn btn-warning">Edit Profile</a>
            </div>
            <br>
            <div align='center'>
                <a href="#" class="btn btn-danger">Your Posts</a> 
            </div>
        </div>
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
            <div class="jumbotron"></div>
        </div>
   </div>
 </div>
