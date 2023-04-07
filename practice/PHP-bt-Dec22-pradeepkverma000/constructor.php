<?php
class car{
    function __construct(){
        echo "Constructor";
    }
    function fun(){
        echo "Hello";
    }
}
$obj=new car();
$obj->fun();

?>