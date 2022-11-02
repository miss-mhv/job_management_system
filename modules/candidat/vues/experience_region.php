<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 13/09/2017
 * Time: 14:15
 */
?>

<!-- Expérences particulières dans la région -->

<div class=" mdl-cell mdl-cell--12-col">
    <h5 class=" mdl-cell--12-col titre-partie">Partie 7: Expérences particulières dans la région </h5>
    <div class="mdl-cell mdl-cell--12-col">
        <div id="exp_reg" class="mdl-cell--12-col mdl-shadow--8dp mdl-js-ripple-effect mdl-button--raised mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored " style="float: right">
            <i class="material-icons">add</i>
        </div>

        <!-- Formulaire pour la saisie des informations relatives à la rubrique -->

        <?php echo '<input id="nbChamps_exp_reg" type="hidden" name="nbChamps_exp_reg" value=1 />'; ?>
        <div id="div_exp">
            <div id="div_exp_reg_1" class="mdl-cell mdl-cell--12-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col">
                    <input class="mdl-textfield__input newInput" type="text" id="pays_0" name="pays[0]"/>
                    <label class="mdl-textfield__label" for="pays_0">Pays 1</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--3-col">
                    <input class="mdl-textfield__input newInput" type="date" id="date_debut_0" name="date_debut[0]"/>
                    <label class="mdl-textfield__label" for="date_debut_0">Date de debut </label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--3-col">
                    <input class="mdl-textfield__input newInput" type="date" id="date_fin_0" name="date_fin[0]"/>
                    <label class="mdl-textfield__label" for="date_fin_0">Date de fin</label>
                </div>
            </div>
        </div>

        <!-- Tableau pour afficher les différentes informations saisies dans le formulaire-->

        <div  class="mdl-cell mdl-cell--12-col " style="overflow:auto;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="exp_reg_table">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Pays</th>
                    <th class="mdl-data-table__cell--non-numeric">Début</th>
                    <th class="mdl-data-table__cell--non-numeric">Fin</th>
                    <th>Editer / Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <tr id="exp_reg_tr_1">
                    <td class=" " id="td_pays_1" style="text-align: left" ></td>
                    <td class=" " id="td_date_debut_1" style="text-align: left"></td>
                    <td class=" " id="td_date_fin_1" style="text-align: left"></td>
                    <td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>
                        <i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>
