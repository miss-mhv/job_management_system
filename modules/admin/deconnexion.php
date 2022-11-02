<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 22/08/2017
 * Time: 12:04
 */

// V�rification des droits d'acc�s de la page
if (!utilisateur_est_connecte()) {

    // On affiche la page d'erreur comme quoi l'utilisateur doit �tre connect� pour voir la page
    include CHEMIN_VUE_GLOBALE.'erreur_non_connecte.php';

} else {
    // Suppression de toutes les variables et destruction de la session
    $_SESSION = array();
    session_destroy();

    // Suppression des cookies de connexion automatique
    setcookie('id', '');
    setcookie('connexion_auto', '');
   // include CHEMIN_VUE.'deconnexion_ok.php';
    header('location:http://localhost/jmnjob');
}
