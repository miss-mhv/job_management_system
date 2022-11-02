/**
 * Created by Miss Mhv on 27/11/2017.
 */

    /* on cache d'abord tous les collapsible qui vont mettre de visualiser les différentes inforamtions sur les rubriques education, autres
     compétences connaissances linguistiques, expériences professionnelles, expérinces dans les régions, qualification
     */
$('#educ_table').hide();
$('#autre_info_table').hide();
$('#langue_table').hide();
$('#comp_table').hide();
$('#exp_reg_table').hide();
$('#exp_pro_table').hide();
$('#qualif_table').hide();
$('#info_table').hide();
$('#con_info_table').hide();
$('#asso_pro_table').hide();
$('#projet_table').hide();

/*
 On affiche un formulaire selon le choix de l'internaute, et on cache les autres formulaires
 */
$(function() {
    $('.cacher_form').hide();
    $('#form_ue').show();
});
/* $('#choix_form').change(function() {
 var form = $('#choix_form option:selected').val();
 // alert(form);
 if(form =="cv_bm"){
 $('.cacher_form').hide();
 $('#form_bm').show();
 }
 else if(form =="cv_ue"){
 $('.cacher_form').hide();
 $('#form_ue').show();
 }
 else{
 $('.cacher_form').hide();
 $('#form_jmn').show();
 }
 });*/

//Focus pour les nouveaux inputs
var setFocus = function(e){
    $(".newInput").each(function(i){
        $(this).parent().removeClass("is-focused");
    });
    $(this).parent().addClass("is-focused");
}

/*
 Les fonctions qui suivent se sont les fonctions qui sont exécutées lorsque l'on clique sur l'icon "+" pour ajouter des informations
 dans les rubriques education, autres
 compétences connaissances linguistiques, expériences professionnelles, expérinces dans les régions, qualification
 */
$('#plus_educ').click(function(){
    var nb = parseInt($('#nbChamps_educ').val());
    var nb_educ = parseInt($('#nbChamps_educ').val()) + 1;
    var nb_tab = parseInt(nb)-1;

    var tr_etab = 'etablissement['+ nb_tab +']';
    var tr_dip = 'diplome['+ nb_tab +']';
    var tr_an = 'annee['+ nb_tab +']';

    /*
     Récupération des différentes inforamtions à charger dans le tableau correspondant
     */

    var val_etab = $('input[name="'+tr_etab+'"]').val();
    var val_dip = $('input[name="'+tr_dip+'"]').val();
    var val_an = $('input[name="'+tr_an+'"]').val();

    /*
     Chargement des différentes inforamtions de le tableau correspondant
     */

    $('#etab_td_'+nb).html(nb + '. ' + val_etab);
    $('#dip_td_'+nb).html(val_dip);
    $('#an_td_'+nb).html(val_an);

    var etab = 'etablissement['+ nb +']';
    var dip = 'diplome['+ nb +']';
    var an = 'annee['+ nb +']';

    var div1 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="text" id="etab_'+ nb +'" name="'+etab+'"/> <label class="mdl-textfield__label" for="etab_'+ nb +'">Etablissemnt</label> </div>';
    var div2 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="text" id="diplome_'+ nb +'" name="'+dip+'"/> <label class="mdl-textfield__label" for="diplome_'+ nb +'">Diplôme</label> </div>';
    var div3 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="date" id="annee_'+ nb +'" name="'+an+'"/> <label class="mdl-textfield__label" for="annee_'+ nb +'">Année</label> </div>';

    var tr ='<tr id="educ_tr_'+ nb_educ +'">'+
        '<td class="" id="etab_td_'+ nb_educ +'"  style="text-align: left"></td>'+
        '<td class="" id="dip_td_'+ nb_educ +'"  style="text-align: left"></td>'+
        '<td class="" id="an_td_'+ nb_educ +'"  style="text-align: left"></td>'+
        '<td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>'+
        '<i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td> </tr> ' ;

    $('#nbChamps_educ').val(nb_educ);

    $('#div_educ_'+nb).hide();

    $('<div id="div_educ_'+nb_educ +'" class="mdl-cell mdl-cell--12-col">'+ div1+div2+div3 +'</div>').insertAfter($('#div_educ_'+nb));

    $(".newInput").off("focus", setFocus);

    $(".newInput").focus(setFocus);

    $(tr).insertAfter($('#educ_tr_'+nb));

    $('#educ_table').show();

    $('#educ_tr_'+nb).show();

    $('#educ_tr_'+nb_educ).hide();


});

