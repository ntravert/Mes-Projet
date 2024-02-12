<?php
//1. Inclure La connexion
    require_once("config/connexion.php");

  // 2. Mettre en place le try-catch
  try {
    // 2.1 Connexion à la BDD
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // 2.2 Définir le mode d'erreur PDO à exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //2.3 Requete portant la recupération des données
    $sql = "SELECT * FROM users";
    //2.4 Préparer la requete
    $stmt = $conn->prepare($sql);
    //2.5 Executer la requete
    $stmt->execute();
    // 2.6 Récuperer les données
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
     // 2.7 Affichage des données
    foreach($result as $r) {
        echo "firstname" . $r['firstname'] . "<br>";
        
    }
  }catch(PDOException $e) {
    // 2.9 Message si erreur lors de l'insertion dans la base de données
    echo "Erreur : " . $e->getMessage();

  } 

  //3. Fermeture de la connexion
  $conn = null;
?>