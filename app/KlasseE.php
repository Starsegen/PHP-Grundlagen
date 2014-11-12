<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KlasseE
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class KlasseE {

    private $objKlasseF= array();
    
    
    

    public function setLink(KlasseF $objF) {

        $key = spl_object_hash($objF);
        // wen schon verlink dan fertig
        if(array_key_exists($key, $this->objKlasseF)){
            return;
        }
        // sonst verlinken
        $this->objKlasseF[$key] = $objF;
    }
    
    

    public function getLink() {

        return $this->objKlasseF;
    }
    
    

    public function removeLink(KlasseF $objKlasseF) {

        $key = spl_object_hash($objF);
        // wen schon verlink dan fertig
        if(array_key_exists($key, $this->objKlasseF)){
            unset($this->objKlasseF[$key]);
        }
        
    }

    public function __toString() {
        return __CLASS__ . ": " . spl_object_hash($this);
    }

}
