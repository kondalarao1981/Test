<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Classes are the blue prints/templates of php objects

class person{  
    
    var $name; //These are called properties. When you declare a property with var keyword, it is considered as public

    //Restricting access to properties using access modifiers. This is called as Encapsulation

    public $height;    // Public is default modifier. These don't have access restrictions, anyne can access them
    protected $social_insurance;   // When declared property as protected, same class and classes that are derived from that class can access the property
    private $pin_number; // Declared property as private, only same class can access the property

    function __construct($persons_name){     //  Constructor allows to initialise object properties. When u create an object from the class constructor will be automatically called



    	$this->name = $persons_name;
    }

    private function get_pin_number(){

    	return $this->$pin_number;
    }

    
    function set_name($new_name){       // These functions are called methods
        
        $this->name = $new_name;    //$this is the Built in variable that points to the current object. It is also called self referencing variable
    }  

    function get_name(){

    	return $this->name;
    }
    
    
}


?>