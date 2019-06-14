<?php

class Student{
    private $name;
    private $rollno;

    // setter

    public function set($name,$rollno){
        $this->name = $name;
        $this->rollno = $rollno;
    }

    // getter

    public function get_name(){
        return $this->name;
    }
    public function get_rollno(){
        echo $this->rollno;
    }
}
$prabhat = new Student;
$prabhat->set("prabhat",56);
echo $prabhat->get_name();
$prabhat->get_rollno();

$vaibhav = new Student;
$vaibhav->set("vaibhav",46);
echo $vaibhav->get_name();
$vaibhav->get_rollno();


?>