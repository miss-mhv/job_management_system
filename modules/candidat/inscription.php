<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 29/08/2017
 * Time: 11:41
 */
/*require_once"../../modeles/inscription.php";
require_once"../../modeles/candidature.php";*/
/*
 * Les champs de l'état civil
 */

if(isset($_POST['nbChamps_educ']) && isset($_POST['nbChamps_con_ling']) && isset($_POST['nbChamps_autre_comp']) && isset($_POST['nbChamps_exp_reg']) && isset($_POST['nbChamps_info']) && isset($_POST['nbChamps_qualif'])
    && isset($_POST['nb_an_entr']) && isset($_POST['nbChamps_ex_pro']) && isset($_POST['nbChamps_projet']) && isset($_POST['nbChamps_asso_pro']) && isset($_POST['nbChamps_con_info']) )
{
    if(!empty($_POST['nom']) || empty($_POST['prenom']) && !empty($_POST['date_naiss']) && !empty($_POST['telephone']) && !empty($_POST['email']) && !empty($_POST['etat_civil']) && !empty($_POST['nationalite']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date_naiss = $_POST['date_naiss'];
        $tel = $_POST['telephone'];
        $email = $_POST['email'];
        $etat_civil = $_POST['etat_civil'];
        $nationalite = $_POST['nationalite'];

    }

    //     Récupération des champs de la partie éducation

    $nb = $_POST['nbChamps_educ'];


    for($i=0; $i<$nb; $i++)
    {
        if(!empty($_POST['etablissement'][$i]) && !empty($_POST['diplome'][$i]) && !empty($_POST['annee'][$i]))
        {
            $etab[$i] = $_POST['etablissement'][$i];
            $dip[$i] = $_POST['diplome'][$i];
            $an[$i] = $_POST['annee'][$i];

            echo '$etab'.$i.'= '.$etab[$i].'<br>' ;
            echo '$dip'.$i.'= '.$dip[$i].'<br>'  ;
            echo '$an'.$i.'= '.$an[$i].'<br>'  ;
        }
    }

    //   Récupération des champs de la connaissance linguistique

    $nb_lang = $_POST['nbChamps_con_ling'];
    for($i=0; $i<$nb_lang; $i++)
    {
        if(!empty($_POST['langue'][$i]) && !empty($_POST['lecture'][$i]) && !empty($_POST['ecrit'][$i]) && !empty($_POST['oral'][$i]))
        {
            $langue[$i] = $_POST['langue'][$i];
            $lecture[$i] = $_POST['lecture'][$i];
            $ecrit[$i] = $_POST['ecrit'][$i];
            $oral[$i] = $_POST['oral'][$i];

            echo 'lang_'.$i.'= '.$langue[$i].'<br>' ;
            echo 'lect_'.$i.'= '.$lecture[$i].'<br>'  ;
            echo 'ecrit_'.$i.'= '.$ecrit[$i].'<br>'  ;
            echo 'oral_'.$i.'= '.$oral[$i].'<br>'  ;
        }
    }

    //   Récupération des champs de la partie autres compétences

    $nb_comp = $_POST['nbChamps_autre_comp'];
    for($i=0; $i<$nb_comp; $i++)
    {
        if(!empty($_POST['autre_comp'][$i]))
        {
            $competence[$i] = $_POST['autre_comp'][$i];
        }
    }

//   Récupération des champs de la partie experience region

    $nb_exp_reg = $_POST['nbChamps_exp_reg'];
    for($i=0; $i<$nb_exp_reg; $i++)
    {
        if(!empty($_POST['pays'][$i]) && !empty($_POST['date_debut'][$i]) && !empty($_POST['date_fin'][$i]))
        {
            $pays[$i] = $_POST['pays'][$i];
            $date_debut[$i] = $_POST['date_debut'][$i];
            $date_fin[$i] = $_POST['date_fin'][$i];
        }
    }

//   Récupération des champs de la partie autres informations

    $nb_info = $_POST['nbChamps_info'];
    for($i=0; $i<$nb_info; $i++)
    {
        if(!empty($_POST['info'][$i]))
        {
            $info[$i] = $_POST['info'][$i];
        }
    }

//   Récupération des champs de la qualification

    $nb_qualif = $_POST['nbChamps_qualif'];
    for($i=0; $i<$nb_qualif; $i++)
    {
        if(!empty($_POST['qualif'][$i]))
        {
            $qualificaion[$i] = $_POST['qualif'][$i];
        }
    }

//   Récupération des champs de expérience professionnelle

    if(!empty($_POST['org_pro']) && !empty($_POST['fonct_actu']) && !empty($_POST['nb_an_entr']))
    {
        $org_pro = $_POST['org_pro'];
        $fonct_actu = $_POST['fonct_actu'];
        $nb_an_entr = $_POST['nb_an_entr'];
    }

    $nb_ex_pro = $_POST['nbChamps_ex_pro'];
    for($i=0; $i<$nb_ex_pro; $i++)
    {
        if(!empty($_POST['debut_exp'][$i])&&!empty($_POST['fin_exp'][$i])&&!empty($_POST['lieu'][$i])&&!empty($_POST['societe'][$i])&&!empty($_POST['ref_personne'][$i])&&!empty($_POST['contact'][$i])&&!empty($_POST['fonction'][$i])&&!empty($_POST['description'][$i]))
        {
            $debut_exp[$i] = $_POST['debut_exp'][$i];
            $fin_exp[$i] = $_POST['fin_exp'][$i];
            $lieu[$i] = $_POST['lieu'][$i];
            $societe[$i] = $_POST['societe'][$i];
            $ref_personne[$i] = $_POST['ref_personne'][$i];
            $contact[$i] = $_POST['contact'][$i];
            $fonction[$i] = $_POST['fonction'][$i];
            $description[$i] = $_POST['description'][$i];
        }
    }

//   Récupération des champs de la partie connaissance informatique

    $nb_con_info = $_POST['nbChamps_con_info'];
    for($i=0; $i<$nb_con_info; $i++)
    {
        if(!empty($_POST['outil'][$i]) && !empty($_POST['niveau'][$i]))
        {
            $outil[$i] = $_POST['outil'][$i];
            $niveau[$i] = $_POST['niveau'][$i];

            echo 'outil_'.$i.'= '.$outil[$i].'<br>' ;
            echo 'niveau_'.$i.'= '.$niveau[$i].'<br>'  ;
        }
    }

//   Récupération des champs de la partie association professionnelle

    $nb_asso_pro = $_POST['nbChamps_asso_pro'];
    for($i=0; $i<$nb_asso_pro; $i++)
    {
        if(!empty($_POST['nom_asso'][$i]) && !empty($_POST['desc_asso'][$i]) && !empty($_POST['siege_asso'][$i]))
        {
            $nom_asso[$i] = $_POST['nom_asso'][$i];
            $desc_asso[$i] = $_POST['desc_asso'][$i];
            $siege_asso[$i] = $_POST['siege_asso'][$i];
        }
    }

//   Récupération des champs de la partie Etude / projet

    $nb_etude_pro = $_POST['nbChamps_projet'];
    for($i=0; $i<$nb_etude_pro; $i++)
    {
        if(!empty($_POST['domaine_exp'][$i]) && !empty($_POST['int_etude'][$i]) && !empty($_POST['responsabilite'][$i]) && !empty($_POST['annee_pro'][$i]) && !empty($_POST['commanditaire'][$i]) && !empty($_POST['lieu_pro'][$i]))
        {
            $domaine_exp[$i] = $_POST['domaine_exp'][$i];
            $int_etude[$i] = $_POST['int_etude'][$i];
            $responsabilite[$i] = $_POST['responsabilite'][$i];
            $annee_pro[$i] = $_POST['annee_pro'][$i];
            $commanditaire[$i] = $_POST['commanditaire'][$i];
            $lieu_pro[$i] = $_POST['lieu_pro'][$i];
        }
    }

//  Ajout d'un candidat avec sa candidature dans la bd

    if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($date_naiss) && !empty($tel) || !empty($etat_civil) && !empty($nationalite) && !empty($org_pro) && !empty($fonct_actu) && !empty($nb_an_entr))
    {
        $id_utilisateur = inscrire($nom,$prenom,$email,$date_naiss,$tel,$etat_civil,$nationalite,$org_pro,$fonct_actu,$nb_an_entr);
    }

// insertion des information relative à la partie education dans la bd

    for($i=0; $i<$nb; $i++)
    {
        if(!empty($etab[$i]) && !empty($dip[$i]) && !empty($an[$i]))
        {
            $education = set_education($id_utilisateur,$etab[$i],$dip[$i],$an[$i]);
            echo "candidat: ".$id_utilisateur;
            echo "educ: ".$education;
        }
    }

// insertion des information relative à la partie connaissance linguistique dans la bd

    for($i=0; $i<$nb_lang; $i++)
    {
        if(!empty($langue[$i]) && !empty($lecture[$i]) && !empty($ecrit[$i]) && !empty($oral[$i]))
        {
            $connaiss_ling = set_connaiss_lang($id_utilisateur,$langue[$i],$lecture[$i],$ecrit[$i],$oral[$i]);
            echo "candidat: ".$id_utilisateur;
            echo "ling: ".$connaiss_ling;
        }
    }

    // insertion des information relative à la partie autres compétences la bd

    for($i=0; $i<$nb_comp; $i++)
    {
        if(!empty($competence[$i]))
        {
            $autre_comp = set_autre_competence($id_utilisateur,$competence[$i]);
            echo "candidat: ".$id_utilisateur;
            echo "comp: ".$autre_comp;
        }
    }

// insertion des information relative à la partie autre information la bd

    for($i=0; $i<$nb_info; $i++)
    {
        if(!empty($info[$i]))
        {
            $autre_info = set_autre_info($id_utilisateur,$info[$i]);
            echo "candidat: ".$id_utilisateur;
            echo "autre_info: ".$autre_info;
        }
    }

// insertion des information relative à la partie autre qualification la bd

    for($i=0; $i<$nb_qualif; $i++)
    {
        if(!empty($qualificaion[$i]))
        {
            $qltion = set_qualification($id_utilisateur,$qualificaion[$i]);
            echo "candidat: ".$id_utilisateur;
            echo "qualification: ".$qltion;
        }
    }

// insertion des information relative à la partie expériences professionnelles dans la bd

    for($i=0; $i<$nb_ex_pro; $i++)
    {
        if(!empty($debut_exp[$i]) && !empty($fin_exp[$i]) && !empty($lieu[$i]) && !empty($societe[$i]) && !empty($ref_personne[$i]) && !empty($contact[$i]) && !empty($fonction[$i]) && !empty($description[$i]))
        {
            $exp_pro = set_exp_pro($id_utilisateur,$debut_exp[$i],$fin_exp[$i],$lieu[$i],$societe[$i],$ref_personne[$i],$contact[$i],$fonction[$i],$description[$i]);
            echo "candidat: ".$id_utilisateur;
            echo "exp_pro: ".$exp_pro;
        }
    }

// insertion des information relative à la partie connaissance informatique dans la bd

    for($i=0; $i<$nb_con_info; $i++)
    {
        if(!empty($outil[$i]) && !empty($niveau[$i]))
        {
            $conn_info= set_connaissance_info($id_utilisateur,$outil[$i],$niveau[$i]);
            echo "candidat: ".$id_utilisateur;
            echo "cnn_info: ".$conn_info;
        }
    }

// insertion des information relative à la partie association professionnelle dans la bd

    for($i=0; $i<$nb_asso_pro; $i++)
    {
        if(!empty($nom_asso[$i]) && !empty($desc_asso[$i]) && !empty($siege_asso[$i]))
        {
            $asso_pro = set_association_pro($id_utilisateur,$nom_asso[$i],$desc_asso[$i],$siege_asso[$i]);
            echo "candidat: ".$id_utilisateur;
            echo "$asso_pro: ".$asso_pro;
        }
    }

// insertion des information relative à la partie etude projet dans la bd

    for($i=0; $i<$nb_etude_pro; $i++)
    {
        if(!empty($domaine_exp[$i]) && !empty($int_etude[$i]) && !empty($responsabilite[$i]) && !empty($annee_pro[$i]) && !empty($commanditaire[$i]) && !empty($lieu_pro[$i]))
        {
            $etude_projet = set_etude_projet($id_utilisateur,$domaine_exp[$i],$int_etude[$i],$responsabilite[$i],$annee_pro[$i],$commanditaire[$i],$lieu_pro[$i]);
            echo "candidat: ".$id_utilisateur;
            echo "$etude_projet: ".$etude_projet;
        }
    }

// Enregistrement d'une candidature

    if(isset($_POST['id_offre']) && $id_utilisateur)
    {
        $id_offre = $_POST['id_offre'];
        $type_candidature = 2; //candidature ponctuelle ie d'une à la publication d'une offre
        if(ajouter_candidature($id_utilisateur,$id_offre,$type_candidature,null))
        {
            include_once CHEMIN_VUE.'candidature_ok.php';
        }
    }
    elseif(!empty($_POST['choix_type_offre']) && $id_utilisateur)
    {
        $id_offre = 0;
        $type_candidature = 1; // spontannée ie candidature soumise de façon autonome
        $type_offre = $_POST['choix_type_offre'];
        if(ajouter_candidature($id_utilisateur,null,$type_candidature,$type_offre))
        {
            include_once CHEMIN_VUE.'candidature_ok.php';
        }
    }
  /*  else{
        if(ajouter_candidature(500,null,1,3))
        {
            include_once CHEMIN_VUE.'candidature_ok.php';
        }


    }*/
}
else
{
    include_once CHEMIN_VUE.'formulaire_cv.php';
}