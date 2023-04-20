
<?php
// Connexion à la base de données
$host = 'localhost';
$user = '';
$password = '';
$dbname = '';

$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$password);

?>