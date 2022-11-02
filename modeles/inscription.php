<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 22/08/2017
 * Time: 11:34
 */
require_once"connexion.php";

function inscrire($nom, $prenom, $email, $date_naiss, $tel, $etat_civil, $nationalite, $org_pro, $fonct_actu, $nb_an_entr) {

    $pdo = db_connect();

    $sql = "INSERT INTO candidat(nom, prenom, date_naissance, email, telephone, etat_civil, nationalite, org_pro, fonct_actu, nb_an_entr) VALUES (:nom,:prenom,:date_naissance,:email,:telephone,:etat_civil,:nationalite,:org_pro ,:fonct_actu ,:nb_an_entr)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':nom', $nom);
    $requete->bindValue(':prenom', $prenom);
    $requete->bindValue(':email',   $email);
    $requete->bindValue(':date_naissance',   $date_naiss);
    $requete->bindValue(':telephone',   $tel);
    $requete->bindValue(':etat_civil',   $etat_civil);
    $requete->bindValue(':nationalite',   $nationalite);
    $requete->bindValue(':org_pro',   $org_pro);
    $requete->bindValue(':fonct_actu',   $fonct_actu);
    $requete->bindValue(':nb_an_entr',   $nb_an_entr);

    //echo $requete->queryString;
    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}

/*******
 * fonction pour education
 */
function get_education($id_candidat){

}

function set_education($id_candidat,$etablissement,$diplome,$annee)
{
    $pdo = db_connect();

    $sql = "INSERT INTO education(id_candidat, etablissement, diplome, annee) VALUES (:id_candidat, :etablissement, :diplome, :annee)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id_candidat', $id_candidat);
    $requete->bindValue(':etablissement', $etablissement);
    $requete->bindValue(':diplome',   $diplome);
    $requete->bindValue(':annee',   $annee);

    //echo $requete->queryString;
    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}

/********
 *fonction pour expériences professionnels
 */

function get_exp_pro($id_candidat){

}
function set_exp_pro($id_candidat,$debut,$fin,$lieu,$societe,$ref_pers,$contact,$fonction,$description)
{
    $pdo = db_connect();

    $sql = "INSERT INTO  experience_pro(id_candidat, debut_exp, fin_exp, lieu, societe, ref_personne, contact, fonction, description) VALUES (:id_candidat, :debut_exp, :fin_exp, :lieu, :societe, :ref_personne, :contact, :fonction, :description)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id_candidat', $id_candidat);
    $requete->bindValue(':debut_exp',  $debut);
    $requete->bindValue(':fin_exp',  $fin);
    $requete->bindValue(':lieu',  $lieu);
    $requete->bindValue(':societe',  $societe);
    $requete->bindValue(':ref_personne',  $ref_pers);
    $requete->bindValue(':contact',  $contact);
    $requete->bindValue(':fonction',  $fonction);
    $requete->bindValue(':description',  $description);

    //echo $requete->queryString;
    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}

/********
 *fonction pour autres compétences
 */

function set_autre_competence($id_candidat,$competence)
{
    $pdo = db_connect();

    $sql = "INSERT INTO  autre_competence(id_candidat, competence) VALUES (:id_candidat, :competence)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id_candidat', $id_candidat);
    $requete->bindValue(':competence',  $competence);

    //echo $requete->queryString;
    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}
function get_autre_competence($id_candidat){

}

/********
 *fonction pour connaissances linguistiques
 */

function set_connaiss_lang($id_candidat,$langue,$lecture,$ecrit,$oral)
{
    $pdo = db_connect();

    $sql = "INSERT INTO connaissance_ling(id_candidat, langue, lecture, ecrit, oral) VALUES (:id_candidat, :langue, :lecture, :ecrit, :oral)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id_candidat', $id_candidat);
    $requete->bindValue(':langue',  $langue);
    $requete->bindValue(':lecture',   $lecture);
    $requete->bindValue(':ecrit',   $ecrit);
    $requete->bindValue(':oral',   $oral);

    //echo $requete->queryString;
    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}
function get_connaiss_lang($id_candidat){


}

/********
 *fonction pour expériences regions
 */

function set_exp_reg($id_candidat,$pays,$debut,$fin)
{
    $pdo = db_connect();

    $sql = "INSERT INTO  experience_region(id_candidat, pays, date_debut, date_fin) VALUES (:id_candidat, :pays, :date_debut, :date_fin)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id_candidat', $id_candidat);
    $requete->bindValue(':pays',  $pays);
    $requete->bindValue(':date_debut',  $debut);
    $requete->bindValue(':date_fin',  $fin);

    //echo $requete->queryString;
    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}
function get_exp_reg($id_candidat){

}

/********
 *fonction pour autres qualifications
 */

function set_qualification($id_candidat,$qualification)
{
    $pdo = db_connect();

    $sql = "INSERT INTO  qualification(id_candidat, qualification) VALUES (:id_candidat, :qualification)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id_candidat', $id_candidat);
    $requete->bindValue(':qualification',  $qualification);

    //echo $requete->queryString;
    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}
function get_qualification($id_candidat){

}

/********
 *fonction pour autres informations utiles
 */

function set_autre_info($id_candidat,$info)
{
    $pdo = db_connect();

    $sql = "INSERT INTO  autre_info(id_candidat, info) VALUES (:id_candidat, :info)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id_candidat', $id_candidat);
    $requete->bindValue(':info',  $info);

    //echo $requete->queryString;
    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}
function get_autre_info($id_candidat){

}

/*******
* fonction pour connaissance informatique
*/
function get_connaissance_info($id_candidat){

}

function set_connaissance_info($id_candidat,$outil,$niveau)
{
    $pdo = db_connect();

    $sql = "INSERT INTO connaissance_info(id_candidat, outil, niveau) VALUES (:id_candidat, :outil, :niveau)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id_candidat', $id_candidat);
    $requete->bindValue(':outil', $outil);
    $requete->bindValue(':niveau', $niveau);

    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}
/*******
* fonction pour association professionnelle
*/
function get_association_pro($id_candidat){

}

function set_association_pro($id_candidat,$nom_asso,$description,$siege)
{
    $pdo = db_connect();

    $sql = "INSERT INTO association_pro(id_candidat, nom_asso, description, siege) VALUES (:id_candidat, :nom_asso, :description, :siege)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id_candidat', $id_candidat);
    $requete->bindValue(':nom_asso', $nom_asso);
    $requete->bindValue(':description',   $description);
    $requete->bindValue(':siege',   $siege);

    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}

/*******
* fonction pour etude / projet
*/
function get_etude_projet($id_candidat){

}

function set_etude_projet($id_candidat,$domaine,$intitule,$responsabilite,$annee,$commandidaire,$lieu)
{
    $pdo = db_connect();

    $sql = "INSERT INTO etude_projet(id_candidat, domaine_expertise, intitule_etude, responsabilite, annee, commanditaire, lieu)
            VALUES (:id_candidat, :domaine_expertise, :intitule_etude, :responsabilite, :annee, :commanditaire, :lieu)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':id_candidat', $id_candidat);
    $requete->bindValue(':domaine_expertise', $domaine);
    $requete->bindValue(':intitule_etude',   $intitule);
    $requete->bindValue(':responsabilite',   $responsabilite);
    $requete->bindValue(':annee',   $annee);
    $requete->bindValue(':commanditaire',   $commandidaire);
    $requete->bindValue(':lieu',   $lieu);

    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}