$('#con_ling').click(function(){

    var nb = parseInt($('#nbChamps_con_ling').val());
    var nb_ling = parseInt($('#nbChamps_con_ling').val()) + 1;
    var nb_tab = parseFloat(nb)-1;

    var tr_lang = 'langue['+ nb_tab +']';

    /*
     Récupération des différentes inforamtions à charger dans les collapsibles
     */

    var val_lang = $('input[name="'+tr_lang+'"]').val();
    var val_lecture = $('#lecture_'+nb_tab+' option:selected').val();
    var val_ecrit = $('#ecrit_'+nb_tab+' option:selected').val();
    var val_oral = $('#oral_'+nb_tab+' option:selected').val();

    /*
     Chargement des différentes inforamtions de les collapsibles
     */
    $('#langue_td_'+nb).html(nb + '. ' + val_lang);
    $('#lecture_td_'+nb).html(val_lecture);
    $('#ecrit_td_'+nb).html(val_ecrit);
    $('#oral_td_'+nb).html(val_oral);

    var langue = 'langue['+nb+']';
    var ecrit = 'ecrit['+nb+']';
    var lecture = 'lecture['+nb+']';
    var oral = 'oral['+nb+']';

    var div1 = ' <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--3-col">' +
        '<input class="mdl-textfield__input newInput" type="text" id="langue_'+ nb +'" name="'+ langue +'"/>'+
        '<label class="mdl-textfield__label" for="langue_'+ nb +'">Langue '+nb_ling +'</label> </div>';

    var div2 = '<div class="input-field mdl-cell mdl-cell--3-col">'+
        ' <select  id="lecture_'+ nb +'" class="browser-default newInput" name="'+ lecture +'">'+
        '<option value="" disabled selected>Lecture</option>'+
        '<option  value="excellent"> Excellent</option>' +
        ' <option  value="bon">Bon</option> ' +
        ' <option  value="moyen">Moyen</option> '+
        ' <option  value="faible">Faible</option> </select> </div>';

    var div3 = '<div class="input-field mdl-cell mdl-cell--3-col">'+
        ' <select  id="ecrit_'+ nb +'" class="browser-default newInput" name="'+ ecrit +'">'+
        '<option value="" disabled selected>Ecriture</option>'+
        '<option  value="excellent"> Excellent</option>' +
        ' <option  value="bon">Bon</option> ' +
        ' <option  value="moyen">Moyen</option> '+
        ' <option  value="faible">Faible</option> </select> </div>';

    var div4 = '<div class="input-field mdl-cell mdl-cell--3-col">'+
        ' <select  id="oral_'+ nb +'" class="browser-default newInput" name="'+ oral +'">'+
        '<option value="" disabled selected>Oral</option>'+
        '<option  value="excellent"> Excellent</option>' +
        ' <option  value="bon">Bon</option> ' +
        ' <option  value="moyen">Moyen</option> '+
        ' <option  value="faible">Faible</option> </select> </div>';

    var tr ='<tr id="con_ling_tr_'+nb_ling+'"> ' +
        '<td class="" id="langue_td_'+nb_ling+'" style="text-align: left"></td>' +
        '<td class="" id="lecture_td_'+nb_ling+'" style="text-align: left"></td>' +
        '<td class="" id="ecrit_td_'+nb_ling+'" style="text-align: left"></td>' +
        '<td class="" id="oral_td_'+nb_ling+'" style="text-align: left"></td>' +
        '<td ><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>' +
        '<i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td> </tr>';

    $('#nbChamps_con_ling').val(nb_ling);

    $('#div_con_ling_'+nb).hide();

    $('<div id="div_con_ling_'+nb_ling +'" class="mdl-cell mdl-cell--12-col"><div class="mdl-grid">'+ div1+div2+div3+div4 +'</div></div>').insertAfter($('#div_con_ling_'+nb));

    $(".newInput").off("focus", setFocus);
    $(".newInput").focus(setFocus);

    $(tr).insertAfter($('#con_ling_tr_'+nb));

    $('#langue_table').show();;

    $('#con_ling_tr_'+nb).show();

    $('#con_ling_tr_'+nb_ling).hide();

});

