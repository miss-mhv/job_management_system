<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 18/10/2017
 * Time: 09:56
 */
/*require_once"../../modeles/admin.php";
require_once"../../global/config.php";*/
///session_start();

/*if (utilisateur_est_connecte()) {

    // On affiche la page d'erreur comme quoi l'utilisateur est déjà connecté
    include CHEMIN_VUE_GLOBALE.'erreur_deja_connecte.php';

}
else {*/
    if(!empty($_POST['pseudo']) && !empty($_POST['pass']))
    {
        $pseudo = $_POST['pseudo'];
        $pass = $_POST['pass'];

        // on vérifie si les infos entrées sont présentent la bd

        $id_utilisateur = combinaison_connexion_valide($pseudo,md5($pass));

        if (false !== $id_utilisateur)
        {
            echo 'is good';
            $infos_utilisateur = lire_infos_utilisateur($id_utilisateur);

            // On enregistre les informations dans la session
            $_SESSION['id'] = $id_utilisateur;
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['email'] = $infos_utilisateur['email'];
            $_SESSION['user'] = 'admin';

            // Mise en place des cookies de connexion automatique

            $navigateur = (!empty($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : '';
            $hash_cookie = sha1('aaa'.$pseudo.'bbb'.$pass.'ccc'.$navigateur.'ddd');

            setcookie( 'id',            $_SESSION['id'], strtotime("+1 year"), '/');
            setcookie('connexion_auto', $hash_cookie,    strtotime("+1 year"), '/');


            header('location:http://localhost/jmnjob/index.php');
        }
        else
        {

            $erreurs_connexion[] = "Couple nom d'utilisateur / mot de passe inexistant.";


            // On réaffiche le formulaire de connexion
            include_once CHEMIN_VUE.'form_connexion.php';
        }
    }
    else
    {
        include_once CHEMIN_VUE.'form_connexion.php';
    }
//}

