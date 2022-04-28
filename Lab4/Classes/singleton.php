<?php

class Singleton{
    private static $instance = null;
    private $id;
    public static function getInstance(){
        if (null === self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone() {}
    private function __construct() {}

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

}