$('#autre_comp').click(function(){
    var nb = parseInt($('#nbChamps_autre_comp').val()); // #nbChamps_autre_comp=1 (initialement)
    var nb_comp = parseInt($('#nbChamps_autre_comp').val()) + 1;
    var nb_tab = parseFloat(nb)-1; // initialisation de la valeur à 0

    var tr_tab = 'autre_comp['+ nb_tab +']';

    /*
     Récupération des différentes inforamtions à charger dans le tableau correspondant
     */

    var val_comp = $('input[name="'+tr_tab+'"]').val();

    /*
     Chargement des différentes inforamtions de le tableau correspondant
     */

    $('#comp_td_'+nb).html(nb + '. ' + val_comp);

    var comp = 'autre_comp['+ nb +']';

    var div1 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">' +
        ' <input class="mdl-textfield__input newInput" type="text" id="autre_comp_'+ nb +'" name="'+comp +'"/>'+
        ' <label class="mdl-textfield__label" for="autre_comp_'+ nb +'">Compétence '+ nb_comp +' </label> </div>';

    var tr ='<tr id="comp_tr_'+nb_comp+'"> ' +
        '<td class="comp_td" id="comp_td_'+nb_comp+'" style="text-align: left"></td>' +
        '<td ><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>' +
        '<i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td> </tr>';

    $('#nbChamps_autre_comp').val(nb_comp);

    $('<div id="div_autre_comp_'+nb_comp +'" class="mdl-cell mdl-cell--12-col">'+ div1+ +'</div>').insertAfter($('#div_autre_comp_'+nb));

    $(".newInput").off("focus", setFocus);

    $(".newInput").focus(setFocus);

    $(tr).insertAfter($('#comp_tr_'+nb));

    $('#div_autre_comp_'+nb).hide();

    $('#comp_table').show();

    $('#comp_tr_'+nb).show();

    $('#comp_tr_'+nb_comp).hide();

});

$('#exp_reg').click(function(){
    var nb = parseInt($('#nbChamps_exp_reg').val());
    var nb_exp_reg = parseInt($('#nbChamps_exp_reg').val()) + 1;
    var nb_tab = parseInt(nb)-1; // initialisation de la valeur à 0

    var tr_tab_pays = 'pays['+ nb_tab +']';
    var tr_tab_date_debut = 'date_debut['+ nb_tab +']';
    var tr_tab_date_fin = 'date_fin['+ nb_tab +']';

    /*
     Récupération des différentes inforamtions à charger dans le tableau correspondant
     */

    var val_pays = $('input[name="'+tr_tab_pays+'"]').val();
    var val_date_debut = $('input[name="'+tr_tab_date_debut+'"]').val();
    var val_date_fin = $('input[name="'+tr_tab_date_fin+'"]').val();

    /*
     Chargement des différentes inforamtions de le tableau correspondant
     */

    $('#td_pays_'+nb).html(nb + '. ' + val_pays);
    $('#td_date_debut_'+nb).html(val_date_debut);
    $('#td_date_fin_'+nb).html(val_date_fin);

    // définition de l'attribut du formulaire suivant pour les nouvelles informations qui seront enregistrées

    var pays = 'pays['+ nb +']';
    var date_debut = 'date_debut['+ nb +']';
    var date_fin = 'date_fin['+ nb +']';

    var div1 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--4-col">'+
        ' <input class="mdl-textfield__input newInput" type="text" id="pays_'+ nb +'" name="'+pays +'"/>'+
        '<label class="mdl-textfield__label" for="pays_'+ nb +'">Pays '+ nb_exp_reg +'</label> </div>';

    var div2='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--3-col">' +
        '<input class="mdl-textfield__input newInput" type="date" id="date_debut_'+ nb +'" name="'+date_debut +'"/>'+
        '<label class="mdl-textfield__label" for="date_debut_'+ nb +'">Période de </label> </div>';

    var div3=' <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--3-col">'+
        '  <input class="mdl-textfield__input newInput" type="date" id="date_fin_'+ nb +'" name="'+date_fin +'"/>'+
        ' <label class="mdl-textfield__label" for="date_fin_'+ nb +'">à</label> </div>';

    var tr ='<tr id="exp_reg_tr_'+nb_exp_reg+'"> ' +
        '<td class="" id="td_pays_'+nb_exp_reg+'" style="text-align: left"></td>' +
        '<td class="" id="td_date_debut_'+nb_exp_reg+'" style="text-align: left"></td>' +
        '<td class="" id="td_date_fin_'+nb_exp_reg+'" style="text-align: left"></td>' +
        '<td ><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>' +
        '<i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td> </tr>';

    $('#nbChamps_exp_reg').val(nb_exp_reg);

    // $('<div id="div_exp_reg_'+nb_exp_reg +'" class="mdl-cell mdl-cell--12-col">'+ div1+div2+div3 +'</div>').insertAfter($('#div_exp_reg_'+nb));
    $('#div_exp').append('<div id="div_exp_reg_'+nb_exp_reg +'" class="mdl-cell mdl-cell--12-col">'+ div1+div2+div3 +'</div>');

    $(".newInput").off("focus", setFocus);
    $(".newInput").focus(setFocus);

    $(tr).insertAfter($('#exp_reg_tr_'+nb));

    $('#div_exp_reg_'+nb).hide();

    $('#exp_reg_table').show();

    $('#exp_reg_tr_'+nb).show();

    $('#exp_reg_tr_'+nb_exp_reg).hide();

});

