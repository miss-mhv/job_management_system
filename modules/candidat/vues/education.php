<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 13/09/2017
 * Time: 14:05
 */
?>

<!-- Education -->

<div class=" mdl-cell mdl-cell--12-col">
    <h5 class=" mdl-cell--12-col titre-partie">Partie 2: Education </h5>
    <div class=" mdl-cell mdl-cell--12-col">
        <div id="plus_educ" class="mdl-cell--12-col mdl-shadow--8dp mdl-js-ripple-effect mdl-button--raised mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored " style="float: right">
            <i class="material-icons">add</i>
        </div>

        <!-- Formulaire pour la saisie des informations relatives à la rubrique -->

        <?php echo '<input id="nbChamps_educ" type="hidden" name="nbChamps_educ" value=1 />'; ?>
        <div id="div_educ_1" class="mdl-cell mdl-cell--12-col">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="text" id="etablissement_0" name="etablissement[0]"/>
                <label class="mdl-textfield__label" for="etablissement_0">Etablissemnt</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="text" id="diplome_0" name="diplome[0]"/>
                <label class="mdl-textfield__label" for="diplome_0">Diplôme</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="date" id="annee_0" name="annee[0]"/>
                <label class="mdl-textfield__label" for="annee_0">Année</label>
            </div>
        </div>

        <!-- Tableau pour afficher les différentes informations saisies dans le formulaire-->

        <div  class="mdl-cell mdl-cell--12-col " style="overflow:auto;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="educ_table">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Etablissement</th>
                    <th class="mdl-data-table__cell--non-numeric">Diplôme</th>
                    <th class="mdl-data-table__cell--non-numeric">Année</th>
                    <th>Editer / Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <tr id="educ_tr_1">
                    <td class="" id="etab_td_1"  style="text-align: left"></td>
                    <td class="" id="dip_td_1"  style="text-align: left"></td>
                    <td class="" id="an_td_1"  style="text-align: left"></td>
                    <td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>
                        <i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
