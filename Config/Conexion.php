<?php

    $con = new mysqli("localhost","root","","eco");
    
    
    if ($con->connect_error) {
        die("Ocurrio un en error al conectar a la base: " . $con->connect_error);
      }
      
?>