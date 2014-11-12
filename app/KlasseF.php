<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of klasseF1
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class KlasseF1 {
    //put your code here
    
    
    
    public function __toString() {
        return __CLASS__ . ": " . spl_object_hash($this);
    }
}
