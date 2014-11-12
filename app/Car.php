<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Car
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class Car implements Vehicle {

    private $milage;
    private $engineStatus;

    public function __construct() {
        $this->milage = 0;
        $this->engineStatus = "stopped";
    }

    public function getMilage() {
        return $this->milage;
    }

    public function moveForward($miles) {
        $this->milage += $miles;
        
    }

    public function startEngine() {
        $this->engineStatus = "started";
    }

    public function stopEngine() {
        $this->engineStatus = "stopped";
    }

    public function __toString() {
        
        return __CLASS__ . " : " . spl_object_hash($this) . " yea";
    }
    
}


