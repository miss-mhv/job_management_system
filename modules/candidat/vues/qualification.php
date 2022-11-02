<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 13/09/2017
 * Time: 14:14
 */
?>

<!-- Qualifications principales -->

<div class=" mdl-cell mdl-cell--12-col">
    <h5 class=" mdl-cell--12-col titre-partie">Partie 6: Qualifications principales </h5>
    <div class=" mdl-cell mdl-cell--12-col">
        <div id="qualif" class="mdl-cell--12-col  mdl-shadow--8dp mdl-js-ripple-effect mdl-button--raised mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored " style="float: right">
            <i class="material-icons">add</i>
        </div>

        <!-- Formulaire pour la saisie des informations relatives à la rubrique -->

        <?php echo '<input id="nbChamps_qualif" type="hidden" name="nbChamps_qualif" value=1 />'; ?>
        <div id="div_qualif_1" class="mdl-cell mdl-cell--12-col">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="text" id="qualif_0" name="qualif[0]"/>
                <label class="mdl-textfield__label" for="qualif[0]">Saisir une qualification</label>
            </div>
        </div>

        <!-- Tableau pour afficher les différentes informations saisies dans le formulaire-->

        <div  class="mdl-cell mdl-cell--12-col " style="overflow:auto;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="qualif_table">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Qualifications</th>
                    <th>Editer / Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <tr id="qualif_tr_1">
                    <td class="" id="qualif_td_1"  style="text-align: left"></td>
                    <td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>
                        <i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>