$('#autre_info').click(function(){
    var nb = parseInt($('#nbChamps_info').val());
    var nb_info = parseInt($('#nbChamps_info').val()) + 1;
    var nb_tab = parseFloat(nb)-1; // initialisation de la valeur à 0

    var tr_tab = 'info['+ nb_tab +']';

    /*
     Récupération des différentes inforamtions à charger dans le tableau correspondant
     */

    var val_info = $('input[name="'+tr_tab+'"]').val();

    /*
     Chargement des différentes inforamtions de le tableau correspondant
     */

    $('#info_td_'+nb).html(nb + '. ' + val_info);

    var info = 'info['+ nb +']';

    var div1='<div id="div_autre_info_'+nb_info+'" class="mdl-cell mdl-cell--12-col">'+
        ' <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">'+
        ' <input class="mdl-textfield__input newInput" type="text" id="info_'+nb+'" name="'+info +'"/>'+
        ' <label class="mdl-textfield__label" for="info_'+nb+'">Information '+nb_info+' </label> </div> </div>';

    var tr ='<tr id="info_tr_'+nb_info+'"> ' +
        '<td class="comp_td" id="info_td_'+nb_info+'" style="text-align: left"></td>' +
        '<td ><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>' +
        '<i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td> </tr>';

    $('#nbChamps_info').val(nb_info);

    $('#div_autre_info_'+nb).hide();

    $(div1).insertAfter($('#div_autre_info_'+nb));

    $(".newInput").off("focus", setFocus);

    $(".newInput").focus(setFocus);

    $(tr).insertAfter($('#info_tr_'+nb));

    $('#info_table').show();

    $('#info_tr_'+nb).show();

    $('#info_tr_'+nb_info).hide();

});

$('#qualif').click(function(){
    var nb = parseInt($('#nbChamps_qualif').val());
    var nb_qualif = parseInt($('#nbChamps_qualif').val()) + 1;
    var nb_tab = parseFloat(nb)-1; // initialisation de la valeur à 0

    var tr_tab = 'qualif['+ nb_tab +']';

    /*
     Récupération des différentes inforamtions à charger dans le tableau correspondant
     */

    var val_qualif = $('input[name="'+tr_tab+'"]').val();

    /*
     Chargement des différentes inforamtions de le tableau correspondant
     */

    $('#qualif_td_'+nb).html(nb + '. ' + val_qualif);

    var qualif = 'qualif['+ nb +']';

    var div1='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">'+
        '<input class="mdl-textfield__input newInput" type="text" id="qualif_'+ nb +'" name="'+qualif +'"/>'+
        '<label class="mdl-textfield__label" for="qualif_'+ nb +'">Qualification '+nb_qualif+'</label> </div>';

    var tr ='<tr id="qualif_tr_'+nb_qualif+'"> ' +
        '<td class="comp_td" id="qualif_td_'+nb_qualif+'" style="text-align: left"></td>' +
        '<td ><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>' +
        '<i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td> </tr>';

    $('#nbChamps_qualif').val(nb_qualif);

    $('<div id="div_qualif_'+nb_qualif +'" class="mdl-cell mdl-cell--12-col">'+ div1+'</div>').insertAfter($('#div_qualif_'+nb));

    $(".newInput").off("focus", setFocus);

    $(".newInput").focus(setFocus);

    $(tr).insertAfter($('#qualif_tr_'+nb));

    $('#div_qualif_'+nb).hide();

    $('#qualif_table').show();

    $('#qualif_tr_'+nb).show();

    $('#qualif_tr_'+nb_qualif).hide();
});

