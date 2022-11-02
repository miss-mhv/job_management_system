<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 22/08/2017
 * Time: 09:54
 */
include 'global/config.php';

session_start();

include CHEMIN_MODELE.'connexion.php';

// V�rifie si l'utilisateur est connect�
function utilisateur_est_connecte() {
    return !empty($_SESSION['id']);
}

// On a besoin du mod�le des admins et des candidats

include CHEMIN_MODELE.'admin.php';
include CHEMIN_MODELE.'candidat.php';
include CHEMIN_MODELE.'inscription.php';
include CHEMIN_MODELE.'offre.php';
include CHEMIN_MODELE.'fonction.php';
include CHEMIN_MODELE.'candidature.php';

