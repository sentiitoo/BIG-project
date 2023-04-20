<?php
require_once 'php/bdd.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lucas Poignard Portfolio</title>
    <link rel="shortcut icon" href="images\photoCVblank.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets\js\script.js"></script>
    <script src="assets\js\tel.js"></script>
    <script src="assets\js\modale.js"></script>
    <script src="assets\js\termynal.js"></script>
</head>
<header>

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="images\accueil.mp4" type="video/mp4">
    </video>

    <!-- The header content -->
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-2">
                    <span class="display-3">Bienvenue sur mon portfolio</span>
                    <span class="display-2--description lh-base">
                        Etudiant en cybersécurité
                    </span>
                </h1>
                <div class="text-center">
                    <div class="centered">

                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#maModale"><ion-icon name="person-circle-outline"></ion-icon>Contact

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>




<body>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logoo.png" alt="logo image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projet">Mes projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">contact</a></li>
                    </li>
                </ul>
                <button type="button" class="rounded-pill btn-rounded" id="phoneButton"
                    onclick="callOrMessage()"><ion-icon name="call-outline"></ion-icon>
                    06 20 60 62 43
                </button>

            </div>
        </div>
    </nav>

    <!-- Modale contact -->

    <div class="modal fade" id="maModale" tabindex="-1" role="dialog" aria-labelledby="maModaleLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="maModaleLabel">Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="display-3--title mb-5" style="text-align: center;">Comment voulez-vous me contacter ?
                    </h4>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary rounded-pill pt-3 pb-3 w-100" id="githubButton"
                            onclick="window.open('https://github.com/sentiitoo?tab=repositories', '_blank')"><ion-icon
                                name="logo-github"></ion-icon> Github</button>
                        <button class="btn btn-primary rounded-pill pt-3 pb-3 w-100" id="linkedinButton"
                            onclick="window.open('https://www.linkedin.com/in/lucas-poignard-716747252/', '_blank')"><ion-icon
                                name="logo-linkedin"></ion-icon> LinkedIn
                        </button>
                        <button class="btn btn-primary rounded-pill pt-3 pb-3 w-100" id="phoneButton"
                            onclick="callOrMessage()"><ion-icon name="call-outline"></ion-icon> Numéro
                        </button>
                        <button class="btn btn-primary rounded-pill pt-3 pb-3 w-100" id="mailButton"
                            onclick="location.href='mailto:Lpoignard@guardiaschool.fr'"><ion-icon
                                name="mail-outline"></ion-icon>
                            Mail</button>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btnn" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <br>

    <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                             START SECTION 2 - PRESENTATION 
