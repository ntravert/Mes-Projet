<?php
//1. inclure config.php
require_once("config.php");
//require_once"config.php";

//2. Mettre en place le try catch

try {
    //2.1 Connexion au SGBDR
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //2.2 Configuration de PDO pour lever les execptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //2.3 Connexion reussie
  //  echo "Connection Etablie avec succès✅";

    //2.4 Retourner l'objet PDO
    return $conn;

}catch(PDOException $e) {

    //2.5 Message si connexion pas reussie
    echo "Erreur de connexion a la base de donné❌:" . $e->getMessage();
//die ('Erreur de connexion a la base de donné❌:') .$e->getMessage();
}

//3. Fermeture de la connexion
$conn = null;
?>