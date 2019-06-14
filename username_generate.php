<?php
// auto generate username

function generate_user($name="vaibhav Buccha" , $rand_no = 200){
    $user_part = array_filter(explode(" ",strtolower($name)));  #explode and lowercase name
    print_r($user_part);

    // in this case they both return same 
    $user_part =  array_slice($user_part,0,2); #return only 2 array part 
    print_r($user_part);

    $part1 = (!empty($user_parts[0]))?substr($user_parts[0], 0,8):""; //cut first name to 8 letters
	$part2 = (!empty($user_parts[1]))?substr($user_parts[1], 0,5):""; //cut second name to 5 letters
    $part3 = ($rand_no)?rand(0, $rand_no):"";
    
    $username = $part1. str_shuffle($part2). $part3; //str_shuffle to randomly shuffle all characters 
	echo $username;
}

// generate_user();

function user_gen($name="vaibhav buccha"){
    $user_part = array_filter(explode(" ",strtolower($name)));
    echo "$user_part[0]".rand(0,200);
}
user_gen();

?>