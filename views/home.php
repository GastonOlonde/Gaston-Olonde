<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../ProjetPerso/CSS/style.css"> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Gaston Olonde</title>
</head>
<body>
    <?php
    session_start();
    include('../ProjetPerso/includes/header.php');
    ?>

     <!-- home section design -->
     <section class="Accueil" id="Accueil">
        <div class="Accueil-content">
            <h3>Bonjour, c'est moi</h3>
            <h1>Gaston Olonde</h1>
            <h3>Et je suis un <span>Étudiant développeur</span></h3>
            <p>Je suis étudiant en BUT à l'IUT d'Amiens, et j'entre dans ma deuxième année. 
            </p>
            <div class="social-media">
                <a href="https://twitter.com/OlondeGaston" target="_blank"><i class='bx bxl-twitter' ></i></a>
                <a href="https://www.instagram.com/o_gaston_/" target="_blank"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="https://www.linkedin.com/in/gaston-olonde-a90523263/" target="_blank"><i class='bx bxl-linkedin' ></i></a>
            </div>
            <a href="file:///C:/Users/Gaston/Documents/Cv-OlondeGaston.pdf" target="_blank" class="btn" >Télécharger le CV</a>
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
            <li>Je suis passionné de VTT depuis tout petit.</li>
            <li>Je suis investi dans mon travail.</li>
            <li>Quand j'entreprends quelque chose j'essai d'aller jusqu'au bout.</li>
            <li>Je n'ai pas peur d'apprendre.</li>
            <a href="#" class="btn" >Lire plus sur moi</a>
        </div>
        
    </section>



    <section class="Projets" id="Projets">
        <h2 class="heading">Mes <span>Projets Web</span></h2>
        
        <div class="Projets-content">
            <div class="projets-desc">
                <i class='bx bx-code-alt'></i>
                <h3>Développement Web</h3>
                <p>N'ayant pas fait de gros projets l'année dernière sur le web. Je m'exerce de temps en temps 
                    sur des petites réalisations. 

                    Cette année je prévois de réaliser mon premier projet, qui est le site sur lequel vous êtes.
                    Je voudrais aller jusqu'au bout en l'hébergeant, avec l'intégration bootstrap peut-être. 
                    Mon projet suivant serai le projet de groupe SAE que l'on doit réaliser à l'iut. 
                    C'est un site internet complet de A à Z pour le CID ( centre des informaticiens dispersées).
                </p>

            </div>
            <div class="Projets-container">
                <div class="projet-item">
                    <h3>Calculatrice</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aliquid autem obcaecati aspernatur sed ad, laboriosam est quis minus ab sint ea nesciunt at. Esse, dolorem. Corporis obcaecati dolores quos.</p>
                    <a href="#" class="btn" >Voir</a>
                </div>
                <div class="projet-item">
                    <h3>Navbar dynamique</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aliquid autem obcaecati aspernatur sed ad, laboriosam est quis minus ab sint ea nesciunt at. Esse, dolorem. Corporis obcaecati dolores quos.</p>
                    <a href="#" class="btn" >Voir</a>
                </div>
                <div class="projet-item">
                    <h3>Navbar responsive</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aliquid autem obcaecati aspernatur sed ad, laboriosam est quis minus ab sint ea nesciunt at. Esse, dolorem. Corporis obcaecati dolores quos.</p>
                    <a href="#" class="btn" >Voir</a>
                </div>
            </div>
        </div>
            
    </section>
    
    <section class="Contact" id="Contact">
        <h2 class="heading">Contactez <span>Moi !</span></h2>
        
        <form action="../PHP/formulaire.php">
            <div class="input-box">
                <input type="text" placeholder="Nom">
                <input type="text" placeholder="Prénom">
            </div>
            <div class="input-box-l">
                <input type="email" class="line" placeholder="Email">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Téléphone">
                <input type="text" placeholder="object">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Votre Message" ></textarea>
            <input type="submit" value="Envoyer le Message" class="btn">
        </form>

    </section>
</body>
</html>