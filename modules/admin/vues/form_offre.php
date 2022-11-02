<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 08/11/2017
 * Time: 13:08
 */
?>
<div class="mdl-grid ">
    <div class="mdl-cell mdl-cell--1-col"></div>
    <div class="mdl-cell mdl-cell--10-col">
        <h5>Ajouter une offre</h5>
    </div>
    <div class="mdl-cell mdl-cell--1-col"></div>
    <div class="mdl-cell mdl-cell--1-col"></div>
    <div class="mdl-cell mdl-cell--10-col mdl-color--white">
        <?php include 'content_form.php'; ?>
    </div>
</div>
    <div class="mdl-grid ">

    </div>
<?php

if(utilisateur_est_connecte())
{
    if(!empty($_POST['contenu_offre']) && !empty($_POST['ctype_offre']) || !empty($_POST['poste']) || !empty($_POST['projet']) && !empty($_POST['date_exp']) )
    {
        $admin = $_SESSION['id'];
        $contenu_offre = $_POST['contenu_offre'];
        $type_offre = $_POST['ctype_offre'];
        $date_exp = $_POST['date_exp'];
        $poste = $_POST['poste'];
        $projet = $_POST['projet'];

        if(!empty($_POST['publie_offre']))
        {
            $offre = ajouter_offre($admin,$type_offre,1,$poste,$contenu_offre,$projet,$date_exp);
        }
        else
        {
            $offre = ajouter_offre($admin,$type_offre,2,$poste,$contenu_offre,$projet,$date_exp);
        }
        echo $offre;

    }
}
?>