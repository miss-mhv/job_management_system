<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 23/08/2017
 * Time: 13:34
 */
?>
<!doctype html>
<html lang="en">
<?php  include 'head.php'?>
<body>
<style>
    .mdl-layout__header
    {
        min-height: 100px;
        background-color: whitesmoke;
    }
    @media screen and (max-width:1024px)
    {
        .mdl-layout__header{min-height:106px}
    }
    .mdl-layout__header-row
    {
        height: 100px;
    }
    .waterfall-demo-header-nav .mdl-navigation__link {
        color: black;
        padding-right: 0;
    }
    nav .waterfall-demo-header-nav
    {
        background-color: whitesmoke;
    }
    nav
    {
        -webkit-box-shadow: 0 0 0 0 rgba(0,0,0,0.16), 0 0 0 0 rgba(0,0,0,0.12);
        -moz-box-shadow: 0 0 0 0 rgba(0,0,0,0.16),0 0 0 0 rgba(0,0,0,0.12);
         box-shadow: 0 0 0 0 rgba(0,0,0,0.16), 0 0 0 0 rgba(0,0,0,0.12);
    }

    .demo-header .mdl-layout__drawer-button {
        display: none;
    }
    @media only screen and (max-width:600px){
        .demo-header .mdl-layout__drawer-button {
            display: block;
            color: #9ed65e;
            height: 50px;
            width: 50px;
            border-radius: 150px;
            background-color: #1565c0;
            text-align: center;
            border: 2px solid #9ed65e;
        }
        .demo-header .waterfall-demo-header-nav{
            display: none;
        }
        .demo-header .titre-partie{
            position: absolute;
            right: 100px;
        }

    }
</style>

<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
    <header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color-text--grey-800">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title titre-partie"><h3>JmnJob</h3></span>
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="waterfall-demo-header-nav mdl-navigation">
                <a class="mdl-navigation__link" href="http://localhost/jmnjob/">Accueil</a>
                <a class="mdl-navigation__link" href="index.php?module=candidat&amp;action=vues/offre">Les offres</a>
                <a class="mdl-navigation__link" href="index.php?module=candidat&amp;action=inscription">Postuler</a>
                <a class="mdl-navigation__link" href="index.php?module=candidat&amp;action=connexion">Connexion</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title titre-partie"><h5>Menu</h5></span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="http://localhost/jmnjob/">Accueil</a>
            <a class="mdl-navigation__link" href="index.php?module=candidat&amp;action=vues/offre">Les offres</a>
            <a class="mdl-navigation__link" href="index.php?module=candidat&amp;action=inscription">Postuler</a>
            <a class="mdl-navigation__link" href="index.php?module=admin&amp;action=connexion">Connexion</a>
        </nav>
    </div>
    <div class="demo-ribbon blue darken-3"></div>
    <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
            <div class="mdl-cell mdl-cell--1-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
            <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--10-col">
                <div class="demo-crumbs mdl-color-text--grey-500">
                </div>