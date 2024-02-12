<?php
    // 1.Inclure LA connexion

    require_once('connexion.php');

    // 2. Mettre en place le try catch
    try {
        //2.1 Connexion a la base de données
        $conn = new PDO("mysql:host=$host;charset=utf8", $username, $password);
        //2.2 Configuration des options 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //2.3 Requete SQL pour la creation de la base de données
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        //2.4 Executer la Requete
        $conn->exec($sql);
        //2.5 Message si creation de la base de données reussie
        echo "Base de données bien creer ✅";
        //2.6 Message si erreur lors creation de la base de données 
       
    }catch(PDOException $e) {
        echo "Erreur lors de la creation de la base de données ❌: " .$e->getMessage();

    }

    // 3. Fermeture de la connexion
    $conn = null;
?>