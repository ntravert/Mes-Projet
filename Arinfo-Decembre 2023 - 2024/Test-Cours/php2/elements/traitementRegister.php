<?php

//1. Inclure la connexion
require_once("config/connexion.php");


//2.Verifier le mapping des donées

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlentities($_POST['username']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];	


    //2.1 Verifier si les mots de passes correspondent
    if($password !== $confirmPassword){
        echo "Les mot de passe ne corresponde pas";
        exit;
    }

    //2.2 HACHEZ le mot de passe
    $hachedPassword = password_hash($password, PASSWORD_BCRYPT);

    //3 Mis en place du try Catch
    try {
        //3.1 Preparer la requete sql 
        $sql = $conn->prepare("INSERT INTO user (username, email, password)
        VALUES (?, ?, ?)");
        $sql->execute([$username, $email, $hachedPassword]);

        echo "Inscription réussie ! ";
    }catch(PDOException $e) {
        echo " Erreur lors de l'inscription : " . $e->getMessage();

    }
    $sql = null;
}else {
// 2.6 Rediger ou afficher un message d'erreur si quelqun tente directement a ce script sans passer par le formulaire
echo "Accès Non autorisé 🔒";
} 

$conn = null;

?>
