<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DemoB
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class DemoB extends DemoA{
    
    public function __construct() {
        
        //wir müssen in PHP die konstrucktoren der Basisklassen immer
        //manuell aufrufen
        
        parent::__construct();
        
        echo 'Ich bin die DemoB-Klasse' . PHP_EOL;
    }
    
}
