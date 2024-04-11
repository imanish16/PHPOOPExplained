<?php

/**
 * Access Modifiers | Public,Private,Protected
 * 
 * Public : Globle scope
 * Protected : can be accessed in classes of children
 * Private : can be accessed in one class 
 */
class class1{

    private $num = 5;
    public function Test() {
        echo "Called from Public".PHP_EOL;
        $this->Test4();
        $this->Test3();
    }

    
    private function Test3() {
        echo "Private".PHP_EOL;
    }
    
    protected function Test4() {
        echo "Protected".PHP_EOL;
    }
}

$obj = new class1();
print_r($obj);
// You cannot call test3 because it is private which means it cannot be called outside the scope of its class;  
// $obj->Test();
// $obj->Test3();



// $reflectionClass = new ReflectionClass($obj);
// print_r($reflectionClass);

// $numProperty = $reflectionClass->getProperty('num');
// print_r($numProperty);

// $numProperty->setAccessible(true);
// print_r($numProperty);

// echo $numProperty->getValue($obj);