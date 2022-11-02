<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 13/09/2017
 * Time: 14:16
 */
?>
<!-- Expériences professionnelles -->

<div class=" mdl-cell mdl-cell--12-col">
    <h5 class=" mdl-cell--12-col titre-partie">Partie 4: Expériences professionnelles </h5>
    <div class=" mdl-cell mdl-cell--12-col">

        <div><h5>Occupation actuelle</h5></div>


        <script>

           $(document).ready(function(){
               $("#org_actu").hide();
               $("#exp_ant").click(function(){
                   $("#org_actu").toggle();

                  /* var elmt = document.getElementById(org_actu);
                   if(elmt.style.display == "none")
                   {
                       alert(54464);
                   }*/

               });


           });
        </script>

        <div class="switch mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">Appartenez-vous à un Organisme professionnel?</div>
            <div class="mdl-cell mdl-cell--4-col">
                <label>
                    Non
                    <input type="checkbox" class="mdl-switch__input" id = "exp_ant" name="exp_ant" >
                    <span class="lever"></span>
                    Oui
                </label>
            </div>

        </div>
        <div id="org_actu">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                <input class="mdl-textfield__input newInput" type="text" id="org_pro" name="org_pro"  />
                <label class="mdl-textfield__label" for="org_pro">Nom de l'organisme </label>
                <span class="mdl-textfield__error">Veillez saisir ce champ</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                <input class="mdl-textfield__input newInput" type="text" id="fonct_actu" name="fonct_actu" />
                <label class="mdl-textfield__label" for="fonct_actu">Fonction actuelle</label>
                <span class="mdl-textfield__error">Veillez saisir ce champ</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                <input class="mdl-textfield__input newInput" type="number" id="nb_an_entr" name="nb_an_entr"  />
                <label class="mdl-textfield__label" for="nb_an_entr">Nombre d’années dans l’entreprise</label>
                <span class="mdl-textfield__error">Veillez saisir ce champ</span>
            </div>
        </div>



        <div><h5>Expériences antérieurs</h5></div>

        <div id="ex_pro" class="mdl-cell mdl-cell--12-col mdl-shadow--8dp mdl-js-ripple-effect mdl-button--raised mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored " style="float: right">
            <i class="material-icons">add</i>
        </div>

        <!-- Formulaire pour la saisie des informations relatives à la rubrique -->

        <?php echo '<input id="nbChamps_ex_pro" type="hidden" name="nbChamps_ex_pro" value=1 />'; ?>
        <div id="div_ex_pro_1" class="mdl-cell mdl-cell--12-col">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--5-col">
                <input class="mdl-textfield__input newInput" type="date" id="debut_exp_0" name="debut_exp[0]"/>
                <label class="mdl-textfield__label" for="debut_exp[0]">Debut</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--5-col">
                <input class="mdl-textfield__input newInput" type="date" id="fin_exp_0" name="fin_exp[0]"/>
                <label class="mdl-textfield__label" for="fin_exp[0]">Fin</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--5-col">
                <input class="mdl-textfield__input newInput" type="text" id="lieu_0" name="lieu[0]"/>
                <label class="mdl-textfield__label" for="lieu[0]">Lieu</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--5-col">
                <input class="mdl-textfield__input newInput" type="text" id="societe_0" name="societe[0]"/>
                <label class="mdl-textfield__label" for="societe[0]">Sociéte</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input  class="mdl-textfield__input newInput" type="text" id="ref_personne_0" name="ref_personne[0]"/>
                <label class="mdl-textfield__label" for="ref_personne[0]">Personne de référence</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="number" id="contact_0" name="contact[0]"/>
                <label class="mdl-textfield__label" for="contact[0]">Contact</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="text" id="fonction_0" name="fonction[0]"/>
                <label class="mdl-textfield__label" for="fonction[0]">Fonction</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">
                <input class="mdl-textfield__input newInput" type="text" id="description_0" name="description[0]"/>
                <label class="mdl-textfield__label" for="description[0]">Description</label>
            </div>
        </div>

        <!-- tableau pour afficher les différentes informations saisies dans le formulaire-->

        <div  class="mdl-cell mdl-cell--12-col " style="overflow:auto;">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="exp_pro_table">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Début</th>
                    <th class="mdl-data-table__cell--non-numeric">Fin</th>
                    <th class="mdl-data-table__cell--non-numeric">Lieu</th>
                    <th class="mdl-data-table__cell--non-numeric">Société</th>
                    <th class="mdl-data-table__cell--non-numeric">Référence</th>
                    <th class="mdl-data-table__cell--non-numeric">Contact</th>
                    <th class="mdl-data-table__cell--non-numeric">Foncion</th>
                    <th class="mdl-data-table__cell--non-numeric">Description</th>
                    <th>Editer / Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <tr id="exp_pro_tr_1">
                    <td id="debut_td_1"  style="text-align: left"></td>
                    <td id="fin_td_1"  style="text-align: left"></td>
                    <td id="lieu_td_1"  style="text-align: left"></td>
                    <td id="societe_td_1"  style="text-align: left"></td>
                    <td id="ref_td_1"  style="text-align: left"></td>
                    <td id="contact_td_1"  style="text-align: left"></td>
                    <td id=fonction_td_1"  style="text-align: left"></td>
                    <td id="desc_td_1"  style="text-align: left"></td>
                    <td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>
                        <i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
</div>
