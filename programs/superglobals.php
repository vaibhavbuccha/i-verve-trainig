<?php

// superglobal vairable variable are those variables whoes scope is global throughout the program.

/***
 * some super global variables are.
 * 
 * $GLOBALS --> it is use for use a variable globaly.
 * 
 */

 $x = 5;
 $y = 10;

 function add(){
     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
     return $GLOBALS['z'];
 }
function show(){
    echo add();
}
show();


/**
 * 
 * $_COOKIE --> use for deal with cookie;
 * $_SESSION --> use for deal with session;
 * $_GET --> use for get data ;
 * $_POST --> use for get data in secure way;
 * $_REQUEST --> use for requesting data;
 * $_SERVER --> use for deal with server info;
 * $_ENV -->
 * 
 */




?>