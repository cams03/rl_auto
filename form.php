<?php
$destinataire = "camille.c.francia@gmail.com";
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = $_POST['mail'];
$objet = $_POST['subject'];
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset= UTF-8'."\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'From: <'.$expediteur.'>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
$demande = $_POST['demande'];
$marque = $_POST['selectmarque'];
$modele = $_POST['modele'];
$annee = $_POST['annee'];
$km = $_POST['km'];
$etat = $_POST['etat'];
$message = '<div style="width: 100%;">'.$_POST['message'].'</div>';
$retour = '<br><a href="http://cams03.github.io/rl_auto" style="text-decoration:none;"><button style="padding:5px; font-family:sans-serif; font-size:15px; margin-top:10px; cursor:pointer;">Retour</button></a>';
if (mail($destinataire, $objet, $demande, $marque, $modele, $annee, $km, $etat, $message, $headers)) // Envoi du message
{
    header('Location: index.html#contact');
}
else // Non envoyé
{
    echo "Votre message n'a pas pu être envoyé";
    echo $retour;
}
?>
