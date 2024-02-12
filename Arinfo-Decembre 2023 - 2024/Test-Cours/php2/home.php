<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal</title>
    <link rel="stylesheet" href="../divers/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/9046830b70.js" crossorigin="anonymous"></script>
</head>

<body>

<header class="--bs-tertiary-color text-white">
        <div class="container d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">NEWS EU</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="elements/login.php"><i class="fa-solid fa-user" style="color: #000000;"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="container mt-5">
        <h1 class="text-center mt-4">NEWS EU</h1>

        <div class="mt-4">
            <p class="lead text-center">Dernières nouvelles et mises à jour</p>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <div class="row row-cols-1 row-cols-md-3 g-4">
          
            <?php
                // Inclure la connexion
                require_once("config/connexion.php");
                
                try {
                    // Connexion à la BDD
                    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                    // Requête pour récupérer les articles dans l'ordre décroissant
                    $sql = "SELECT id, title, description, image, sous_titre FROM news ORDER BY id DESC";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                    // Afficher les articles
                    foreach ($articles as $article) {
                        // Mise à jour du chemin de l'image (assumes that the image is in the img folder)
                        $nouveauCheminImage = 'divers/img/' . basename($article['image']); // Modifier selon la structure de ton dossier
                        $sqlUpdate = "UPDATE news SET image = :nouveauCheminImage WHERE id = :id";
                        $stmtUpdate = $conn->prepare($sqlUpdate);
                        $stmtUpdate->bindParam(':nouveauCheminImage', $nouveauCheminImage);
                        $stmtUpdate->bindParam(':id', $article['id']);
                        $stmtUpdate->execute();
                        
                        echo '<div class="col-md-4">';
                        echo '<div class="card h-100">';
                        echo '<img src="' . $nouveauCheminImage . '" class="card-img-top img-fluid custom-card-img" alt="...">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $article['title'] . '</h5>';
                        echo '<p class="card-text">' . $article['sous_titre'] . '</p>';
                        echo '<a href="pages/article.php?id=' . $article['id'] . '" class="btn btn-primary">Lire Plus...</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } catch (PDOException $e) {
                    echo "Erreur : " . $e->getMessage();
                } finally {
                    // Fermeture de la connexion
                    $conn = null;
                }
                ?>
                
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 News Portal. Tous droits réservés.</p>
        </div>
    </footer>



    <!-- Inclure les liens vers Bootstrap JS (Optionnel, dépend de l'utilisation) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-rbs5jQhjR3I5JcM3GOptgta9iZ6SQ3jH70F0tL2PLD0Wp0FbY4DzFzLz/8vId73+5"
        crossorigin="anonymous"></script>
</body>

</html>
