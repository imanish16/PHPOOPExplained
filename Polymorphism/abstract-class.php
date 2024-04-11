<?php

/**
 * Abstract classes 
 * 
 * It will have atleast one abstract function
 * Abstract function will not be implemented here
 * It can contain a normal funciton
 * Class extending abstract class must implement the abstract function or else fatal error will be thrown
 * Cannot Instantiate abstract class there now obj will be made of abstract class
 * Cannot make abstract function private 
 */


 abstract class class1{
    public $num;
     
    public function __construct(){
        echo 'manish'.PHP_EOL;
    }

    abstract function test();
 }

 class class2 extends class1{
    
     
     public function test(){
        $this->num = 0;
        echo $this->num;
    }
 }

 $obj = new class2();
 $obj->test();
 