<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - News Portal</title>
    <link rel="stylesheet" href="../divers/css/article1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
</head>

<body>


<div class="container mx-auto my-4 d-flex align-items-center">
        <?php
        // Inclure la connexion
        require_once("../config/connexion.php");

        try {
            // Connexion à la BDD
            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Récupérer l'ID de l'article depuis la requête GET
            $article_id = isset($_GET['id']) ? $_GET['id'] : null;

            if (!$article_id) {
                echo '<p class="text-center">Article non spécifié.</p>';
            } else {
                // Requête pour récupérer les informations de l'article spécifié
                $sql = "SELECT title, description, author, image FROM news WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':id', $article_id);
                $stmt->execute();
                $article = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!$article) {
                    echo '<p class="text-center">Article non trouvé.</p>';
                } else {
                    // Afficher les détails de l'article
                    echo '<h1 class="text-center">' . $article['title'] . '</h1>';
                    echo '<div class="text-center">';
                    echo '<img src="' . $article['image'] . '" class="card-img-top img-fluid custom-card-img" alt="Article Image">';
                    echo '</div>';
                    echo '<p class="text-center mt-3">Auteur: ' . $article['author'] . '</p>';
                    echo '<p class="lead text-center">' . $article['description'] . '</p>';
                    echo '<hr>';
                    echo '<footer class="text-center">NEWS EU</footer>';
                }
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        } finally {
            // Fermeture de la connexion
            $conn = null;
        }
        ?>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-rbs5jQhjR3I5JcM3GOptgta9iZ6SQ3jH70F0tL2PLD0Wp0FbY4DzFzLz/8vId73+5" crossorigin="anonymous"></script>
</body>

</html>
