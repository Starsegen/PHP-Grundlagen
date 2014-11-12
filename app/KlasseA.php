<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KlasseA
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class KlasseA
{

    private $objKlasseB = null;

    //put your code here



    public function setLink(KlasseB $objB)
    {

        if ($this->objKlasseB === null)
        {
            $this->objKlasseB = $objB;
        }
    }

    public function getLink()
    {

        return $this->objKlasseB;
    }

    public function removeLink()
    {

        $this->objKlasseB = null;
    }

    public function __toString()
    {
        return __CLASS__ . ": " . spl_object_hash($this);
    }

}
