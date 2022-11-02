

<?php

if (!empty($erreurs_connexion)) {

    echo '<ul>'."\n";

    foreach($erreurs_connexion as $e) {

        echo '	<li class="mdl-color-text--red">'.$e.'</li>'."\n";
    }

    echo '</ul>';
}
?>
<style>
    .mdl-progress>.progressbar
    {
        background-color: #81c784;
    }
</style>
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--3-col">
    </div>
    <div class="center mdl-shadow--8dp mdl-cell mdl-cell--6-col">
        <!-- MDL Progress Bar with Buffering -->
        <div id="p3" class="mdl-progress mdl-js-progress progress-demo mdl-color-text--green-300"></div>
        <script>
            document.querySelector('#p3').addEventListener('mdl-componentupgraded', function() {
                this.MaterialProgress.setProgress(33);
                this.MaterialProgress.setBuffer(87);
            });
        </script>
        <div class="">
            <h5 class="titre-partie">Connexion ...</h5>
            <i class="material-icons mdl-color-text--green-300" style = "font-size: 80px;">account_circle</i>
        </div>
        <form method="post" action="<?php //echo CHEMIN_CONTROLEUR.'connexion.php'?>">
            <div id="" class="mdl-cell mdl-cell--12-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                    <input class="mdl-textfield__input newInput " type="text" id="pseudo" name="pseudo"/>
                    <label class="mdl-textfield__label" for="pseudo">Pseudonyme *</label>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--12-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">
                    <input class="mdl-textfield__input newInput" type="password" id="pass" name="pass" />
                    <label class="mdl-textfield__label" for="pass">Mot de passe *</label>
                </div>
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Se connecter</button>
            </div>
        </form>
    </div>
</div>