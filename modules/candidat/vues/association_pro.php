<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 10/10/2017
 * Time: 14:12
 */
?>

<!-- Associations professionnelles-->

<div class=" mdl-cell mdl-cell--12-col">
    <h5 class= "mdl-cell--12-col titre-partie"> Partie 10: Associations professionnelles </h5>
    <div class="mdl-cell mdl-cell--12-col">
        <div id="asso_pro" class="mdl-cell--12-col mdl-shadow--8dp mdl-js-ripple-effect mdl-button--raised mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored " style="float: right">
            <i class="material-icons">add</i>
        </div>

        <!-- Formulaire pour la saisie des informations relatives à la rubrique -->

        <?php echo '<input id="nbChamps_asso_pro" type="hidden" name="nbChamps_asso_pro" value=1 />'; ?>
        <div id="div_asso_pro_1" class="mdl-cell mdl-cell--12-col">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="text" id="nom_asso_0" name="nom_asso[0]"/>
                <label class="mdl-textfield__label" for="nom_asso_0">Nom de l'association</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <textarea  class="mdl-textfield__input newInput" type="text" rows= "5" id="desc_asso_0" name="desc_asso[0]"></textarea>
                <label class="mdl-textfield__label" for="desc_asso_0">Brève description</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="text" id="siege_asso_0" name="siege_asso[0]"/>
                <label class="mdl-textfield__label" for="siege_asso_0">Siège de l'association</label>
            </div>
        </div>

        <!-- Tableau pour afficher les différentes informations saisies dans le formulaire-->

        <div  class="mdl-cell mdl-cell--12-col " style="overflow:auto;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="asso_pro_table">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Associations</th>
                    <th class="mdl-data-table__cell--non-numeric">Descriptions</th>
                    <th class="mdl-data-table__cell--non-numeric">Sièges</th>
                    <th>Editer / Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <tr id="asso_pro_tr_1">
                    <td class="" id="nom_asso_td_1"  style="text-align: left"></td>
                    <td class="" id="desc_asso_td_1"  style="text-align: left"></td>
                    <td class="" id="siege_asso_td_1"  style="text-align: left"></td>
                    <td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>
                        <i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

