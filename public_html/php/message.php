<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require_once '../src/PHPMailer.php';
require_once '../src/Exception.php';
require_once 'bdd.php';

// Récupération des données du formulaire
// Protection XSS
$nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
$prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$sujet = htmlspecialchars($_POST['sujet'], ENT_QUOTES);
$telephone = htmlspecialchars($_POST['telephone'], ENT_QUOTES);
$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

// Protection SQL
$nom = $pdo->quote(trim(stripslashes($nom)));
$prenom = $pdo->quote(trim(stripslashes($prenom)));
$email = $pdo->quote(trim(stripslashes($email)));
$sujet = $pdo->quote(trim(stripslashes($sujet)));
$telephone = $pdo->quote(trim(stripslashes($telephone)));
$message = $pdo->quote(trim(stripslashes($message)));

// Insertion des données dans la base de données
$sql = "INSERT INTO contacts (nom, prenom, email, sujet, telephone, message) VALUES ($nom, $prenom, $email, $sujet, $telephone, $message)";
$pdo->exec($sql);
// Récupérer les valeurs du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];


$mail = new PHPMailer(true);

                    // configuration 

                    // On configure le SMTP
                    // $mail->isSMTP();
                    $mail->Host = "smtp.hostinger.com";
                    $mail->Port = 465;
                    $mail->SMTPAuth = true;
                    $mail->Username = 'contact@lucaspoignard.fr';
                    $mail->Password = '';

                    // Encodage
                    $mail->CharSet = "utf-8";

                    // Destinataire
                    $mail->addAddress("lpoignard@guardiaschool.fr");

                    // Expediteur
                    $mail->setFrom("contact@lucaspoignard.fr");

                    // Contenu du mail
                    $mail->Subject = "Nouveau message via le formulaire: $sujet";
                    $mail->Body = "nom: $nom, 
                    prenom: $prenom,
                    telephone: $telephone,
                    mail: $email,
                    message: $message";

                    // envoi
                    $mail->send();


header('Location: ../index.php?success=1#envoyer');

// Se déconnecter de la base de données
unset($pdo);


?>
