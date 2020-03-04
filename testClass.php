<?php

class testClass {

    public $test1;

    function __construct() {
        
    }
    
    private $data = array();

    public function __get($key) {
        echo "get $key\n";
        return array_key_exists($key, $this->data) ? $this->data[$key] : null;
    }

    public function __set($key, $value) {
        echo "set $key = $value\n";
        $this->data[$key] = $value;
    }

    public function __isset($key) {
       echo sprintf("isset $key ( returns %b )", array_key_exists($key, $this->data));
       return array_key_exists($key, $this->data);
    }
    
}
