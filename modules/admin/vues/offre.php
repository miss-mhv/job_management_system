<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 23/10/2017
 * Time: 10:54
 */
//require_once "modeles/fonction.php";
//require_once "modeles/offre.php";
?>
<style>
    .mdl-data-table td,.mdl-data-table th  {
        text-align: left;
    }
</style>

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--1-col"></div>
    <div class="mdl-cell mdl-cell--10-col center-align">
        <h4>Liste des offres d'emplois disponibles (<?php echo afficher_offre(1)->rowCount();?>)</h4>
        <a href="index.php?module=admin&amp;action=vues/form_offre">
            <div id="" class="mdl-shadow--8dp mdl-js-ripple-effect mdl-button--raised mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored " title ="Ajouter une offre" style="float: right">
                <i class="material-icons">add</i>
            </div>
        </a>
    </div>
</div>
<div class="mdl-grid">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--3-col">
        <input class="mdl-textfield__input newInput rechercher" type="text" id="rechercher_cand" name="rechercher_cand"/>
        <label class="mdl-textfield__label" for="rechercher_cand" style=" font-size: 12px;">Entrer le texte à rechercher
            <label class="mdl-button mdl-js-button mdl-button--icon mon_icon" id="" for="rechercher_cand">
                <i class="material-icons">search</i>
            </label>
        </label>
    </div>
    <div class="input-field mdl-cell mdl-cell--3-col  ">
        <select  id="" class="browser-default newInput" name="">
            <option value="" disabled selected>Type d'offre </option>
            <option  value=""> Stage professionnel</option>
            <option  value="">Stage académique</option>
            <option  value="">Stage préemploi</option>
            <option  value="">Consultant externe</option>
            <option  value="">Offre d'emploi</option>
        </select>
    </div>
    <div class="input-field mdl-cell mdl-cell--3-col">
        <select  id="" class="browser-default newInput" name="">
            <option value="" disabled selected>Secteur</option>
            <option  value=""> Agriculture</option>
            <option  value=""> Climat</option>
            <option  value=""> Mine</option>
            <option  value=""> Animaux</option>
            <option  value=""> Autres</option>
        </select>
    </div>
    <div class="input-field mdl-cell mdl-cell--3-col ">
        <select  id="" class="browser-default newInput" name="">
            <option value="" disabled selected>Etat</option>
            <option  value=""> En cours</option>
            <option  value="">Expirées</option>
            <option  value="">Archivées</option>
        </select>
    </div>
    <div  class="mdl-cell mdl-cell--12-col " style="overflow:auto;">
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp filtre_tableau " id="table_liste_offre">
            <thead>
            <tr>
                <th onclick="sortTable(1,'table_liste_offre')">N°</th>
                <th onclick="sortTable(2,'table_liste_offre')">Type</th>
                <th onclick="sortTable(3,'table_liste_offre')">Poste</th>
                <th>Libellé</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $reponse = afficher_offre(1);
            $i=0;
            while ($donnees = $reponse->fetch())
            {
                if(1)
                {
                    $i += 1;
                    $type = $donnees['libelle'];
                    $poste = $donnees['poste'];
                    $contenu = $donnees['contenu'];
                    $date_pub = $donnees['date_publication'];
                    $date_exp = $donnees['date_expiration'];
                    $id_offre = $donnees['id_offre'];
                    ?>
                    <tr >
                        <td><?php echo $id_offre ?></td>
                        <td><?php echo utf8_encode($type); ?></td>
                        <td><?php echo $poste ; ?></td>
                        <td><?php echo texte_resume_html($contenu, 50) ?></td>
                        <td><a href="#"><i class="material-icons mdl-color-text--red-100">edit</i></a></td>
                        <td class="close"><a href="#"><i class="material-icons mdl-color-text--cyan">close</i></a></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<script>

    // Click on a close button to hide the current list item
    var close = document.getElementsByClassName("close");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
            alert("Voulez-vous vraiment supprimer?")
            var div = this.parentElement;
            div.style.display = "none";
        }
    }
</script>
