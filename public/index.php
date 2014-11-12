<?php
require '../app/bootrap.php';

// letz go config
config("../app/config.ini");

//  print_r(get_defined_constants(true));
?>

<html>
    <head>
        <title>OOP PHP</title>
        <link rel="stylesheet" href="css/main.css" type="text/css" />  
    </head>  

    <body>
        <h2>Hallo Welt</h2>

        <?php
        /**
         * die Klasse DemoA kann noch nicht instanziiert werden,
         * da deren Quelltext dem PHP-Stack unbekannt ist.
         * 
         * Anhilfe: __aitoload()
         */
//            $d = new DemoB();
//            $d ->sayMyName();
//            
//            
//            $iA = Singleton::getInstance();
//            $iB = Singleton::getInstance();
//            
//            echo 'Code' . $iA . PHP_EOL;
//            echo 'Code' . $iB . PHP_EOL;
//            $car = new Car();
//            
//            echo $car . PHP_EOL;

        $kc = new KlasseC();
        $kd = new KlasseD();


        echo PHP_EOL;

        $kc->setLink($kd);
        echo $kc . " is linked with " . $kc->getLink() . PHP_EOL;
        echo $kd . " is linked with " . $kd->getLink() . PHP_EOL;
        ?>
    </body>   
</html>