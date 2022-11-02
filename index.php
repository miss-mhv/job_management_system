<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 22/08/2017
 * Time: 09:52
 */

// Initialisation
include 'global/init.php';

// Début de la tamporisation de sortie
ob_start();

// Si un module est specifié, on regarde s'il existe

if (!empty($_GET['module']))
{

    $module = dirname(__FILE__).'/modules/'.$_GET['module'].'/';

    // Si l'action est specifiée, on l'utilise, sinon, on tente une action par défaut
    $action = (!empty($_GET['action'])) ? $_GET['action'].'.php' : 'index.php';

    if (!utilisateur_est_connecte())
    {
        if($_GET['module'] == 'admin')
        {
            include 'global/accueil.php';
        }
        else
        {
            // Si l'action existe, on l'exécute
            if (is_file($module.$action))
            {
                include $module.$action;

                // Sinon, on affiche la page d'accueil !
            }
            else
            {
                include 'global/accueil.php';
            }
        }

    }

    // Lorsqu'un utilisateurn est connecté
    else
    {
        // Si l'action existe, on l'exécute
        if (is_file($module.$action))
        {
            include $module.$action;

            // Sinon, on affiche la page d'accueil !
        } else {

            include 'modules/admin/vues/index.php';
        }
    }

    // Module non specifié ou invalide ? On affiche la page d'accueil !
}
else
{
    // Lorsqu'un utilisateurn n'est pas connecté

    if (!utilisateur_est_connecte())
    {
        include 'global/accueil.php';
    }

    // Lorsqu'un utilisateurn est connecté
    else
    {
        include 'modules/admin/vues/index.php';
    }

}

$contenu = ob_get_clean();

/*
 * Affichage d'une page selon qu'un utilisateur soit connecté ou non
 */

if (!utilisateur_est_connecte())
{
    include 'global/header_candidat.php';
    echo $contenu;
    include 'global/footer_candidat.php';
}
else
{
    include 'global/header_admin.php';
    echo $contenu;
    include 'global/footer_admin.php';
}

