<?php 
    $srv ="localhost";
    $usr = "root";
    $pwd = "";
    $db = "sistema";

    $conn = new mysqli($srv, $usr, $pwd, $db);
    if ($conn -> connect_error) {
        die("Error en la conexión de base de datos". $conn -> connect_error);
    }
 ?>