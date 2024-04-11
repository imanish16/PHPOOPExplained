<?php

// create a class
class class1{

    //create a property i.e declare a variable
    public $num;
    static $staticNum;

    //call a magic method __construct

    public function __construct(){
        /*
        * assign value to num
        * $this is an object operator
        */
        $this->num = 5;
        // echo the variable num
        echo $this->num;
        self::$staticNum = 89;
        echo  self::$staticNum;
    }
    
    
    /**
     * We can also create a behaviour aka method/function
     */
    
    public function Test(){
        
        $this->num = 8;
        echo $this->num;
    }

    static public function Test2(){
        echo "askd";
    }
}

// $obj = new class1;
// $obj->Test();
// echo class1::$staticNum = 54;

// static
class1::Test2();