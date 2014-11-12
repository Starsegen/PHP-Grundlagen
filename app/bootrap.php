<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bootdtrap
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
function __autoload($klasse){
    
    //echo 'Ich sein loader' . PHP_EOL;
    include '../app/' .$klasse . ".php";
    //include '../app/uebungen/AssoziationsBeziehungen/' .$klasse . ".php";
}

function config($datei){
    
    //fals kein name vorhanden geben wir ein Standartnamen
    if($datei == ""){
        $datei ="config.ini";
    }
    
    if(!file_exists($datei)){
        throw Exception("config datei existiert nicht:" . $datei);
    }
    
    $config = parse_ini_file($datei, True);
    
    if(!is_array($config)){
        throw new Exception("ungültige Konfiguration");
    }
    
//    foreach ($config['mysql'] as $key => $value) {
//        
//        define(strtoupper($key), $value);
//    }
}