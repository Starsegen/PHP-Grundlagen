<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>www.beispiel.de/Startseite</title>

        <link href="css/main.css" rel="stylesheet" type="text/css">
    <header><h1>Weil Herr Bauer das so will dot de</h1></header>
</head>
<body>
    <nav><a href="index.php">Startseite</a></nav>


    <?php
    $db = mysqli_connect("192.168.2.119", "www", "linux", "db_world");
    if (mysqli_connect_errno())
    {
        printf("Verbindung fehlgeschlagen: %s\n", mysqli_connect_error());
        exit();
    }
    mysqli_set_charset($db, "utf8");

    $sql = "select * from City";
    $ergebnis = mysqli_query($db, $sql);
    ?>
    <table>

        <?php
        while ($row = mysqli_fetch_array($ergebnis))
        {
            echo "<tr><td>" . $row['ID'] . "</td>" . " <td>" . $row["Name"] . "</td></tr>";
        }
        ?>
    </table>
    <?php
    ?>
</body>
</html>
