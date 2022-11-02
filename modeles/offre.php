<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 02/10/2017
 * Time: 14:54
 */

require_once"connexion.php";
function ajouter_offre($admin,$type,$etat,$poste,$contenu,$projet,$date_exp){

    $pdo = db_connect();
    $date = date("Y-m-d,G:i:s a");

    $sql = "INSERT INTO offre(admin,type,etat,poste,contenu,projet,date_publication,date_expiration) VALUES (:admin,:type,:etat,:poste,:contenu,:projet,:date_publication,:date_expiration)";

    $requete = $pdo->prepare($sql);

    $requete->bindValue(':admin', $admin);
    $requete->bindValue(':type', $type);
    $requete->bindValue(':etat', $etat);
    $requete->bindValue(':poste', $poste);
    $requete->bindValue(':contenu', $contenu);
    $requete->bindValue(':projet', $projet);
    $requete->bindValue(':date_publication', $date);
    $requete->bindValue(':date_expiration', $date_exp);

    //echo $requete->queryString;
    if ($requete->execute()) {

        return $pdo->lastInsertId();
    }
    return $requete->errorInfo();
}

function afficher_offre($etat){
    $pdo = db_connect();
    //$sql = "SELECT * FROM offre ORDER BY date_publication DESC";
    $sql = "SELECT offre.id as id_offre, offre.poste, offre.date_publication, offre.date_expiration, offre.contenu, type_offre.libelle, type_offre.id as id_type_offre
            FROM offre INNER JOIN type_offre
            on offre.type = type_offre.id
            where offre.etat = $etat
            ORDER BY date_publication DESC";

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

