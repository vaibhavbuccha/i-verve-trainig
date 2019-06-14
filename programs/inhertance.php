<?php

class father{
    protected $property ;
    protected $hair_color;
    public function property($p){
        $this->property = $p;
    }
    public function hair_color($color){
        $this->hair_color = $color;
    }
}
class son extends father{
    public function property($p){
        $this->property = $p;
    }
    public function hair_color($col){
        $this->hair_color = $col;
    }
    public function education(){
        return "educated";
    }
}
// $son = new son;
// $son->hair_color("black");
$father  = new father;
$father->hair_color("white");





















?>