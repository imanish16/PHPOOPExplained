<?php

class class1 
{
    
    public function __construct(){
        echo"Construct".PHP_EOL;
    }

    /**
     * __destruct function is also magic function
     * Destruct function will be called automatically at the end of the object instantiated.
     */
    public function __destruct(){
        echo"Destruct".PHP_EOL;
    }

}


class class2 extends class1 
{
    function __destruct(){
        parent::__destruct();
        echo "Destruct of Class2";
    }

    /**
     * Simmilarly you can call the parent destruct function too by using parrent scope resolution 
     */
}

$obj = new class2;
?>