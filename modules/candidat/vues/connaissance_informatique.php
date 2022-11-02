<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 10/10/2017
 * Time: 14:11
 */
?>

<!-- Connaissances informatiques -->

<div class=" mdl-cell mdl-cell--12-col">
    <h5 class="mdl-cell--12-col titre-partie">Partie 9: Connaissances informatiques </h5>
    <div class=" mdl-cell mdl-cell--12-col">
        <div id="con_info" class="mdl-cell--12-col mdl-shadow--8dp mdl-js-ripple-effect mdl-button--raised mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored " style="float: right">
            <i class="material-icons">add</i>
        </div>

        <!-- Formulaire pour la saisie des informations relatives à la rubrique -->

        <?php echo '<input id="nbChamps_con_info" type="hidden" name="nbChamps_con_info" value=1 />'; ?>
        <div id="div_con_info_1" class="mdl-cell mdl-cell--12-col">
            <div class="mdl-grid">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col ">
                    <input class="mdl-textfield__input newInput" type="text" id="outil_0" name="outil[0]"/>
                    <label class="mdl-textfield__label" for="outil_0" style="bottom: 3px;">Saisir un outil</label>
                </div>
                <div class="input-field mdl-cell mdl-cell--3-col">
                    <select  id="niveau_0" class="browser-default newInput" name="niveau[0]">
                        <option value="" disabled selected>Nieau</option>
                        <option  value="faible">Faible</option>
                        <option  value="moyen">Moyen</option>
                        <option  value="bon">Bon</option>
                        <option  value="excellent"> Excellent</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Tableau pour afficher les différentes informations saisies dans le formulaire-->

        <div  class="mdl-cell mdl-cell--12-col " style="overflow:auto;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="con_info_table">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Outils</th>
                    <th class="mdl-data-table__cell--non-numeric">Niveaux</th>
                    <th>Editer / Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <tr id="con_info_tr_1">
                    <td class="" id="outil_td_1"  style="text-align: left"></td>
                    <td class="" id="niveau_td_1"  style="text-align: left"></td>
                    <td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>
                        <i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>
