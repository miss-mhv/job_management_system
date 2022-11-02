<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 13/09/2017
 * Time: 14:06
 */
?>

<!-- Connaissances linguistiques -->

<div class=" mdl-cell mdl-cell--12-col">
    <h5 class="mdl-cell--12-col titre-partie">Partie 3: Connaissances linguistiques </h5>
    <div class=" mdl-cell mdl-cell--12-col">
        <div id="con_ling" class="mdl-cell--12-col mdl-shadow--8dp mdl-js-ripple-effect mdl-button--raised mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored " style="float: right">
            <i class="material-icons">add</i>
        </div>

        <!-- Formulaire pour la saisie des informations relatives à la rubrique -->

        <?php echo '<input id="nbChamps_con_ling" type="hidden" name="nbChamps_con_ling" value=1 />'; ?>
        <div id="div_con_ling_1" class="mdl-cell mdl-cell--12-col">
            <div class="mdl-grid">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--3-col ">
                    <input class="mdl-textfield__input newInput" type="text" id="langue_0" name="langue[0]"/>
                    <label class="mdl-textfield__label" for="langue_0" style="bottom: 3px;">Saisir une langue</label>
                </div>
                <div class="input-field mdl-cell mdl-cell--3-col">
                    <select  id="lecture_0" class="browser-default newInput" name="lecture[0]">
                        <option value="" disabled selected>Lecture</option>
                        <option  value="excellent"> Excellent</option>
                        <option  value="bon">Bon</option>
                        <option  value="moyen">Moyen</option>
                        <option  value="faible">Faible</option>
                    </select>
                </div>
                <div class="input-field mdl-cell mdl-cell--3-col">
                    <select  id="ecrit_0" class="browser-default newInput" name="ecrit[0]">
                        <option value="" disabled selected>Ecriture </option>
                        <option  value="excellent"> Excellent</option>
                        <option  value="bon">Bon</option>
                        <option  value="moyen">Moyen</option>
                        <option  value="faible">Faible</option>
                    </select>
                </div>
                <div class="input-field mdl-cell mdl-cell--3-col">
                    <select  id="oral_0" class="browser-default newInput" name="oral[0]">
                        <option value="" disabled selected>Oral </option>
                        <option  value="excellent"> Excellent</option>
                        <option  value="bon">Bon</option>
                        <option  value="moyen">Moyen</option>
                        <option  value="faible">Faible</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Tableau pour afficher les différentes informations saisies dans le formulaire-->

        <div  class="mdl-cell mdl-cell--12-col " style="overflow:auto;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="langue_table">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Langue</th>
                    <th class="mdl-data-table__cell--non-numeric">Lecture</th>
                    <th class="mdl-data-table__cell--non-numeric">Ecriture</th>
                    <th class="mdl-data-table__cell--non-numeric">Oral</th>
                    <th>Editer / Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <tr id="con_ling_tr_1">
                    <td class="" id="langue_td_1"  style="text-align: left"></td>
                    <td class="" id="lecture_td_1"  style="text-align: left"></td>
                    <td class="" id="ecrit_td_1"  style="text-align: left"></td>
                    <td class="" id="oral_td_1"  style="text-align: left"></td>
                    <td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>
                        <i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>
