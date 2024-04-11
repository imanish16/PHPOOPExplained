<?php


/**
 * What is overloading?
 * overloading means to have two function with same name and diffrent number of parameters 
 * Php oops does not support overloading
 * 
 * if we declare two function with same name the we will get following error:
    Fatal error: Cannot redeclare class1::Test() 
 */


 class class1{

    // public function Test($num){
    //     echo "1";
    // }
    
    // public function Test($num,$abc){
    //     echo "2";
    // }

    public function Test($num,...$args){
        print_r(($args)?$args:'');
        print_r($num);
    }
 }

 $obj = new class1;
$obj->Test(1,5,5,8,7,6,9,4,1,3,2);
?>