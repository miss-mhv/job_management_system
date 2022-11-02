<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 28/09/2017
 * Time: 16:32
 */

// require_once "modeles/offre.php";
?>
<?php
if(isset($_GET['offre']) && $_GET['offre'] == 'emploi')
{
    ?>
    <div class="mdl-grid">
        <h4>Liste des offres d'emplois disponibles</h4>
        <?php
        $reponse = afficher_offre(1);
        $i=0;
        while ($donnees = $reponse->fetch())
        {
            if($donnees['id_type_offre']==4 && $donnees['id_type_offre']!=1 && $donnees['id_type_offre']!=2 && $donnees['id_type_offre']!=3)
            {
                $i += 1;
                $id_offre = $donnees['id_offre'];
                $type = $donnees['libelle']; // affiche le libellé du type de l'offre (stage pro, emploi....)
                $poste = $donnees['poste'];
                $contenu = $donnees['contenu'];
                $date_pub = $donnees['date_publication'];
                $date_exp = $donnees['date_expiration'];
                ?>
                <div class="mdl-cell mdl-cell--10-col">
                    <h6><b>Type: </b><em><?php echo utf8_encode($type);?></em> </h6>
                    <h6><b>Poste: </b> <em><?php echo utf8_encode($poste);?></em></h6>
                    <h6><b>Date de publication: </b> <em><?php echo $date_pub;?></em></h6>
                    <h6><b>Date d'expiration: </b> <em><?php echo $date_exp;?></em></h6>
                    <!--<div class="mdl-tooltip" for="foldable_toggle<?php echo $i ?>">
                        Cliquez pour déplier et voir plus de détails
                    </div>-->
                    <h6 id="foldable_toggle<?php echo $i ?>" class="foldable_toggle">
                        <b>Description: </b><i class="material-icons">add</i>
                    </h6>
                    <div class="foldable">
                        <p><?php echo utf8_encode($contenu);?></p>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--2-col" style="margin-top: 80px">
                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised offre-button" href="index.php?module=candidat&amp;action=inscription&amp;offre=<?php echo $id_offre;?>&amp;type=<?php echo $type;?>&amp;poste=<?php echo $poste;?>" type="button">Postuler</a>
                </div>
                <hr>
            <?php
            }
        }
        ?>
    </div>
<?php
}
elseif(isset($_GET['offre']) && $_GET['offre'] == 'stage')
{
    ?>
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col center"><h4>Liste des offres de stage disponibles</h4></div>
        <?php
        $reponse = afficher_offre(1);
        $i=0;
        while ($donnees = $reponse->fetch())
        {
            if($donnees['id_type_offre']!=4 && ($donnees['id_type_offre']==1 || $donnees['id_type_offre']==2 || $donnees['id_type_offre']==3))
            {
                $i += 1;
                $id_offre = $donnees['id_offre'];
                $type = $donnees['libelle']; // affiche le libellé du type de l'offre (stage pro, emploi....)
                $poste = $donnees['poste'];
                $contenu = $donnees['contenu'];
                $date_pub = $donnees['date_publication'];
                $date_exp = $donnees['date_expiration'];
                ?>
                <div class="mdl-cell mdl-cell--10-col">
                    <h6><b>Type: </b><em><?php echo utf8_encode($type);?></em> </h6>
                    <h6><b>Poste: </b> <em><?php echo utf8_encode($poste);?></em></h6>
                    <h6><b>Date de publication: </b> <em><?php echo $date_pub;?></em></h6>
                    <h6><b>Date d'expiration: </b> <em><?php echo $date_exp;?></em></h6>
                    <!--<div class="mdl-tooltip" for="foldable_toggle<?php echo $i ?>">
                        Cliquez pour déplier et voir plus de détails
                    </div>-->
                    <h6 id="foldable_toggle<?php echo $i ?>" class="foldable_toggle">
                        <b>Description: </b><i class="material-icons">add</i>
                    </h6>
                    <div class="foldable">
                        <p><?php echo utf8_encode($contenu);?></p>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--2-col" style="margin-top: 80px">
                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised offre-button" href="index.php?module=candidat&amp;action=inscription&amp;offre=<?php echo $id_offre;?>&amp;type=<?php echo $type;?>&amp;poste=<?php echo $poste;?>" type="button">Postuler</a>
                </div>
                <hr>
                <?php
            }
        }
        ?>
    </div>
    <?php
}
?>
<script>
    /*
     ceci ce sont les scripts qui permettent de gérer la fonctionnalité (foldable) plier/déplier afin que le formulaire ne paraîssent pas trop long
     */

    $('.foldable').hide();

    $('.foldable_toggle').each(function() {
        $(this).append('<span class="toggle">&nbsp;</span>');
        $(this).wrapInner('<a href="#"></a>');
    });

    $('.foldable_toggle a').click(function() {
        icon =$(this).children('i').text();
        // alert(icon);

        //$(this).parent().next('.foldable').toggle('slow');
        $(this).parent().next('.foldable').slideToggle('slow');
        $(this).toggleClass('unfolded');

        // jeu de changement de l'icon pour la fonctionnalité foldable

        if(icon == "add")
            $(this).children('i').text('remove');
        else if(icon == "remove")
            $(this).children('i').text('add');

        return false;
    });
</script>

