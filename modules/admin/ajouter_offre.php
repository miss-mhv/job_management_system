<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 16/11/2017
 * Time: 11:17
 */
require_once"../../modeles/offre.php";
echo $_SESSION['id'];
if(utilisateur_est_connecte())
{
    if(!empty($_POST['publie_offre']) && !empty($_POST['contenu_offre']) && !empty($_POST['ctype_offre']) && !empty($_POST['date_exp']) )
    {
        $etat_offre = $_POST['publie_offre'];
        $contenu_offre = $_POST['contenu_offre'];
        $type_offre = $_POST['ctype_offre'];
        $date_exp = $_POST['date_exp'];
        // $offre = ajouter_offre(135,4,1,'programmeur',$_POST['ajouter_offre'],'Investissement humain','2017-10-02','2017-10-02');

        echo $etat_offre." ".$contenu_offre." ".$type_offre." ".$date_exp;
        //echo $offre;

    }
}


?>
