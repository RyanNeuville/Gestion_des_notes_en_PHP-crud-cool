<?php
    // declaration des variabless de connexion //
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'orizonitect_gestion_eleves';

    // creatio de la connexion a la base de donnees//
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // verification de la connnexion //
    if (!$conn) {
        echo "ERREUR :" . mysqli_connect_error();
    }
?>