$('#ex_pro').click(function(){
    var nb = parseInt($('#nbChamps_ex_pro').val());
    var nb_ex_pro = parseInt($('#nbChamps_ex_pro').val()) + 1;
    var nb_tab = parseFloat(nb)-1; // initialisation de la valeur à 0

    var tr_tab_debut = 'debut_exp['+ nb_tab +']';
    var tr_tab_fin = 'fin_exp['+ nb_tab +']';
    var tr_tab_lieu = 'lieu['+ nb_tab +']';
    var tr_tab_soc = 'societe['+ nb_tab +']';
    var tr_tab_ref = 'ref_personne['+ nb_tab +']';
    var tr_tab_cont = 'contact['+ nb_tab +']';
    var tr_tab_fonct = 'fonction['+ nb_tab +']';
    var tr_tab_desc = 'description['+ nb_tab +']';

    /*
     Récupération des différentes inforamtions à charger dans le tableau correspondant
     */

    var val_debut = $('input[name="'+tr_tab_debut+'"]').val();
    var val_fin= $('input[name="'+tr_tab_fin+'"]').val();
    var val_lieu = $('input[name="'+tr_tab_lieu+'"]').val();
    var val_soc = $('input[name="'+tr_tab_soc+'"]').val();
    var val_ref = $('input[name="'+tr_tab_ref+'"]').val();
    var val_cont = $('input[name="'+tr_tab_cont+'"]').val();
    var val_fonct = $('input[name="'+tr_tab_fonct+'"]').val();
    var val_desc = $('input[name="'+tr_tab_desc+'"]').val();

    /*
     Chargement des différentes inforamtions de le tableau correspondant
     */

    $('#debut_td_'+nb).html(nb + '. ' + val_debut);
    $('#fin_td_'+nb).html(val_fin);
    $('#lieu_td_'+nb).html(val_lieu);
    $('#societe_td_'+nb).html(val_soc);
    $('#ref_td_'+nb).html(val_ref);
    $('#contact_td_'+nb).html(val_cont);
    $('#fonction_td_'+nb).html(val_fonct);
    $('#desc_td_'+nb).html(val_desc);

    // définition de l'attribut du formulaire suivant pour les nouvelles informations qui seront enregistrées

    var debut_exp = 'debut_exp['+ nb +']';
    var fin_exp = 'fin_exp['+ nb +']';
    var lieu = 'lieu['+ nb +']';
    var societe = 'societe['+ nb +']';
    var ref_personne = 'ref_personne['+ nb +']';
    var contact = 'contact['+ nb +']';
    var fonction = 'fonction['+ nb +']';
    var description = 'description['+ nb +']';

    var div1='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--6-col">'+
        '<input class="mdl-textfield__input newInput" type="date" id="debut_exp_'+ nb +'" name="'+debut_exp +'"/>'+
        '<label class="mdl-textfield__label" for="debut_exp_'+ nb +'">Du</label></div>';
    var div2='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--5-col">'+
        '<input class="mdl-textfield__input newInput" type="date" id="fin_exp_'+ nb +'" name="'+fin_exp +'"/>'+
        '<label class="mdl-textfield__label" for="fin_exp_'+ nb +'">Au</label></div>';
    var div3='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--5-col">'+
        '<input class="mdl-textfield__input newInput" type="text" id="lieu_'+ nb +'" name="'+lieu +'"/>'+
        '<label class="mdl-textfield__label" for="lieu_'+ nb +'">Lieu</label></div>';

    var div4='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--5-col">'+
        '<input class="mdl-textfield__input newInput" type="text" id="societe_'+ nb +'" name="'+societe +'"/>'+
        '<label class="mdl-textfield__label" for="societe_'+ nb +'">sociéte</label> </div>';

    var div5='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">'+
        '<input  class="mdl-textfield__input newInput" type="text" id="ref_personne_'+ nb +'" name="'+ref_personne +'"/>'+
        '<label class="mdl-textfield__label" for="ref_personne_'+ nb +'">Référence personne</label> </div>';

    var div6='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--11-col">'+
        '<input class="mdl-textfield__input newInput" type="number" id="contact_'+ nb +'" name="'+contact +'"/>'+
        '<label class="mdl-textfield__label" for="contact_'+ nb +'" name="">contact</label> </div>';

    var div7='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">'+
        '<input class="mdl-textfield__input newInput" type="text" id="fonction_'+ nb +'" name="'+fonction +'"/>'+
        '<label class="mdl-textfield__label" for="fonction_'+ nb +'">fonction1</label> </div>';

    var div8='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col">'+
        '<input class="mdl-textfield__input newInput" type="text" id="description_'+ nb +'" name="'+description +'"/>'+
        '<label class="mdl-textfield__label" for="description_'+ nb +'">description</label> </div>';

    var tr ='<tr id="exp_pro_tr_'+nb_ex_pro+'"> ' +
        '<td class="" id="debut_td_'+nb_ex_pro+'" style="text-align: left"></td>' +
        '<td class="" id="fin_td_'+nb_ex_pro+'" style="text-align: left"></td>' +
        '<td class="" id="lieu_td_'+nb_ex_pro+'" style="text-align: left"></td>' +
        '<td class="" id="societe_td_'+nb_ex_pro+'" style="text-align: left"></td>' +
        '<td class="" id="ref_td_'+nb_ex_pro+'" style="text-align: left"></td>' +
        '<td class="" id="contact_td_'+nb_ex_pro+'" style="text-align: left"></td>' +
        '<td class="" id="fonction_td_'+nb_ex_pro+'" style="text-align: left"></td>' +
        '<td class="" id="desc_td_'+nb_ex_pro+'" style="text-align: left"></td>' +
        '<td ><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>' +
        '<i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td> </tr>';

    $('#nbChamps_ex_pro').val(nb_ex_pro);

    $('#div_ex_pro_'+nb).hide();

    $('<div id="div_ex_pro_'+nb_ex_pro +'" class="mdl-cell mdl-cell--12-col">'+ div1+div2+div3+div4+div5+div6+div7+div8+'</div>').insertAfter($('#div_ex_pro_'+nb));

    $(".newInput").off("focus", setFocus);

    $(".newInput").focus(setFocus);

    $(tr).insertAfter($('#exp_pro_tr_'+nb));

    $('#exp_pro_table').show();

    $('#exp_pro_tr_'+nb).show();

    $('#exp_pro_tr_'+nb_ex_pro).hide();

});

