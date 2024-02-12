<?php

require_once("config.php");


//2.Mise en place du try 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8" ,$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
    echo "Erreur de connexion a la base de donnée" . $e->getMessage();
}