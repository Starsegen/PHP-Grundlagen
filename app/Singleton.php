<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Singleton
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class Singleton {

    Static public $instance = null;

    public function __construct() {
    
    }

    Static function getInstance(){

        If (self::$instance === null) {
            self::$instance = new Singleton();
        }
        Return self::$instance;


    }

    
    public function __clone() {
        return self::$instance;
    }
    
    public function __toString() {
        return spl_object_hash($this);
    }
    
}
