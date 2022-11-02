<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 29/08/2017
 * Time: 10:26
 */
?>
<style>
    .collapsible-body p {
        margin: 0;
        padding: 0.5rem;
    }
    .mdl-textfield
    {
        padding: 5px 0px 5px 0px;
    }
    .mdl-textfield__label
    {
        bottom: 0;
        position: absolute;
        top: 13px;
    }
    .mdl-textfield--floating-label.is-focused .mdl-textfield__label,.mdl-textfield--floating-label.is-dirty .mdl-textfield__label,.mdl-textfield--floating-label.has-placeholder .mdl-textfield__label
    {
        color:#3f51b5;
        font-size:12px;
        top:-10px;
        visibility:visible
    }
    @media (min-width: 840px)
        .mdl-cell {
            margin: 5px;
        }

        .mdl-textfield__label:after
        {
            bottom: 5px;
        }
        .mdl-tabs__tab-bar
        {
            background-color: #9ed65e;
        }

        .tab-a
        {
            border-radius: 150px;
            background: white;
        }
        .mdl-button--fab.mdl-button--colored {
            background: #9ed65e;
            color: #3f51b5;
        }
        .mdl-button--fab.mdl-button--colored:hover {
            background: #3f51b5;
            color: #9ed65e;
        }

</style>
<form  method="post" action="<?php // echo CHEMIN_CONTROLEUR.'inscription.php'?>">
    <div id="form_ue" class="cacher_form">

        <?php
        if(isset($_GET['type']))
        {
            /*
             * s'il s'agit d'une candidure suite à une offre alors....
             */
            $id_offre = $_GET['offre'];
            $type_offre = $_GET['type'];
            $poste = $_GET['poste'];
            ?>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <h5>Votre candidature pour l'offre N°...</h5>
                    <h6><b>Type: </b><em><?php echo $type_offre;?></em> </h6>
                    <h6><b>Poste: </b> <em><?php echo $poste;?></em></h6>
                    <p><em>Veuillez compléter vos informations en remplissant le formulaire ci-dessous!</em></p>
                </div>
                <input id="id_offre" type="hidden" name="id_offre" value=<?php echo $id_offre;?> />
            </div>
            <?php
        }
        else
        {
            /*
             * sinon s'il s'agit d'une candidature spontannée, alors...
             */
            ?>
            <div class="input-field col s12">
                <select  id="choix_type_offre" class="browser-default" name="choix_type_offre">
                    <option value="" disabled selected>Choissez votre type d'offre</option>
                    <option  value="1"> Stage académique</option>
                    <option  value="2"> Stage professionnel</option>
                    <option  value="3">Stage pré emploi</option>
                    <option  value="5">Offre d'emploi</option>
                </select>
            </div>
            <?php
        }
        ?>

        <div class="mdl-grid">
            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                <!-- Tab Bars -->
                <div class="mdl-tabs__tab-bar" >
                    <a href="#etat-civil-panel" class="mdl-tabs__tab is-active tab-a">1</a>
                    <a href="#educ-panel" class="mdl-tabs__tab tab-a">2</a>
                    <a href="#con-ling-panel" class="mdl-tabs__tab tab-a">3</a>
                    <a href="#exp-pro-panel" class="mdl-tabs__tab tab-a">4</a>
                    <a href="#comp-panel" class="mdl-tabs__tab tab-a">5</a>
                    <a href="#qualif-panel" class="mdl-tabs__tab tab-a">6</a>
                    <a href="#exp-reg-panel" class="mdl-tabs__tab tab-a">7</a>
                    <a href="#autre-info-panel" class="mdl-tabs__tab tab-a">8</a>
                    <a href="#con-info-panel" class="mdl-tabs__tab tab-a">9</a>
                    <a href="#asso-pro-panel" class="mdl-tabs__tab tab-a">10</a>
                    <a href="#emploi-panel" class="mdl-tabs__tab tab-a">11</a>
                </div>

                <!-- Etat civil tab panels, is-active to denote currently active -->
                <div class="mdl-tabs__panel is-active mdl-cell mdl-cell--12-col" id="etat-civil-panel">
                    <h5 class="mdl-cell--12-col titre-partie">Partie 1: Informations personnelles </h5>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col">
                            <h6>Etat civil</h6>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell mdl-cell--12-col">
                                <input class="mdl-textfield__input" type="text" id="nom" name="nom" />
                                <label class="mdl-textfield__label" for="nom">Nom(s)</label>
                                <span class="mdl-textfield__error">Veuillez saisir ce champ</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell mdl-cell--12-col">
                                <input class="mdl-textfield__input" type="text" id="prenom" name="prenom" />
                                <label class="mdl-textfield__label" for="prenom">Prénom(s)</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--6-col">
                                <input class="mdl-textfield__input" type="date" id="naissance" name="date_naiss" />
                                <label class="mdl-textfield__label" for="naissance">Date de naissance</label>
                                <span class="mdl-textfield__error">Veuillez saisir ce champ</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                                <input class="mdl-textfield__input" type="text" id="nationalite" name="nationalite" />
                                <label class="mdl-textfield__label" for="nationalite">Nationalité</label>
                                <span class="mdl-textfield__error">Veuillez saisir ce champ</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                                <input class="mdl-textfield__input" type="text" id="etat_civil" name="etat_civil" />
                                <label class="mdl-textfield__label" for="etat_civil">Etat civil</label>
                                <span class="mdl-textfield__error">Veuillez saisir ce champ</span>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--6-col">
                            <h6>Contacts</h6>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                                <input class="mdl-textfield__input " type="email" id="email" name ="email" />
                                <label class="mdl-textfield__label" for="email">Adresse email</label>
                                <span class="mdl-textfield__error">Adresse email incorrect</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell mdl-cell--12-col">
                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telephone" name="telephone" />
                                <label class="mdl-textfield__label" for="telephone">N° téléphone</label>
                                <span class="mdl-textfield__error">Veuillez saisir uniquement les chiffres</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell mdl-cell--12-col">
                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telephone_fixe" name="telephone_fixe" />
                                <label class="mdl-textfield__label" for="telephone_fixe">N° téléphone fixe</label>
                                <span class="mdl-textfield__error">Veuillez saisir uniquement les chiffres</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                                <input class="mdl-textfield__input " type="quartier" id="quartier" name ="quartier" />
                                <label class="mdl-textfield__label" for="quartier">Quartier</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                                <input class="mdl-textfield__input " type="bp" id="bp" name ="bp" />
                                <label class="mdl-textfield__label" for="bp">Boîte postale</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Etat civil Tab panel 2 -->
                <div class="mdl-tabs__panel" id="educ-panel">
                    <?php include_once 'education.php';?>
                </div>

                <!-- Connaissance linguistique Tab panel 3 -->
                <div class="mdl-tabs__panel" id="con-ling-panel">
                    <?php include_once 'connaissance_linguistique.php';?>
                </div>

                <!-- Expérience professionnelle Tab panel 4 -->
                <div class="mdl-tabs__panel" id="exp-pro-panel">
                    <?php include_once 'experience_pro.php';?>
                </div>

                <!-- Compétences Tab panel 5 -->
                <div class="mdl-tabs__panel" id="comp-panel">
                    <?php include_once 'autre_competence.php';?>
                </div>

                <!-- Qualfications Tab panel 6 -->
                <div class="mdl-tabs__panel" id="qualif-panel">
                    <?php include_once 'qualification.php';?>
                </div>

                <!-- Expérience région Tab panel 7 -->
                <div class="mdl-tabs__panel" id="exp-reg-panel">
                    <?php include_once 'experience_region.php';?>
                </div>

                <!-- Autres info Tab panel 8 -->
                <div class="mdl-tabs__panel" id="autre-info-panel">
                    <?php include_once 'autre_info.php';?>
                </div>

                <!-- Connaissances informatiques  Tab panel 8 -->
                <div class="mdl-tabs__panel" id="con-info-panel">
                    <?php include_once 'connaissance_informatique.php';?>
                </div>

                <!-- Associations professionnelles Tab panel 8 -->
                <div class="mdl-tabs__panel" id="asso-pro-panel">
                    <?php include_once 'association_pro.php';?>
                </div>

                <!-- Emplois permanents Tab panel 8 -->
                <div class="mdl-tabs__panel" id="emploi-panel">
                    <?php include_once 'etude_projet.php';?>
                </div>

            </div>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col"></div>
            <div class="mdl-cell mdl-cell--12-col"></div>
            <div class="mdl-cell mdl-cell--12-col"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect"   type="submit" name="valider">
                    Envoyer
                </button>
            </div>
        </div>
    </div>
</form>

<script>
   // $('a').css('color', 'blue');

   // $('div').children('.mdl-tabs__tab' ).hide();
   //$('.is-active').show();
   $('.is-active').next().show();
</script>
<script src="libs/js/form_inscription.js"></script>