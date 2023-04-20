<?php
// Se connecter à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
$stmt = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
?>

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