<?php

/**
 * Description of Autoloader
 *
 * @author Oliver Stabenow <starsegen1987@hotmail.de>
 */
class Autoloader
{

    public function __construct()
    {
        spl_autoload_register(array($this, "load"));
    }

    public function load($class)
    {

        $baseDir = "../classes/";

        $parts = explode("_", $class);

        $count = count($parts) - 1;

        for ($i = 0; $i < $count; $i++)
        {

            $parts[$i] = strtolower($parts[$i]);
        }
        $filename = $baseDir . implode(DIRECTORY_SEPARATOR, $parts) . ".php";



        if (!file_exists($filename))
        {

            throw new Exception("error loading class. class file" . $filename . "not found");
        }

        include $filename;

        return true;
    }

}
