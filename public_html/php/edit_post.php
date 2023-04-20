<?php
// Se connecter à la base de données
include_once 'bdd.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    // Récupérer le post correspondant à l'ID
    $stmt = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
    $stmt->execute(['id' => $id]);
    $post = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$post) {
        // Si le post n'existe pas, afficher un message d'erreur ou rediriger vers la liste des articles
        echo 'Le post n\'existe pas.';
        exit;
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Si le formulaire a été soumis, récupérer les données et les mettre à jour dans la base de données
        $title = $_POST['title'];
        $content = $_POST['content'];
        
        // Vérifier si une nouvelle image a été téléchargée
        if (!empty($_FILES['image']['name'])) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            $image = $target_file;
        } else {
            $image = $post['image'];
        }
        
        $stmt = $pdo->prepare('UPDATE posts SET title = :title, content = :content, image = :image WHERE id = :id');
        $stmt->execute([
            'title' => $title,
            'content' => $content,
            'image' => $image,
            'id' => $id
        ]);
        
        // Rediriger l'utilisateur vers la page de détails du post modifié
        header('Location: post.php?id=' . $id);
        exit;
    } else {
        // Si le formulaire n'a pas été soumis, afficher le formulaire pré-rempli avec les données du post à modifier
        $title = $post['title'];
        $content = $post['content'];
        $image = $post['image'];
    }
} else {
    // Si l'ID n'est pas défini, afficher un message d'erreur ou rediriger vers la liste des articles
    echo 'L\'identifiant du post n\'a pas été spécifié.';
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modifier le post</title>
</head>
<body>
<div class="container">
  <form action="edit_post.php" method="post" enctype="multipart/form-data">
    <div class="col-lg-12 mb-3">
      <label for="title">Titre :</label>
      <input type="text" id="title" name="title" class="form-input" value="<?php echo htmlspecialchars($post['title']); ?>" required>
    </div>
    <div class="col-lg-12 mb-3">
      <label for="content">Contenu :</label>
      <textarea id="content" name="content" class="form-input" required><?php echo htmlspecialchars($post['content']); ?></textarea>
    </div>
    <div class="col-lg-12 mb-3">
      <label for="image">Image :</label>
      <input type="file" id="image" name="image" class="form-input">
    </div>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <div class="form-btn">
      <button class="form-btn" type="submit">Modifier</button>
    </div>
  </form>
</div><!-- container -->