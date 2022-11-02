<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 23/08/2017
 * Time: 14:14
 */
?>
<!doctype html>
<html lang="en">
<?php
include 'head.php';
//require_once "modeles/offre.php";
$nbr_new_offre = afficher_offre(1);
$nbr_new_cdture = liste_candidature();
$badge_offre = $nbr_new_offre->rowCount();
$badge_cdture = $nbr_new_cdture->rowCount();
//$badge_offre = 30;
?>

<body>

<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title titre-partie"><h3>JmnJob</h3></span>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search">
                    <label class="mdl-textfield__label" for="search">Enter your query...</label>
                </div>
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                <li class="mdl-menu__item">
                    <a class="mdl-navigation__link" href="index.php?module=admin&amp;action=deconnexion" style="color:#1565c0">Déconnexion</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
            <img src="http://localhost/jmnjob//libs/images/user.jpg"class="demo-avatar">
            <div class="demo-avatar-dropdown">
                <span>Bienvenu <em>
                        <?php
                        if(!empty($_SESSION['pseudo']))
                        echo $_SESSION['pseudo'];
                        ?>
                    </em></span>
                <div class="mdl-layout-spacer"></div>
                <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons" role="presentation">arrow_drop_down</i>
                    <span class="visuallyhidden">Accounts</span>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                    <li class="mdl-menu__item">hello@example.com</li>
                    <li class="mdl-menu__item">info@example.com</li>
                    <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
                </ul>
            </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
            <a class="mdl-navigation__link" href="index.php?module=admin&amp;action=vues/index"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Accueil</a>
            <a class="mdl-navigation__link" href="index.php?module=admin&amp;action=vues/offre"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i><span class="mdl-badge" data-badge="<?php echo $badge_offre;?>">Offres</span></a>
            <a class="mdl-navigation__link" href="index.php?module=admin&amp;action=vues/candidature"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i><span class="mdl-badge" data-badge="<?php echo $badge_cdture;?>">Candidatures</span></a>
            <a class="mdl-navigation__link" href="index.php?module=admin&amp;action=deconnexion"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment_return</i>Déconnexion</a>
            <div class="mdl-layout-spacer"></div>
            <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
        </nav>
    </div>
    <main class="mdl-layout__content mdl-color--grey-100">
