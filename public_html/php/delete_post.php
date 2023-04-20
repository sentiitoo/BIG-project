<?php

require_once 'bdd.php';
// Vérifier si l'identifiant du post à supprimer a été envoyé
if (isset($_POST['id'])) {
    // Se connecter à la base de données
    

    // Préparer et exécuter la requête de suppression
    $stmt = $pdo->prepare('DELETE FROM posts WHERE id = ?');
    $stmt->execute(array($_POST['id']));

    // Rediriger vers la page d'administration
    header('Location: admin.php');
    exit;
}
?>