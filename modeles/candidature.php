<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 09/10/2017
 * Time: 14:20
 */
require_once"connexion.php";

function ajouter_candidature($id_candidat, $id_offre, $id_type_candidature, $id_type_offre)
{

    $pdo = db_connect();

    $sql = "INSERT INTO candidature(candidat, offre, type, type_offre) VALUES (:candidat,:offre,:type,:type_offre)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':candidat', $id_candidat);
    $requete->bindValue(':offre', $id_offre);
    $requete->bindValue(':type',   $id_type_candidature);
    $requete->bindValue(':type_offre',   $id_type_offre);

    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}

function liste_candidature()
{
    $pdo = db_connect();
    $sql = "SELECT candidature.id as id_cdture, candidat.nom as nom_cd, candidat.prenom as prenom_cd, etat_candidature.libelle as lib_etat
            FROM candidature INNER JOIN candidat INNER JOIN etat_candidature
            on candidature.candidat = candidat.id and candidature.etat = etat_candidature.etat";

    try
    {
        $requete = $pdo->prepare($sql);
        $requete->execute();
        return ($requete);
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
    return FALSE;
}

function liste_candidature_etat($etat)
{
    $pdo = db_connect();
    $sql = "SELECT candidature.id as id_cdture, candidature.etat as etat, candidat.nom as nom_cd, candidat.prenom as prenom_cd, etat_candidature.libelle as lib_etat
            FROM candidature INNER JOIN candidat INNER JOIN etat_candidature
            on candidature.candidat = candidat.id and candidature.etat = etat_candidature.etat
            WHERE candidature.etat = $etat";

    try
    {
        $requete = $pdo->prepare($sql);
        $requete->execute();
        return ($requete);
    }
    catch(PDOException $ex)
    {
        echo $ex->getMessage();
    }
    return FALSE;
}

function mod_etat_candidature($id_cand, $val_etat)
{
    $dbh = db_connect();
        $dbh->beginTransaction();
        $sth = $dbh->prepare("UPDATE candidature SET etat = :etat WHERE id = :id");
        $sth->bindValue(':id', $id_cand);
        $sth->bindValue(':etat', $val_etat);

    if ($sth->execute()) {

        return $dbh->lastInsertId();
    }
    return $sth->errorInfo();

}