////////////////////////////////////////////////////////////////////////////////////////////////////-->


    <section id="campanies" class="campanies">
        <div class="container">
            <div class="row">
                <div id="termynal" data-termynal style="width: 740px;min-height: 833.188px;">
                    <span data-ty="input">LAISSEZ MOI ME PRÉSENTER</span>
                    <span data-ty="progress"></span>
                    <span data-ty>Bonjour et bienvenue sur mon portfolio ! Je m'appelle Lucas Poignard, j'ai 20 ans et
                        je suis actuellement en première année d'études en cybersécurité.
                    </span>
                    <span data-ty>Passionné par les technologies de l'information et de la communication depuis
                        mon
                        plus jeune âge, j'ai choisi de me spécialiser dans la cybersécurité afin de contribuer à la
                        protection des systèmes informatiques et de lutter contre les cybermenaces qui sont de plus en
                        plus présentes dans notre société.</span>
                    <span data-ty=>Sur ce site, vous pourrez découvrir mes compétences et mes projets en cours dans ce
                        domaine passionnant.</span>
                    <span data-ty="input">▲ Entrez "snake" ou "memory" :
                    </span>
                    <span data-ty>
                        <form class="borderless-form">
                            <input class="transparent-background" type="text" id="user-input" name="user-input"
                                onkeyup="redirect()">
                        </form>
                    </span>

                    <script>
                        var termynal = new Termynal('#termynal', {
                            typeDelay: 40,
                            lineDelay: 700,
                            progressLength : 20,
                            lineData: [

                            ]
                        });
                    </script>
                </div>
            </div>
        </div>

    </section>

    <br> <br>
    <section id="faq" class="faq">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold text-uppercase">Mon CV</h1>
                <div class="heading-line"></div>
                <p class="lead">Vous pouvez voir mon CV et le telecharger si besoin </p>
                <a href="images\Lucas_Poignard.pdf" download class="btn btn-primary">Télécharger le CV </a>


            </div>

            <!-- ACCORDION CONTENT  -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <!-- ACCORDION ITEM 1 -->
                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mon CV
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">

                                <main>

                                    <!--
                    - #SIDEBAR
                  -->

                                    <aside class="sidebar" data-sidebar>

                                        <div class="sidebar-info">

                                            <figure class="avatar-box">
                                                <img src="images\photoCVblank.png" alt="Lucas Poignard" width="80">
                                            </figure>

                                            <div class="info-content">
                                                <h1 class="name" title="Lucas Poignard">Lucas Poignard</h1>

                                                <p class="title">Etudiant Cybersécurité</p>
                                            </div>

                                            <button class="info_more-btn" data-sidebar-btn>
                                                <span>Show Contacts</span>

                                                <ion-icon name="chevron-down"></ion-icon>
                                            </button>

                                        </div>

                                        <div class="sidebar-info_more">

                                            <div class="separator"></div>

                                            <ul class="contacts-list">

                                                <li class="contact-item">

                                                    <div class="icon-box">
                                                        <ion-icon name="mail-outline"></ion-icon>
                                                    </div>

                                                    <div class="contact-info">
                                                        <p class="contact-title">Email</p>

                                                        <a href="mailto:Lucas.poignard@guardiaschool.fr"
                                                            class="contact-link">Lucas.poignard@guardiaschool.fr</a>
                                                    </div>

                                                </li>

                                                <li class="contact-item">

                                                    <div class="icon-box">
                                                        <ion-icon name="phone-portrait-outline"></ion-icon>
                                                    </div>

                                                    <div class="contact-info">
                                                        <p class="contact-title">Phone</p>

                                                        <a href="tel:+33620606243" class="contact-link">+33 6 20 60 62
                                                            43</a>
                                                    </div>

                                                </li>

                                                <li class="contact-item">

                                                    <div class="icon-box">
                                                        <ion-icon name="calendar-outline"></ion-icon>
                                                    </div>

                                                    <div class="contact-info">
                                                        <p class="contact-title">Anniversaire</p>

                                                        <time datetime="2002-05-24">Mai 24, 2002</time>
                                                    </div>

                                                </li>

                                                <li class="contact-item">

                                                    <div class="icon-box">
                                                        <ion-icon name="location-outline"></ion-icon>
                                                    </div>

                                                    <div class="contact-info">
                                                        <p class="contact-title">Location</p>

                                                        <address>Saint Saint Maur Des Fosses, 94100</address>
                                                    </div>

                                                </li>

                                            </ul>

                                            <div class="separator"></div>

                                            <ul class="social-list">

                                                <li class="social-item">
                                                    <a href="#" class="social-link">
                                                        <ion-icon name="logo-linkedin"></ion-icon>
                                                    </a>
                                                </li>

                                                <li class="social-item">
                                                    <a href="#" class="social-link">
                                                        <ion-icon name="logo-github"></ion-icon>
                                                    </a>
                                                </li>


                                            </ul>

                                        </div>

                                    </aside>





                                    <!--
                    - #main-content
                  -->

                                    <div class="main-content">

                                        <!--
                      - #NAVBAR
                    -->
                                        <nav class="navbarcard navbar-expand-lg navbar-dark menu shadow ">


                                            <ul class="navbarcard-list">

                                                <li class="navbarcard-item">
                                                    <button class="navbarcard-link  active" data-nav-link>Skill</button>
                                                </li>

                                                <li class="navbarcard-item">
                                                    <button class="navbarcard-link" data-nav-link>Parcour</button>
                                                </li>

                                            </ul>

                                        </nav>


                                        <!--
                      - #ABOUT
                    -->

                                        <article class="about  active" data-page="skill">

                                            <h2 class="h2 article-title">A propos de moi</h2>


                                            <section class="about-text">
                                                <p>
                                                    Passionné par le monde informatique et plus particulièrement de la
                                                    cybersécurité, j'ai intégré l’école de cybersécurité Guardia afin
                                                    d’évoluer dans le secteur et acquérir les compétences fondamentales
                                                    dans ce domaine pour me perfectionner et devenir un hacker éthique.
                                                </p>

                                                <p>
                                                    je
                                                    suis à la recherche d’un stage de 8 à 12 semaine afin d’étendre mes
                                                    connaissances et mes compétences.
                                                </p>
                                            </section>


                                            <!--
                        - service
                      -->

                                            <section class="service">

                                                <h3 class="h3 service-title">Mes compétences</h3>

                                                <ul class="service-list">

                                                    <li class="service-item">

                                                        <div class="service-icon-box">
                                                            <img src="images\skill\system.png
                              " alt="design icon" width="40">
                                                        </div>

                                                        <div class="service-content-box">
                                                            <h4 class="h4 service-item-title">Systèmes informatique</h4>

                                                            <p class="service-item-text">
                                                                Gérez les systèmes Windows, les distributions MacOS et
                                                                Linux. Gérer les différents gestionnaires de paquets,
                                                                gérer différents privilèges sudo,
                                                                Windows : gérer les systèmes sur les clients et les
                                                                serveurs, lier les systèmes à Active
                                                                Directory, installer, virtualiser et configurer les
                                                                systèmes d'exploitation,
                                                                diagnostiquer, rechercher et gérer les erreurs système.
                                                            </p>
                                                        </div>

                                                    </li>

                                                    <li class="service-item">

                                                        <div class="service-icon-box">
                                                            <img src="images\skill\network.png"
                                                                alt="Web development icon" width="40">
                                                        </div>

                                                        <div class="service-content-box">
                                                            <h4 class="h4 service-item-title">Réseaux</h4>

                                                            <p class="service-item-text">
                                                                Configuration d'une architecture Réseau avec Cisco
                                                                Packet Tracer, mise en place d'un réseau dans des
                                                                conditions réelles,analyse de donnée qui transite dans
                                                                une organisation, maîtrise des serveurs et ses clients.
                                                                configuration des différents services windows comme IIS,
                                                                WSUS, DHCP, Firewall ...
                                                            </p>
                                                        </div>

                                                    </li>

                                                    <li class="service-item">

                                                        <div class="service-icon-box">
                                                            <img src="images\skill\coding.png" alt="mobile app icon"
                                                                width="40">
                                                        </div>

                                                        <div class="service-content-box">
                                                            <h4 class="h4 service-item-title">PROGRAMMATION INFORMATIQUE
                                                                & ALGORITHMIE</h4>

                                                            <p class="service-item-text">
                                                                Maitrise du Python et du C, rédaction d'algorithmes,
                                                                j'ai développer plusieurs programmes de jeu en python
                                                                tel qu'un morpion, pierre feuille ciseaux et un
                                                                resolveur de sudoku
                                                            </p>
                                                        </div>

                                                    </li>

                                                    <li class="service-item">

                                                        <div class="service-icon-box">
                                                            <img src="images\skill\html.png" alt="camera icon"
                                                                width="40">
                                                        </div>

                                                        <div class="service-content-box">
                                                            <h4 class="h4 service-item-title">DÉVELOPPEMENT WEB</h4>

                                                            <p class="service-item-text">
                                                                Maitrise des languages HTML , CSS , JavaScript, PHP et
                                                                MySQL. Créer et configurer une base de données,
                                                                automatiser des enregistrements en base de données via
                                                                des formulaires, créer un système d’authentification
                                                                avec des droits d’accès, sécuriser son site internet
                                                                contre les failles XSS et d’injection SQL.
                                                            </p>
                                                        </div>

                                                    </li>

                                                </ul>
                                                <section class="skill">

                                                    <h3 class="h3 skills-title">Soft skills</h3>

                                                    <ul class="skills-list content-card">

                                                        <li class="skills-item">

                                                            <div class="title-wrapper">
                                                                <h5 class="h5">Capacité d'adaptation</h5>

                                                            </div>

                                                            <div class="skill-progress-bg">
                                                                <div class="skill-progress-fill" style="width: 80%;">
                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="skills-item">

                                                            <div class="title-wrapper">
                                                                <h5 class="h5">Esprit d'équipe</h5>

                                                            </div>

                                                            <div class="skill-progress-bg">
                                                                <div class="skill-progress-fill" style="width: 90%;">
                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="skills-item">

                                                            <div class="title-wrapper">
                                                                <h5 class="h5">Motivé</h5>

                                                            </div>

                                                            <div class="skill-progress-bg">
                                                                <div class="skill-progress-fill" style="width: 100%;">
                                                                </div>
                                                            </div>

                                                        </li>

                                                        <li class="skills-item">

                                                            <div class="title-wrapper">
                                                                <h5 class="h5">Curieux</h5>

                                                            </div>

                                                            <div class="skill-progress-bg">
                                                                <div class="skill-progress-fill" style="width: 90%;">
                                                                </div>
                                                            </div>

                                                        </li>

                                                    </ul>

                                                </section>
                                            </section>

                                        </article>


                                        <!--
                      - #RESUME
                    -->

                                        <article class="resume" data-page="parcour">


                                            <h2 class="h2 article-title">Mon Parcour</h2>


                                            <section class="timeline">

                                                <div class="title-wrapper">
                                                    <div class="icon-box">
                                                        <ion-icon name="book-outline"></ion-icon>
                                                    </div>

                                                    <h3 class="h3">Mes formations</h3>
                                                </div>

                                                <ol class="timeline-list">

                                                    <li class="timeline-item">

                                                        <h4 class="h4 timeline-item-title">Guardia cybersécurity school
                                                        </h4>

                                                        <span>2022 — Maintenant</span>

                                                        <p class="timeline-text">
                                                            La Défense,
                                                            Bachelor Développeur informatique option Cybersécurité
                                                        </p>

                                                    </li>

                                                    <li class="timeline-item">

                                                        <h4 class="h4 timeline-item-title">Lycée D'Arsonval</h4>

                                                        <span>2017 — 2020</span>

                                                        <p class="timeline-text">
                                                            Saint-Maur Des Fossés,
                                                            BAC ES

                                                        </p>

                                                    </li>

                                                </ol>

                                            </section>

                                            <section class="timeline">

                                                <div class="title-wrapper">
                                                    <div class="icon-box">
                                                        <ion-icon name="book-outline"></ion-icon>
                                                    </div>

                                                    <h3 class="h3">Expériences</h3>
                                                </div>

                                                <ol class="timeline-list">

                                                    <li class="timeline-item">

                                                        <h4 class="h4 timeline-item-title">Chauffeur/Livreur</h4>

                                                        <span>2021 — 2022</span>

                                                        <p class="timeline-text">
                                                            Amazon Bonneuil,Charger/décharger des produits, Organisation
                                                            d'une tournée en
                                                            fonction des consignes de livraison, livraison des
                                                            marchandises,
                                                            entretien du véhicule.
                                                        </p>

                                                    </li>

                                                    <li class="timeline-item">

                                                        <h4 class="h4 timeline-item-title">Equipier polyvalent</h4>

                                                        <span>2019 — 2020</span>

                                                        <p class="timeline-text">
                                                            Domino's Pizza Saint-Maur-Des-Fosses, Accueil, prise de
                                                            commandes et encaissements,
                                                            fabrication de
                                                            pizzas, nettoyage et mise en place, livraison.
                                                        </p>

                                                    </li>


                                                </ol>

                                            </section>

                                    </div>

                                </main>

                                <!--
                  - ionicon link
                -->
                                <script type="module"
                                    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                                <script nomodule
                                    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                            </div>
                            <script src="script.js"></script>

                            <!--
                - ionicon link
              -->
                            <script type="module"
                                src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <br>
    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////
                              START SECTION 7 - THE PORTFOLIO  
