<?php

//1. Inclure la connexion
require_once("config/connexion.php");

//2.Verifier le mapping des données

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    // Récupérer les valeurs du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];


    $stmt = $conn->prepare("SELECT id, email, password, username FROM user WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) { 
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier si la clé "password" existe dans le tableau
        if (array_key_exists("password", $user)) {
            // Vérifier le mot de passe
            if (password_verify($password, $user["password"])) {
                // Authentification réussie, rediriger vers la page d'accueil ou la page du post
                session_start();
                $_SESSION["user_id"] = $user["id"];
                $_SESSION['user_prenom'] = $user["username"];

                // Redirection vers la page d'accueil
                header("Location: ../home.php");
                exit();
            } else {
                // Mot de passe incorrect
                echo "Mot de passe incorrect";
            }
        } else {
            // La colonne "password" n'est pas renvoyée par la requête stmt
            echo "Erreur de récupération du mot de passe.";
        }
    } else {
        // Utilisateur non trouvé
        echo "Utilisateur non trouvé";
    }
}

// Fermer la connexion
if ($conn) {
    $conn = null;
}
exit(); // Ajout de l'exit pour éviter toute sortie après la redirection
?>
