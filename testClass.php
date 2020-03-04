<?php

class testClass {

    public $test1;

    function __construct() {
        
    }
    
    public function __get($name, $value) {
        
        if(isset($this->$name) !== true) {
            return $this->$name;
        }
    }
}