$('#con_info').click(function(){
    var nb = parseInt($('#nbChamps_con_info').val());
    var nb_con_info = parseInt($('#nbChamps_con_info').val()) + 1;
    var nb_tab = parseFloat(nb)-1;

    var tr_con_info = 'outil['+ nb_tab +']';

    /*
     Récupération des différentes inforamtions à charger dans le tabelau de visualisation
     */

    var val_con_info = $('input[name="'+tr_con_info+'"]').val();
    var val_niveau = $('#niveau_'+nb_tab+' option:selected').val();

    /*
     Chargement des différentes inforamtions dans le tabelau de visualisation
     */
    $('#outil_td_'+nb).html(nb + '. ' + val_con_info);
    $('#niveau_td_'+nb).html(val_niveau);

    var outil = 'outil['+nb+']';
    var niveau = 'niveau['+nb+']';

    var div1 = ' <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--8-col">' +
        '<input class="mdl-textfield__input newInput" type="text" id="outil_'+ nb +'" name="'+ outil +'"/>'+
        '<label class="mdl-textfield__label" for="outil_'+ nb +'">Outil '+nb_con_info +'</label> </div>';

    var div2 = '<div class="input-field mdl-cell mdl-cell--3-col">'+
        ' <select  id="niveau_'+ nb +'" class="browser-default newInput" name="'+ niveau +'">'+
        '<option value="" disabled selected>Niveau</option>'+
        '<option  value="excellent"> Faible</option>' +
        ' <option  value="bon">Moyen</option> ' +
        ' <option  value="moyen">Bon</option> '+
        ' <option  value="faible">Excellent</option> </select> </div>';

    var tr ='<tr id="con_info_tr_'+nb_con_info+'"> ' +
        '<td class="" id="outil_td_'+nb_con_info+'" style="text-align: left"></td>' +
        '<td class="" id="niveau_td_'+nb_con_info+'" style="text-align: left"></td>' +
        '<td ><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>' +
        '<i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td> </tr>';

    $('#nbChamps_con_info').val(nb_con_info);

    $('#div_con_info_'+nb).hide();

    $('<div id="div_con_info_'+nb_con_info +'" class="mdl-cell mdl-cell--12-col"><div class="mdl-grid">'+ div1+div2 +'</div></div>').insertAfter($('#div_con_info_'+nb));

    $(".newInput").off("focus", setFocus);
    $(".newInput").focus(setFocus);

    $(tr).insertAfter($('#con_info_tr_'+nb));

    $('#con_info_table').show();;

    $('#con_info_tr_'+nb).show();

    $('#con_info_tr_'+nb_con_info).hide();

});

