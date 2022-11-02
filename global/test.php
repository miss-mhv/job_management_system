<input type="text" id="ref">
<button id="action">Afficher</button><br />
<div id="r">Entrez un nombre compris entre 1 et 10 pour afficher
    un proverbe chinois</div>
<script src="jquery.js"></script>
<script>
    $(function() {
        $('#action').click(function() {
            $('#r').html('<img src="http://www.mediaforma.com/sdz/jquery/ajax-loader.gif">');
            var param = 'l=' + $('#ref').val();

            $('#r').load('http://localhost/jmnjob/index.php?module=candidat&action=vues/formulaire');
        });
    });
</script>