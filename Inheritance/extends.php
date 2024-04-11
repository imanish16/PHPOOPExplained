<?php

class class1 {

     public function first(){
        echo "Class1:First".PHP_EOL;
     }
}

/**
 * Create a new class name it class2
 * Extends class1 using extends keyword upto class2
 * Now you can inherit all the funciton from class1 in class2
 */

 class class2 extends class1 {

    /**
     * If you create a  function with same name in the children class then the function from parent class will be overridden
     *
     * @return void
     */
    
    
    //  public function first(){
    //     echo "Class2:First";
    //  }
    
    public function second(){
        echo "Class2:Second".PHP_EOL;
    }

 }


 $obj = new class2;
 $obj->first();
 $obj->second();
?>