$('#asso_pro').click(function(){
    var nb = parseInt($('#nbChamps_asso_pro').val());
    var nb_asso_pro = parseInt($('#nbChamps_asso_pro').val()) + 1;
    var nb_tab = parseInt(nb)-1;

    var tr_nom_asso= 'nom_asso['+ nb_tab +']';
    var tr_desc_asso = 'desc_asso['+ nb_tab +']';
    var tr_siege_asso = 'siege_asso['+ nb_tab +']';

    /*
     Récupération des différentes inforamtions à charger dans le tableau correspondant
     */

    var val_nom_asso = $('input[name="'+tr_nom_asso+'"]').val();
    var val_desc_asso = $('input[name="'+tr_desc_asso+'"]').val();
    var val_siege_asso= $('input[name="'+tr_siege_asso+'"]').val();

    /*
     Chargement des différentes inforamtions de le tableau correspondant
     */

    $('#nom_asso_td_'+nb).html(nb + '. ' + val_nom_asso);
    $('#desc_asso_td_'+nb).html(val_desc_asso);
    $('#siege_asso_td_'+nb).html(val_siege_asso);

    var nom_asso = 'nom_asso['+ nb +']';
    var desc_asso = 'desc_asso['+ nb +']';
    var siege_asso = 'siege_asso['+ nb +']';

    var div1 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="text" id="nom_asso_'+ nb +'" name="'+nom_asso+'"/> <label class="mdl-textfield__label" for="nom_asso_'+ nb +'">Association '+ nb_asso_pro +' </label> </div>';
    var div2 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="text" id="desc_asso_'+ nb +'" name="'+desc_asso+'"/> <label class="mdl-textfield__label" for="desc_asso_'+ nb +'">Description</label> </div>';
    var div3 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="text" id="siege_asso_'+ nb +'" name="'+siege_asso+'"/> <label class="mdl-textfield__label" for="siege_asso_'+ nb +'">Sièege</label> </div>';

    var tr ='<tr id="asso_pro_tr_'+ nb_asso_pro +'">'+
        '<td class="" id="nom_asso_td_'+ nb_asso_pro +'"  style="text-align: left"></td>'+
        '<td class="" id="desc_asso_td_'+ nb_asso_pro +'"  style="text-align: left"></td>'+
        '<td class="" id="siege_asso_td_'+ nb_asso_pro +'"  style="text-align: left"></td>'+
        '<td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>'+
        '<i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td> </tr> ' ;

    $('#nbChamps_asso_pro').val(nb_asso_pro);

    $('#div_asso_pro_'+nb).hide();

    $('<div id="div_asso_pro_'+nb_asso_pro +'" class="mdl-cell mdl-cell--12-col">'+ div1+div2+div3 +'</div>').insertAfter($('#div_asso_pro_'+nb));

    $(".newInput").off("focus", setFocus);

    $(".newInput").focus(setFocus);

    $(tr).insertAfter($('#asso_pro_tr_'+nb));

    $('#asso_pro_table').show();

    $('#asso_pro_tr_'+nb).show();

    $('#asso_pro_tr_'+nb_asso_pro).hide();


});

