<?php
    $dbhost = "aplicacionwebbasededato-server.mysql.database.azure.com";
    $dbuser = "sxtsaygsbk";
    $dbpassword = "IC2540W4VMB01YW1$";
    $dbname = "aplicacionwebbasededatos-database";
    $port = 3306;
    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $port);
    if (!$conn){
        die("No hay conexión: ".mysqli_connect_error());
    }
?>
