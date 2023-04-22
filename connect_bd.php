<?php
    $servname = 'localhost';
    $dbname = 'gestion_notes';
    $user = 'user';
    $pass = 'root';

        $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
        //$dbco->exec($sql);
        session_start();
        $a = $_SESSION['filière'];
        $b = $_SESSION['niveau'];
        $c = $_SESSION['semestre']; 

?>