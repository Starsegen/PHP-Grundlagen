<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




error_reporting(E_ALL);
ini_set("display_errors", true);

require_once '../classes/Autoloader.php';

new Autoloader();

var_dump(spl_autoload_functions());

$dls = new De_Telekom_Anschluss_Dsl();

