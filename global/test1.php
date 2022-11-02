<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 14/11/2017
 * Time: 10:36
 */
//include '3-tinyMCE-avanced-fr/index.html';
?>

<form id="form1" method="post" action="insert.php">
    <div>
        <label>
            Ins&eacute;rez votre commentaire<br />
            <textarea name="ajoter_offre" id="ajoter_offre" cols="45" rows="5"></textarea>
        </label>
        <br />
        <input name="Submit" type="submit" Value="envoyer" /></div>
</form>
<script>
    document.addEventListener('mdl-componentupgraded', function(e){
        //In case other element are upgraded before the layout
        if (typeof e.target.MaterialLayout !== 'undefined') {
            tinymce.init({
                selector:'#ajoter_offre',
                branding: false,
                plugins : "contextmenu,autolink,lists,pagebreak,save,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,template,wordcount,advlist,autosave,visualblocks",

                toolbar = 'bold,italic,strikethrough,bullist,numlist,blockquote,hr,alignleft,aligncenter,alignright,link,unlink,wp_more,spellchecker,wp_fullscreen,wp_adv ',
            });
        }
    });
</script>