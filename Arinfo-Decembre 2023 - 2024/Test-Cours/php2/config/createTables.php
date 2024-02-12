<?php
// 1.Inclure la connexion
    require_once("connexion.php");
    //2. Mettre en place le try Catch
    try {
        //2.1Connexion a la BDD
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        //2.2 Définir le mode d'erreur PDO a execption
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //2.3 Requete de creation de la table
       // $sql = "CREATE TABLE IF NOT EXISTS users(
          //  id INT AUTO_INCREMENT PRIMARY KEY,
         //   firstname VARCHAR(50) NOT NULL,
        //    lastname VARCHAR(50) NOT NULL,
        //   email VARCHAR(100) NOT NULL,
       ////     password VARCHAR(255) NOT NULL,
       //     age INT
     //   )";


     //2.4 
     $sqlnews = "CREATE TABLE IF NOT EXISTS news(
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(50) NOT NULL,
        description VARCHAR(255) NOT NULL,
        author VARCHAR(50) NOT NULL
     )";
         //2.4 Executer la Requete
         $conn->exec($sqlnews);
         //2.5 Message si creation de la base de données reussie
         echo "La table est bien creer ✅";

    }catch(PDOException $e) {
        //2.6 Message si erreur lors creation de la base de données
        echo "Erreur lors de la creation de la table ❌: " .$e->getMessage();
    }

    // 3. Fermeture de la connexion
    $conn = null;
?>