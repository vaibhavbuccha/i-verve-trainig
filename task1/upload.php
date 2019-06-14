<?php
// error_reporting(0);



if(isset($_POST['upload'])){
    $content = $_POST['content'];
    $date =  date('d/M/Y');
    for($i=0;$i<count($_FILES['file']['name']);$i++){
        $file_array = array(
            'name'      => $_FILES['file']['name'][$i],
            'type'      => $_FILES['file']['type'][$i],
            'tmp_name'  => $_FILES['file']['tmp_name'][$i],
            'error'     => $_FILES['file']['error'][$i],
            'size'      => $_FILES['file']['size'][$i]
            );
        $destination = "image/".$file_array['name'];
        move_uploaded_file($file_array['tmp_name'],$destination);
    }

    
    // echo "<pre>"; print_r($_FILES['file']['name'][0]);
}
















?>