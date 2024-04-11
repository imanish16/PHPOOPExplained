<?php

/**
 * Interface 
 * It can only consist of abstract function without abstract keyword and no non abtract function can be implemented here
 * It is a contract and not a implementation
 * one can implement multiple interface : which gives us multiple inheritance
 * Cannot Instantiate Interface
 * It's function cannot contain body
 */

 interface class1
 {
    // public function __construct(){
    //     echo "asda";
    // }
     public function foo();
 }


 interface class2
 {
    public function loo();
 }

 class class3 implements class1{
    public function __construct() {
        echo "Construct".PHP_EOL;
    }
    public function foo(){
        print_r('here');
    }
 }

 
$obj = new class3;
$obj->foo();