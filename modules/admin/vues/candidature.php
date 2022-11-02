<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 01/11/2017
 * Time: 10:14
 */
?>

<style>
    .mdl-data-table td,.mdl-data-table th  {
    text-align: left;
    }

</style>

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--1-col"></div>
    <div class="mdl-cell mdl-cell--10-col center-align">
        <h4>Liste des candidatures soumises (<?php echo liste_candidature()->rowCount();?>)</h4>
    </div>
</div>
<div class="mdl-grid">
    <div class="input-field mdl-cell mdl-cell--4-col">
        <table class="mdl-data-table mdl-data-table--selectable mdl-shadow--2dp ">
            <tbody>
            <tr id="tr_recent"><td>Candidatures récentes</td> <td> <em><?php echo liste_candidature_etat(0)->rowCount();?></em> </td></tr>
            <tr id="tr_en_cours"><td>Candidatures en cours de traitement </td> <td> <em><?php echo liste_candidature_etat(1)->rowCount(1);?></em> </td></tr>
            <tr id="tr_valide"><td>Candidatures validées </td> <td> <em><?php echo liste_candidature_etat(2)->rowCount();?></em> </td></tr>
            <tr id="tr_rejete"><td>Candidatures rejetées </td> <td> <em><?php echo liste_candidature_etat(3)->rowCount();?></em> </td></tr>
            <tr id="tr_tout"><td>Toutes les candidatures </td> <td> <em><?php echo liste_candidature()->rowCount();?></em> </td></tr>
            </tbody>
        </table>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col ">
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col">
        <input class="mdl-textfield__input newInput rechercher" type="text" id="rechercher_cand" name="rechercher_cand"/>
        <label class="mdl-textfield__label" for="rechercher_cand" style=" font-size: 12px;">Entrer le texte à rechercher
            <label class="mdl-button mdl-js-button mdl-button--icon mon_icon" id="" for="rechercher_cand">
                <i class="material-icons">search</i>
            </label>
        </label>
    </div>
    <div class="input-field mdl-cell mdl-cell--2-col">
        <select  id="" class="browser-default newInput" name="">
            <option value="" disabled selected>Type de candidature </option>
            <option  value=""> Spontanée</option>
            <option  value="">Ponctuel</option>
        </select>
    </div>
    <div class="input-field mdl-cell mdl-cell--2-col">
        <select  id="" class="browser-default newInput" name="">
            <option value="" disabled selected>Offre</option>
            <option  value=""> Offre1</option>
            <option  value=""> Offre2</option>
            <option  value=""> Offre3</option>
            <option  value=""> Offre4</option>
        </select>
    </div>
    <div class="input-field mdl-cell mdl-cell--2-col">
        <select  id="" class="browser-default newInput" name="">
            <option value="" disabled selected>Type d'offre</option>
            <option  value=""> Stage professionnel</option>
            <option  value="">Stage académique</option>
            <option  value="">Stage préemploi</option>
            <option  value="">Consultant externe</option>
            <option  value="">Offre d'emploi</option>
        </select>
    </div>
    <div class="input-field mdl-cell mdl-cell--2-col ">
        <select  id="" class="browser-default newInput" name="">
            <option value="" disabled selected>Etat</option>
            <option  value=""> En cours</option>
            <option  value="">Expirées</option>
            <option  value="">Rejettées</option>
            <option  value="">Archivées</option>
        </select>
    </div>
    <div  class="mdl-cell mdl-cell--12-col " style="overflow:auto;">
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp filtre_tableau" id = "table_liste_cand">
            <thead>
            <tr>
                <th onclick="sortTable(1,'table_liste_cand')">N°</th>
                <th onclick="sortTable(2,'table_liste_cand')">Nom et Prénom</th>
                <th onclick="sortTable(3,'table_liste_cand')">Type</th>
                <th onclick="sortTable(4,'table_liste_cand')">N° de l'offre</th>
                <th onclick="sortTable(5,'table_liste_cand')">Type d'offre</th>
                <th onclick="sortTable(6,'table_liste_cand')">Etat</th>
                <th></th>
            </tr>
            </thead>
            <?php include 'liste_candidature.php'; ?>
            <?php include 'liste_candidature_recente.php'; ?>
            <?php include 'liste_candidature_en_cours.php'; ?>
            <?php include 'liste_candidature_valide.php'; ?>
            <?php include 'liste_candidature_rejete.php'; ?>
        </table>
    </div>
</div>
<script>

    //$('#cand').hide();
    $('#cand_recente').hide();
    $('#cand_en_cours').hide();
    $('#cand_valide').hide();
    $('#cand_rejete').hide();
/*function afficher_cand()
{
    $('#cand_recente').hide();
    $('#cand_en_cours').hide();
    $('#cand_valide').hide();
    $('#cand_rejete').hide();
}*/
  $('#tr_recent').click(function(){
      $('#cand_recente').show();
      $('#cand').hide();
      $('#cand_en_cours').hide();
      $('#cand_valide').hide();
      $('#cand_rejete').hide();
  });
    $('#tr_en_cours').click(function(){
      $('#cand_recente').hide();
      $('#cand').hide();
      $('#cand_en_cours').show();
      $('#cand_valide').hide();
      $('#cand_rejete').hide();
  });
    $('#tr_valide').click(function(){
      $('#cand_recente').hide();
      $('#cand').hide();
      $('#cand_en_cours').hide();
      $('#cand_valide').show();
      $('#cand_rejete').hide();
  });
    $('#tr_rejete').click(function(){
      $('#cand_recente').hide();
      $('#cand').hide();
      $('#cand_en_cours').hide();
      $('#cand_valide').hide();
      $('#cand_rejete').show();
  });
    $('#tr_tout').click(function(){
      $('#cand_recente').hide();
      $('#cand').show();
      $('#cand_en_cours').hide();
      $('#cand_valide').hide();
      $('#cand_rejete').hide();
  });
</script>

