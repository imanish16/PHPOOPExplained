<?php

/**
 * __construct() function is a magic function and is called automatically when class is instantiated.
 */
class class1{
    
    public function __construct() {
        echo 'hello';
    }

}


class class2 extends class1{
    // public function __construct() {
    //     echo 'Class 2';
    // }
}

/**
 * When child class inherits the property of class 1.It overrides the function as usual
 * but if you want to call its parent construct function too then you can use Parent scope resolution operator
 */

 class class3 extends class2{
    public function __construct() {
        parent::__construct();
        echo 'Class 3';
    }

 }

 /**
  * Parent operator only calls the construct of the parent class and if the parent class don't have the construct function then it will look for the construct function in class of its parent and if no parent construct function is found it will throw an fatal error
  */

$obj = new class3();

?>