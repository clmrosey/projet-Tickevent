<?php

class CONNECT_DB {
    
    private static $instance = NULL;
    
    
    function __construct($classname) {
    include $classname;
    }
    
    public static function getInstance() {

    if (!self::$instance)
        {
        self::$instance = new PDO("mysql:host=localhost;dbname=exiastore", 'root', '');;
        self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    return self::$instance;
    }
       
}
?>