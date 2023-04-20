<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les informations du formulaire
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];

    // Vérifier si tous les champs ont été remplis
    if (empty($title) || empty($content)) {
        $error = 'Veuillez remplir tous les champs.';
    } else {
        // Valider les données d'entrée
        // ...

        // Insérer le post dans la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=projet;charset=utf8mb4', 'root', '');

        $stmt = $pdo->prepare('INSERT INTO posts (title, content, image) VALUES (:title, :content, :image)');
        $stmt->execute([
            'title' => $title,
            'content' => $content,
            'image' => $image,
        ]);

        // Enregistrer l'image sur le serveur
        if (!empty($image)) {
            $targetDir = 'uploads/';
            $targetFile = $targetDir . basename($image);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                // L'image a été enregistrée avec succès
            } else {
                $error = 'Une erreur est survenue lors de l\'enregistrement de l\'image.';
            }
        }

        // Rediriger vers la page d'administration
        header('Location: admin.php');
        exit;
    }
}
?>
