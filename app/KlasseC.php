<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KlasseC
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class KlasseC {

    private $objKlasseD = null;

    //put your code here



    public function setLink(KlasseD $objD) {

        if ($this->objKlasseD === null) {
            $this->objKlasseD = $objD;
            
        }
        
    }

    public function getLink() {

        return $this->objKlasseD;
    }

    public function removeLink() {

        $this->objKlasseD = null;
    }

    public function __toString() {
        return __CLASS__ . ": " . spl_object_hash($this);
    }

}
