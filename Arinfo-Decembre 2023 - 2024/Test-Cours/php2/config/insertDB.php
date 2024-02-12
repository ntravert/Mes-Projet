<?php
// 1. Inclure la connexion
require_once("connexion.php");

// 2. Mettre en place le try-catch
try {
    // 2.1 Connexion à la BDD
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // 2.2 Définir le mode d'erreur PDO à exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 2.3 Données à insérer
   // $firstname = "John";
  //  $lastname = "DOE";
 //   $email = "John@example.com";
  //  $password = "azerty";
  //  $age = 25;

    // 2.4 Hachage du mot de passe
   // $mot_de_passe_hash = password_hash($password, PASSWORD_DEFAULT);

    // 2.5 Requête portant sur l'insertion de données
   // $sql = $conn->prepare("INSERT INTO users(firstname, lastname, email, password, age)
       // VALUES(:firstname, :lastname, :email, :password, :age)");

    // 2.6 Liaison des paramètres
   // $sql->bindParam(':firstname', $firstname);
   // $sql->bindParam(':lastname', $lastname);
   // $sql->bindParam(':email', $email);
   // $sql->bindParam(':password', $mot_de_passe_hash);
   // $sql->bindParam(':age', $age);

    // 2.7 Exécuter la requête
   // $sql->execute();


   //2.3
   $title = "Mer Rouge : deux nouvelles attaques houthistes contre des navires commerciaux";
   $description = "Les tirs des rebelles houthistes, confirmés par l’armée américaine, n’ont pas fait de dommages. Il s’agit de la vingt-quatrième attaque de ce type en mer Rouge depuis la mi-novembre. Une réunion du Conseil de sécurité de l’ONU mercredi doit aborder le sujet.";
   $author = "Le Monde avec AFP";

   //2.4
   $sql = $conn->prepare("INSERT INTO news(title, description, author)
   VALUES(:title, :description, :author)");

   //2.5
   $sql->bindParam(':title', $title);
   $sql->bindParam(':description', $description);
   $sql->bindParam(':author', $author);

   //2.6 
   $sql->execute();

    // 2.8 Message si insertion de la base de données réussie
    echo "Les données ont bien été insérées ✅";
} catch (PDOException $e) {
    // 2.9 Message si erreur lors de l'insertion dans la base de données
    echo "Erreur: " . $e->getMessage();
} finally {
    // 3. Fermeture de la connexion (dans le bloc finally pour s'assurer qu'elle est fermée même en cas d'exception)
    $conn = null;
}
?>
