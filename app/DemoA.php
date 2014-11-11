<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DemoA
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class DemoA {
    
    private $name = "";
    
    public function __construct() {
        echo "Ich bin die DemoA-Klasse" . PHP_EOL;
         
         
         $this-> name = "Klaus";
        
    }
    
   public function sayMyName(){
       
       echo $this->name;
       
   }
    
    
    
}
