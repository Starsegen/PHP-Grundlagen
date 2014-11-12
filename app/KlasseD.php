<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KlasseD
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class KlasseD {

    private $objKlasseC = null;

    //put your code here



    public function setLink(KlasseB $objC) {

        if ($this->objKlasseC === null) {
            $this->objKlasseC = $objC;
            
        }
        
    }

    public function getLink() {

        return $this->objKlasseC;
    }

    public function removeLink() {

        $this->objKlasseC = null;
    }

    public function __toString() {
        return __CLASS__ . ": " . spl_object_hash($this);
    }

}
