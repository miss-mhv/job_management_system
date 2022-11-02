<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 14/11/2017
 * Time: 10:36
 */
?>
<form id="form1" method="post" action="<?php // echo CHEMIN_CONTROLEUR.'ajouter_offre.php'?>"  style="margin: 30px" >
    <div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
            <select  id="type_offre" class="browser-default" name="ctype_offre">
                <option value="" disabled selected>Choissez le type de l'offre</option>
                <option  value="1"> Stage académique</option>
                <option  value="2"> Stage professionnel</option>
                <option  value="3">Stage pré emploi</option>
                <option  value="5">Offre d'emploi</option>
            </select>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
            <input class="mdl-textfield__input newInput" type="date" id="date_exp" name="date_exp"/>
            <label class="mdl-textfield__label" for="date_exp">Date d'expiration</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
            <input class="mdl-textfield__input newInput" type="text" id="poste" name="poste"/>
            <label class="mdl-textfield__label" for="poste">Poste</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
            <input class="mdl-textfield__input newInput" type="text" id="poste" name="projet"/>
            <label class="mdl-textfield__label" for="poste">Projet</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="publie_offre">
                <span class="mdl-checkbox__label">Publier en ligne</span>
                <input type="checkbox" name="publie_offre" value="1" id="publie_offre" class="mdl-checkbox__input" checked />
            </label>
        </div>
        <br>
        <br>
        <br>
    </div>
    <div>
        <label>
            <textarea name="contenu_offre" id="contenu_offre" cols="45" rows="5"></textarea>
        </label>
        <br>
        <br>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect"   type="submit" name="valider">
            Envoyer
        </button>
    </div>
</form>
<script>
    document.addEventListener('mdl-componentupgraded', function(e){
        //In case other element are upgraded before the layout
        if (typeof e.target.MaterialLayout !== 'undefined') {
            tinymce.init({
                selector:'#contenu_offre',
                branding: false,
                plugins : "image,autolink,link,importcss,textcolor,hr,lists,pagebreak,table,save,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,template,wordcount,advlist,autosave,visualblocks",
                height: 500,
            });
        }
    });
</script>