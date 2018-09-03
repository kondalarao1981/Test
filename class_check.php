<?php

class SimpleClass{

    // property declaration
    public $var = 'Test';

    // method declaration
    public function displayVar(){
        echo $this->var;
    }
}

$instance = new SimpleClass(); // Creating an instance using new keyword or acessing a property
echo $instance->displayVar(); // Calling a method


//Object Assignment
$assigned = $instance;
$reference = & $instance;

echo "<pre>";
print_r($assigned);
echo "</pre>";

echo "<pre>";
print_r($reference);
echo "</pre>";
?>