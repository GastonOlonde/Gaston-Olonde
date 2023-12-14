<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $object = $_POST["object"];
        $message = $_POST["message"];


        // Vérification de l'email avec une expression régulière
        if (!preg_match("/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/", $email)) {
            header('Location: /Gaston/?emailerror=true');
            exit;
        }   

        // Vérification du numéro de téléphone (format français)
        if (!preg_match("/^[0-9]{10}$/", $tel)) {
            header('Location: /Gaston/?telerror=true');
            exit;
        }

        // Construction du message
        $contenu_message = "$message\n";
        $contenu_message .= "\n\n";
        $contenu_message .= "$prenom ";
        $contenu_message .= "$nom\n";
        $contenu_message .= "$email\n";
        $contenu_message .= "$tel\n";


        // Envoyer l'e-mail
        $destinataire = "gastonolonde@gmail.com";  // Adresse e-mail du destinataire
        $sujet = $object;

        mail($destinataire, $sujet, $contenu_message);

        // Redirection ou autre traitement après l'envoi
        header('Location: /Gaston/?envoiform=true');
        exit; 
    }else{
        header('Location: /Gaston/?noenvoiform=true');
        exit;
    }
?>