$('#etude_projet').click(function(){
    var nb = parseInt($('#nbChamps_projet').val());
    var nb_projet = parseInt($('#nbChamps_projet').val()) + 1;
    var nb_tab = parseInt(nb)-1;

    var tr_domaine_exp= 'domaine_exp['+ nb_tab +']';
    var tr_int_etude = 'int_etude['+ nb_tab +']';
    var tr_responsabilite= 'responsabilite['+ nb_tab +']';
    var tr_annee_pro= 'annee_pro['+ nb_tab +']';
    var tr_commanditaire = 'commanditaire['+ nb_tab +']';
    var tr_lieu_pro = 'lieu_pro['+ nb_tab +']';

    /*
     Récupération des différentes inforamtions à charger dans le tableau correspondant
     */

    var val_domaine_exp = $('input[name="'+tr_domaine_exp+'"]').val();
    var val_int_etude = $('input[name="'+tr_int_etude+'"]').val();
    var val_responsabilite= $('input[name="'+tr_responsabilite+'"]').val();
    var val_annee_pro= $('input[name="'+tr_annee_pro+'"]').val();
    var val_commanditaire = $('input[name="'+tr_commanditaire+'"]').val();
    var val_lieu_pro= $('input[name="'+tr_lieu_pro+'"]').val();

    /*
     Chargement des différentes inforamtions de le tableau correspondant
     */

    $('#domaine_exp_td_'+nb).html(nb + '. ' + val_domaine_exp);
    $('#int_etude_td_'+nb).html(val_int_etude);
    $('#responsabilite_td_'+nb).html(val_responsabilite);
    $('#annee_pro_td_'+nb).html(val_annee_pro);
    $('#commanditaire_td_'+nb).html(val_commanditaire);
    $('#lieu_pro_td_'+nb).html(val_lieu_pro);

    var domaine_exp = 'domaine_exp['+ nb +']';
    var int_etude = 'int_etude['+ nb +']';
    var responsabilite = 'responsabilite['+ nb +']';
    var annee_pro = 'annee_pro['+ nb +']';
    var commanditaire = 'commanditaire['+ nb +']';
    var lieu_pro = 'lieu_pro['+ nb +']';

    var div1 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="text" id="domaine_exp_'+ nb +'" name="'+domaine_exp+'"/> <label class="mdl-textfield__label" for="domaine_exp_'+ nb +'">Domaine  '+ nb_projet +' </label> </div>';
    var div2 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="text" id="int_etude_'+ nb +'" name="'+int_etude+'"/> <label class="mdl-textfield__label" for="int_etude_'+ nb +'">Intiluté </label> </div>';
    var div3 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="text" id="responsabilite_'+ nb +'" name="'+responsabilite+'"/> <label class="mdl-textfield__label" for="responsabilite_'+ nb +'">Responsabilité</label> </div>';
    var div4 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="date" id="annee_pro_'+ nb +'" name="'+annee_pro+'"/> <label class="mdl-textfield__label" for="annee_pro_'+ nb +'">Année </label> </div>';
    var div5 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="text" id="commanditaire_'+ nb +'" name="'+commanditaire+'"/> <label class="mdl-textfield__label" for="commanditaire_'+ nb +'">Commanditaire</label> </div>';
    var div6 = '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--10-col"> <input class="mdl-textfield__input newInput" type="text" id="lieu_pro_'+ nb +'" name="'+lieu_pro+'"/> <label class="mdl-textfield__label" for="lieu_pro_'+ nb +'">Lieu</label> </div>';

    var tr ='<tr id="projet_tr_'+ nb_projet +'">'+
        '<td class="" id="domaine_exp_td_'+ nb_projet +'"  style="text-align: left"></td>'+
        '<td class="" id="int_etude_td_'+ nb_projet +'"  style="text-align: left"></td>'+
        '<td class="" id="responsabilite_td_'+ nb_projet +'"  style="text-align: left"></td>'+
        '<td class="" id="annee_pro_td_'+ nb_projet +'"  style="text-align: left"></td>'+
        '<td class="" id="commanditaire_td_'+ nb_projet +'"  style="text-align: left"></td>'+
        '<td class="" id="lieu_pro_td_'+ nb_projet +'"  style="text-align: left"></td>'+
        '<td><i style="cursor: pointer" class="material-icons mdl-color-text--red-100">edit</i>'+
        '<i style="cursor: alias" class="material-icons mdl-color-text--cyan">close</i></td> </tr> ' ;

    $('#nbChamps_projet').val(nb_projet);

    $('#div_projet_'+nb).hide();

    $('<div id="div_projet_'+nb_projet +'" class="mdl-cell mdl-cell--12-col">'+ div1+div2+div3+div4+div5+div6 +'</div>').insertAfter($('#div_projet_'+nb));

    $(".newInput").off("focus", setFocus);

    $(".newInput").focus(setFocus);

    $(tr).insertAfter($('#projet_tr_'+nb));

    $('#projet_table').show();

    $('#projet_tr_'+nb).show();

    $('#projet_tr_'+nb_projet).hide();


});

