<?php

require_once 'header.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Récupérer l'article avec l'identifiant $id dans la base de données
    // Afficher les détails de l'article
} else {
    // Afficher un message d'erreur ou rediriger vers la liste des articles
}
// Récupérer l'ID dans l'URL
$id = $_GET['id'];

// Récupérer le post correspondant à l'ID
$stmt = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
$stmt->execute(['id' => $id]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);



?>


<body>
<br><br><br><br><br><br>
<section class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                <?php
                echo '<figure class="project-img">';
                echo '<img src="../' . htmlspecialchars($post['image'])  . '">';
                echo '<figure class="project-img">';
                ?>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                      <h3>Informations du Projet</h3>
                      <ul>
                        <li><strong>Catégorie</strong>: Cybersécurité</li>
                        <li><strong>Date</strong>: 2023-04-04</li>
                        <li><strong>Github du projet</strong>: </li>
                      </ul>
                    </div>
                    <br>
                    <div class="portfolio-description">
                      <h2>Description :</h2>
                      <?php
                      echo '<p class="project-category">' . htmlspecialchars($post['content']) . '</p>';
                      ?>
                    </div>
                  </div>

            </div>
        </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br>

    </body>
<?php
require_once 'footer.php';
?>