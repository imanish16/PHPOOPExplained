<?php

/**
 * Accessors and mutators | getters and setters
 * 
 */

 class class1{
    protected $num = 0;

    // accessor function
    public function getValue(){
        echo $this->num.PHP_EOL;
    }

    // mutator function
    public function setValue($value){
         $this->num = $value;
    }
 }

$obj = new class1;
// as you cannot set value or get value of protected and private property so we use getter and setters
// $obj->num = "";

$obj->getValue();
$obj->setValue(5);
$obj->getValue();