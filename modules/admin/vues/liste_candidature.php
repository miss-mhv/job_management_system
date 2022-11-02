<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 23/11/2017
 * Time: 16:04
 */
?>
<tbody id="cand">
<?php
$reponse = liste_candidature();
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
            <td><?php echo utf8_encode($nom_cd)." ".utf8_encode($prenom_cd) ?></td>
            <td><?php echo $prenom_cd ?></td>
            <td><?php echo $prenom_cd ?></td>
            <td><?php echo $prenom_cd ?></td>
            <td><?php echo utf8_encode($etat) ;?></td>
            <form  action="#" method="post" >
                <input name = "id_cand" type="hidden" id="id_cand<?php echo $id_cdture ?>" value="<?php echo $id_cdture ?>" size="27">
                <input name = "etat"  type="hidden" id="etat<?php echo $id_cdture ?>" value="5" size="27">
            </form>

            <td>
                <a href="#"><i class="material-icons mdl-color-text--cyan">done</i></a>
            </td>
            <td>
                <a id = "rejeter<?php echo $id_cdture ?>" class = "supprimer_cand" href="#"><i class="material-icons mdl-color-text--red">close</i></a>
            </td>
        </tr>
        <?php
    }
}
?>
</tbody>

<script>
    $('#rejeter2').click(function(){
        var reponse = window.confirm("Votre choix?");
        if(reponse)
        {
            //alert($('#id_cand2').val());
            var nom = $('#id_cand2').val();
            var message = $('#etat2').val();
            $.post('test.php', {'id_cand':nom, 'etat': message }, function() {
                alert ("ok");
            });
        }
        else
        {
            alert("Non");
        }
    })
</script>