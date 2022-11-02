<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 10/10/2017
 * Time: 14:12
 */
?>

<!-- Expériences professionnelles -->

<div class=" mdl-cell mdl-cell--12-col">
    <h5 class=" mdl-cell--12-col titre-partie">Partie 11: Participation à des études / projets </h5>
    <div class=" mdl-cell mdl-cell--12-col">

        <div id="etude_projet" class="mdl-cell mdl-cell--12-col mdl-shadow--8dp mdl-js-ripple-effect mdl-button--raised mdl-js-ripple-effect mdl-button--raised mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored " style="float: right">
            <i class="material-icons ">add</i>
        </div>

        <!-- Formulaire pour la saisie des informations relatives à la rubrique -->

        <?php echo '<input id="nbChamps_projet" type="hidden" name="nbChamps_projet" value=1 />'; ?>
        <div id="div_projet_1" class="mdl-cell mdl-cell--12-col">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="text" id="domaine_exp_0" name="domaine_exp[0]"/>
                <label class="mdl-textfield__label" for="domaine_exp_0">Domaine d'expertise</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="text" id="int_etude_0" name="int_etude[0]"/>
                <label class="mdl-textfield__label" for="int_etude_0">Intitulé de l'étude</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col" title="Responsabilité (chef d’équipe, membre d’équipe, stagiaire etc.)">
                <input class="mdl-textfield__input newInput" type="text" id="responsabilite_0" name="responsabilite[0]"/>
                <label class="mdl-textfield__label" for="responsabilite_0">Responsabilité</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="number" id="annee_pro_0" name="annee_pro[0]"/>
                <label class="mdl-textfield__label" for="annee_pro_0">Année</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input  class="mdl-textfield__input newInput" type="text" id="commanditaire_0" name="commanditaire[0]"/>
                <label class="mdl-textfield__label" for="commanditaire_0">Commanditaire</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="text" id="lieu_pro_0" name="lieu_pro[0]"/>
                <label class="mdl-textfield__label" for="lieu_pro_0">Lieu</label>
            </div>
        </div>

        <!-- tableau pour afficher les différentes informations saisies dans le formulaire-->

        <div  class="mdl-cell mdl-cell--12-col " style="overflow:auto;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="projet_table">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Domaine d'expertise</th>
                    <th class="mdl-data-table__cell--non-numeric">Initulé de l'étude</th>
                    <th class="mdl-data-table__cell--non-numeric">Responsabilité</th>
                    <th class="mdl-data-table__cell--non-numeric">Année</th>
                    <th class="mdl-data-table__cell--non-numeric">Commanditaire</th>
                    <th class="mdl-data-table__cell--non-numeric">Lieu</th>
                    <th>Editer / Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <tr id="projet_tr_1">
                    <td id="domaine_exp_td_1"  style="text-align: left"></td>
                    <td id="int_etude_td_1"  style="text-align: left"></td>
                    <td id="responsabilite_td_1"  style="text-align: left"></td>
                    <td id="annee_pro_td_1"  style="text-align: left"></td>
                    <td id="commanditaire_td_1"  style="text-align: left"></td>
                    <td id="lieu_pro_td_1"  style="text-align: left"></td>
                    <td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>
                        <i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>

