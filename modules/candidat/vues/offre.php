<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 28/09/2017
 * Time: 16:32
 */

//require_once "modeles/offre.php";
?>

<style>
    .type-offre
    {
        border: #9ed65e solid;
        border-radius: 150px;
        color: #1565c0;
        font-size: 80px;
        padding: 5px;

    }
    .link-offre .type-offre:hover{
            border: #1565c0 solid;
            color: #9ed65e;

    }
    .consulte-offre a
    {
        color: #1565c0;
    }
</style>

<div class="mdl-grid consulte-offre">
    <div class="mdl-cell mdl-cell--12-col">
        <h5>Devenez membre du cabinet JMN Consultant</h5>
    </div>
    <div class="mdl-cell mdl-cell--4-col center">
        <a href="index.php?module=candidat&amp;action=vues/liste-offre&amp;offre=emploi" class="link-offre">
            <img src="http://localhost/jmnjob/libs/images/travailleur-jmn.png" class = "type-offre" height="100" width="100" style="display: inline-block;"/>
            <h4><b>Offres d'emplois</b></h4>
        </a>
    </div>
    <div class="mdl-cell mdl-cell--4-col center">
        <a href="index.php?module=candidat&amp;action=vues/liste-offre&amp;offre=stage" class="link-offre">
            <img src="http://localhost/jmnjob/libs/images/stage-jmn.png" class = "type-offre" height="100" width="100" style="display: inline-block;"/>
            <h4><b>Offres de stages</b></h4>
        </a>
    </div>
    <div class="mdl-cell mdl-cell--4-col center">
        <a href="index.php?module=candidat&amp;action=vues/formulaire" class="link-offre">
            <img src="http://localhost/jmnjob/libs/images/candidature-spon-jmn.png" class = "type-offre" height="100" width="100" style="display: inline-block;"/>
            <h4><b>Candidature spontannée</b></h4>
        </a>
    </div>
</div>

