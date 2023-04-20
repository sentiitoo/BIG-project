<?php
require_once 'header.php';

$message = '';
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Vérifier si les champs d'identifiant et de mot de passe ont été remplis
    if (isset($_POST['username']) && isset($_POST['password'])) {
        
        // Vérifier si les identifiants de connexion sont corrects (remplacer les valeurs par celles de votre base de données)
        $username = 'admin';
        $password = '';
        
        if ($_POST['username'] === $username && $_POST['password'] === $password) {
            
            // Mettre à jour la session pour indiquer que l'utilisateur est authentifié
            session_start();
            $_SESSION['authenticated'] = true;
            
            // Rediriger l'utilisateur vers le panneau d'administration
            header('Location: admin.php');
            exit;
        } else {
            
            // Afficher un message d'erreur si les identifiants de connexion sont incorrects
            $message = 'Identifiant ou mot de passe incorrect.';
        }
    } else {
        
        // Afficher un message d'erreur si les champs d'identifiant et de mot de passe sont vides
        $message = 'Veuillez remplir tous les champs.';
    }
}
?>



<br><br><br><br><br>
    <div class="container">
        <section id="content">
            <form action="" method="POST">
            <h4 class="text-center">Connexion Administrateur</h4>

                <div class="col-lg-12 mb-3">
                                <input type="text" name="username" class="form-input"
                                    placeholder="Identifiant">
                            </div>
                <div class="col-lg-12 mb-3">
                                <input type="text" name="password" class="form-input"
                                    placeholder="Mot de passe">
                            </div>
                <button class="form-btn" type="submit">
                                    <span>Se connecter</span>
                                </button>
                <?php echo $message; ?>
            </form><!-- form -->
        </section><!-- content -->
    </div><!-- container -->

</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br>
<?php
require_once 'footer.php';
?>