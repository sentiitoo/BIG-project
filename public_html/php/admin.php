<?php
require_once 'header.php';
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté (s'il a une session active)
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Rediriger l'utilisateur vers la page de connexion s'il n'est pas connecté
    header('Location: ../php/login.php');
    exit;
}
?>

    <br><br><br><br><br>
    <div class="container">
        <form action="projets.php" method="post" enctype="multipart/form-data">
        <div class="col-lg-12 mb-3">
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" class="form-input" required>
        </div>
        <div class="col-lg-12 mb-3">
            <label for="content">Contenu :</label>
            <textarea id="content" name="content" class="form-input" required></textarea>
        </div>
        <div class="col-lg-12 mb-3">
            <label for="image">Image :</label>
            <input type="file" id="image" name="image" class="form-input">
        </div class="form-btn">
        <button class="form-btn" type="submit">Ajouter</button>
        </form>
</div><!-- container -->
<br>
<article class="visible" id="visible">
        <section class="projects">

            <ul class="filter-list">

                <li class="filter-item">
                    <button class="active" data-filter-btn>All</button>
                </li>

                <li class="filter-item">
                    <button data-filter-btn>Web design</button>
                </li>

                <li class="filter-item">
                    <button data-filter-btn>Applications</button>
                </li>

                <li class="filter-item">
                    <button data-filter-btn>Web development</button>
                </li>

            </ul>

            <div class="filter-select-box">

                <button class="filter-select" data-select>

                    <div class="select-value" data-selecct-value>Select category</div>

                    <div class="select-icon">
                        <ion-icon name="chevron-down"></ion-icon>
                    </div>

                </button>

                <ul class="select-list">

                    <li class="select-item">
                        <button data-select-item>All</button>
                    </li>

                    <li class="select-item">
                        <button data-select-item>Web design</button>
                    </li>

                    <li class="select-item">
                        <button data-select-item>Applications</button>
                    </li>

                    <li class="select-item">
                        <button data-select-item>Web development</button>
                    </li>

                </ul>

            </div>

            <ul class="project-list">
        
        <?php

            // Récupérer tous les posts
            $stmt = $pdo->query('SELECT * FROM posts');
            $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Afficher les posts
            
            foreach ($posts as $post) {

                echo '<li class="project-item active">';
                echo '<a href="post.php?id=' . $post['id'] . '">';
                
                if (!empty($post['image'])) {
                    echo '<figure class="project-img">';
                    echo '<img src="../' . htmlspecialchars($post['image'])  . '">';
                    echo '</figure>';
                }
                
                
                echo '<h3 class="project-title">' . htmlspecialchars($post['title']) . '</h3>';
                echo '<p class="project-category">';
                
                    // Ajouter un bouton "Modifier"
                echo '<form class="row" action="edit_post.php" method="POST">';
                echo '<input type="hidden" name="id" value="' . $post['id'] . '">';
                echo '<button class="form-btn" type="submit">Modifier</button>';
                echo '</form>';
                // Ajouter un bouton "Supprimer"
                echo '<form class="row" action="delete_post.php" method="POST">';
                echo '<input type="hidden" name="id" value="' . $post['id'] . '">';
                echo '<button class="form-btn" type="submit" onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer ce post ?\')">Supprimer</button>';
                echo '</form>';
                echo '</p>';
                echo '</a>';
                echo '</li>';
                


            }
        ?>
        
    </ul>
        </section>
    </article>

<?php
require_once 'footer.php';
?>
