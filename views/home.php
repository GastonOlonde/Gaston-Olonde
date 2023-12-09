<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="./CSS/home.css"> 
    <link rel ="stylesheet" href="./JS/libs/node_modules/notyf/notyf.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Gaston Olonde</title>
</head>
<body>
     <!-- home section design -->
     <section class="Accueil" id="Accueil">
        <div class="Accueil-content">
            <!-- <h3>Bonjour, c'est moi</h3> -->
            <h1>Gaston Olonde</h1>
            <h3><span>Étudiant développeur</span></h3>
            <p>Je suis étudiant en 2ème année de BUT informatique à l'IUT d'Amiens. 
            </p>
            <div class="social-media">
                <a href="https://twitter.com/OlondeGaston" target="_blank"><i class='bx bxl-twitter' ></i></a>
                <a href="https://www.instagram.com/o_gaston_/" target="_blank"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="https://www.linkedin.com/in/gaston-olonde-a90523263/" target="_blank"><i class='bx bxl-linkedin' ></i></a>
            </div>
            <a href="./Assets/fichiers/Cv-OlondeGaston.pdf" target="_blank" class="btn" >Télécharger le CV</a>
        </div>

        <div class="Accueil-img">
            <img src=".\Assets\images\img-accueil.png" alt="">
        </div>
    </section>

    <!-- about section design -->
    <section class="Apropos" id="Apropos">
        <div class="Apropos-img">
            <img src=".\Assets\images\img-apropos.png" alt="">
        </div>
        <div class="Apropos-content">
            <h3>À propos de <span>moi</span></h3>
            <h2>Étudiant Développeur web </h2>
            <li>Passionné de vélo</li>
            <li>Investi</li>
            <li>Régulié</li>
            <li>Je n'ai pas peur d'apprendre</li>
            <a href="#" class="btn" >Lire plus sur moi</a>
        </div>
        
    </section>



    <section class="Projets" id="Projets">
        <h2 class="heading">Mes <span>Projets Web</span></h2>
        
        <div class="Projets-content"> 
            <div class="Projets-container">
                <div class="projet-item">
                    <h3>CID</h3>
                    <p>
                        Le CID (Centre des informaticiens dispersés) est un site web réalisé en groupe lors d'un projet tutoré. 
                    </p>
                    <p>
                        Il permet aux anciens étudiants diplômés de l'IUT d'Amiens de renouer le contact et de partager des informations.
                    </p>
                    <p>
                        Le site est composé d'un espace d'évenement où chaque utilisateur peut poster un évènement ( conférence, réunion, etc...).
                        Il y a aussi un espace galerie où chaque utilisateur peut poster des photos.
                        Enfin, ce site est gérer par un administrateur qui peut supprimer des utilisateurs, des évènements et des photos.
                    </p>
                    <div class="cidap">
                        <img src="./Assets/images/cid-acc.png" alt="">
                        <!-- <iframe src="olonde.net/Gaston/SAE3" width="600" height="400" frameborder="0"></iframe> -->
                    </div>

                    <!-- <a href="olonde.net/Gaston/SAE3/home" class="btn" >Voir</a> -->
                </div>
                <div class="projet-item">
                    <h3>Mon site personnel</h3>
                    <p>
                        Ce site est mon site personnel. Il me permet de me présenter et de présenter mes projets.
                        Il est composé de 4 sections : d'une présentation brève de moi même, d'une page projets et une page contenant un formulaire de contact.
                    </p>
                    <p>
                        Ce site est évolutif, il sera mis à jour au fur et à mesure de mes projets.
                        Et sera modifié en fonction de mes envies. Il me permettra de développer mes compétences tout en étant libre de mes choix.  
                    </p>
                    <!-- <a href="#" class="btn" >Voir</a> -->
                </div>
            </div>
        </div>
            
    </section>
    
    <section class="Contact" id="Contact">
        <h2 class="heading">Contactez <span>Moi !</span></h2>
        
        <form method="POST" action="./models/formulaire.php">
            <div class="input-box">
                <input name="nom" type="text" placeholder="Nom">
                <input name="prenom" type="text" placeholder="Prénom">
            </div>
            <div class="input-box-l">
                <input name="email" type="email" class="line" placeholder="Email">
            </div>
            <div class="input-box">
                <input name="tel" type="number" placeholder="Téléphone">
                <input name="object" type="text" placeholder="object">
            </div>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Votre Message" ></textarea>
            <input type="submit" value="Envoyer le Message" class="btn">
        </form>
    </section>
    <script src="./JS/libs/node_modules/notyf/notyf.min.js"></script>
    <script src="./JS/notifs.js"></script>
</body>
</html>