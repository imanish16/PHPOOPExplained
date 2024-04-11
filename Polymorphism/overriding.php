<?php

/**
 * Overriding : If you have a function with same name in same class then you cant override a function because you cannot create a function with same name but if you a children class has same name of function then it overrides the function
 */

class class1 {
    public function Test(){
        echo "Class1:Test";
    }
}

class class2 extends class1 {
    public function Test(){
        echo "Class2:Test";
    }
}

$obj = new class2;
$obj->Test();
?>