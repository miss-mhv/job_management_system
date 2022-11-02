<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 23/11/2017
 * Time: 15:19
 */
?>
<tbody id="cand_recente">
<?php
$reponse = liste_candidature_etat(0);
//echo $reponse->rowCount();
$i=0;
while ($donnees = $reponse->fetch())
{
    if(1)
    {
        $i += 1;
        $id_cdture = $donnees['id_cdture'];
        $nom_cd = $donnees['nom_cd'];
        $prenom_cd = $donnees['prenom_cd'];
        $etat = $donnees['lib_etat'];
        ?>
        <tr class="filterDiv ">
            <td><?php echo $id_cdture ?></td>
            <td><?php echo $nom_cd." ".$prenom_cd ?></td>
            <td><?php echo $prenom_cd ?></td>
            <td><?php echo $prenom_cd ?></td>
            <td><?php echo $prenom_cd ?></td>
            <td><?php echo utf8_encode($etat) ?></td>
            <td>
                <a href="#"><i class="material-icons mdl-color-text--cyan">done</i></a>
            </td>
            <td>
                <a href="#"><i class="material-icons mdl-color-text--red">close</i></a>
            </td>
        </tr>
        <?php
    }
}
?>
</tbody>