//////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="text-center mt-5" id="projet">
        <h1 class="display-3 fw-bold text-capitalize">Mes dernier projets</h1>
        <div class="heading-line"></div>
        <p class="lead">
            Voici les derniers projets réalisé, vous pouvez retrouver l'intégralité de mes projets sur cette
            page.
        </p>
    </div>

    <article class="visible" id="visible">
	<section class="projects">
		<ul class="project-list">
		
			<?php

				// Récupérer tous les posts
				$stmt = $pdo->query('SELECT * FROM posts');
				$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

				// Afficher les posts
				
				foreach ($posts as $post) {
					echo '<li class="project-item active">';
					echo '<a href="php/post.php?id=' . $post['id'] . '">';
					
					if (!empty($post['image'])) {
						echo '<figure class="project-img">';
						echo '<img src="' . htmlspecialchars($post['image'])  . '">';
						echo '</figure>';
					}
					
					
					echo '<h3 class="project-title">' . htmlspecialchars($post['title']) . '</h3>';
					echo '</a></li>';
				}
			?>
			
			
		</ul>
	</section>
</article>

    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////
              START SECTION 8 - GET STARTED  
/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <section id="contact" class="get-started">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold text-capitalize">Contact</h1>
                <div class="heading-line"></div>
                <p class="lh-lg">
                    Contactez moi pour plus d'informations
                </p>
            </div>
            <!-- START THE CTA CONTENT  -->
            <div class="row text-white">
                <div class="col-12 col-lg-6 gradient shadow p-3">
                    <div class="cta-info w-100">
                        <h4 class="display-4 fw-bold">Vous avez aimez ce que vous avez vus ?</h4>
                        <p class="lh-lg">
                            N'hesitez pas a me contacter pour plus d'informations
                        </p>
                        <section class="mapbox" data-mapbox>
                            <figure>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21024.433662239924!2d2.471468043983842!3d48.79994403290276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60cf0a32d86a9%3A0xb0dd0b84be904e3d!2sSaint-Maur-des-Foss%C3%A9s!5e0!3m2!1sfr!2sfr!4v1681506105579!5m2!1sfr!2sfr"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </figure>
                        </section>
                    </div>
                </div>

                <div class="col-12 col-lg-6 bg-white shadow p-3">
                    <div class="form w-100 pb-2 order-lg-2">
                        <h4 class="display-3--title mb-5">Contactez moi par mail</h4>

                        <form action="php\message.php" class="row" method="post">
                            <div class="col-lg-6 col-md mb-3">
                                <input type="text" name="nom" class="form-input" placeholder="nom" required>
                            </div>
                            <div class="col-lg-6 col-md mb-3">
                                <input type="text" name="prenom" class="form-input" placeholder="prénom" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <input type="email" name="email" class="form-input" placeholder="Adresse Email"
                                    required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <input type="text" name="sujet" class="form-input" placeholder="Sujet" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <input type="text" name="telephone" class="form-input"
                                    placeholder="Telephone (facultatif)">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <textarea name="message" class="form-input" placeholder="Message" required
                                    data-form-input></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <button class="form-btn" type="submit" id="envoyer">
                                    <ion-icon name="paper-plane"></ion-icon>
                                    <span>envoyer</span>
                                </button>
                                <div class="centered">
                                                <?php
                                        if (isset($_GET['success'])) {
                                            echo '<p>Votre message a bien été envoyé.</p>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </form>
                        


                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ///////////////////////////////////////////////////////////////////////////////////////////
                           START SECTION 9 - THE FOOTER  
///////////////////////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- CONTENT FOR THE MOBILE NUMBER  -->
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                    <div class="contact-box__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call"
                            viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            <path d="M15 7a2 2 0 0 1 2 2" />
                            <path d="M15 3a6 6 0 0 1 6 6" />
                        </svg>
                    </div>
                    <div class="contact-box__info">
                        <a href="#" class="contact-box__info--title" onclick="callOrMessage()">+33 6 20 60 62 43</a>
                        <p class="contact-box__info--subtitle"> Lun-Sam 9h-20h</p>
                    </div>
                </div>
                <!-- CONTENT FOR EMAIL  -->
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                    <div class="contact-box__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened"
                            viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="3 9 12 15 21 9 12 3 3 9" />
                            <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                            <line x1="3" y1="19" x2="9" y2="13" />
                            <line x1="15" y1="13" x2="21" y2="19" />
                        </svg>
                    </div>
                    <div class="contact-box__info">
                        <a href="mailto:lpoignard@guardiaschool.fr"
                            class="contact-box__info--title">lpoignard@guardiaschool.fr</a>
                        <p class="contact-box__info--subtitle">Adresse Email</p>
                    </div>
                </div>
                <!-- CONTENT FOR LOCATION  -->
                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                    <div class="contact-box__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2"
                            viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="18" y1="6" x2="18" y2="6.01" />
                            <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                            <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                            <line x1="9" y1="4" x2="9" y2="17" />
                            <line x1="15" y1="15" x2="15" y2="20" />
                        </svg>
                    </div>
                    <div class="contact-box__info">
                        <a href="https://www.google.fr/maps/place/Saint-Maur-des-Foss%C3%A9s/@48.799944,2.471468,14z/data=!3m1!4b1!4m6!3m5!1s0x47e60cf0a32d86a9:0xb0dd0b84be904e3d!8m2!3d48.8029439!4d2.485429!16zL20vMDJkdDNs"
                            target="_blank" class="contact-box__info--title">Ile de france, France</a>
                        <p class="contact-box__info--subtitle">94100, Saint-Maur-Des-Fosses</p>
                    </div>
                </div>
            </div>

            <!-- START THE COPYRIGHT INFO  -->
            <div class="footer container-fluid">
                <div class="row text-center text-white justify-content-end align-items-center">
                    <div class="col-12">
                        <div class="footer-bottom__copyright">
                            <a href="php\login.php">&COPY; Copyright 2023 Lp</a>
                            <ul class="social-list">

                                <li class="social-item">
                                    <a href="https://www.linkedin.com/in/lucas-poignard-716747252/" class="social-link">
                                        <ion-icon name="logo-linkedin"></ion-icon>
                                    </a>
                                </li>

                                <li class="social-item">
                                    <a href="https://github.com/sentiitoo?tab=repositories" class="social-link">
                                        <ion-icon name="logo-github"></ion-icon>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    </footer>

    <!-- BACK TO TOP BUTTON  -->
    <a href="#" class="shadow btn-primary rounded-circle back-to-top">
        <ion-icon name="caret-up-outline"></ion-icon>
    </a>

    </script>
    <script src="assets\js\bootstrap.bundle.min.js"></script>
</body>

</html>