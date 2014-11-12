<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KlasseB
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class KlasseB  {

    //put your code here
    public function __toString() {
        return __CLASS__ . ": " . spl_object_hash($this);
    }

//      private $objKlasseA = null;
//
//    //put your code here
//    
//   
//    
//    public function setLink(KlasseA $objA){
//        
//        if($this->objKlasseA === null){
//            $this->objKlasseA = $objB;
//            
//        }
//    }
//    
//    public function getLink(){
//        
//        return $this->objKlasseA;
//    }
//    
//    public function removeLink(){
//        
//        $this->objKlasseA = null;
//    }
    
}
