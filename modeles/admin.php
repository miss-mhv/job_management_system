<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 23/08/2017
 * Time: 10:12
 */
require_once"connexion.php";
function combinaison_connexion_valide($nom_utilisateur, $mot_de_passe) {

    $pdo = db_connect();

    $requete = $pdo->prepare("SELECT id FROM admin
		WHERE
		pseudo = :nom_utilisateur AND
		mot_de_passe = :mot_de_passe ");

    $requete->bindValue(':nom_utilisateur', $nom_utilisateur);
    $requete->bindValue(':mot_de_passe', $mot_de_passe);
    $requete->execute();

    if ($result = $requete->fetch(PDO::FETCH_ASSOC)) {

        $requete->closeCursor();
        return $result['id'];
    }
    return false;
}

function lire_infos_utilisateur($id_utilisateur) {

    $pdo = db_connect();

    $requete = $pdo->prepare("SELECT pseudo, mot_de_passe, email
		FROM admin
		WHERE
		id = :id_utilisateur");

    $requete->bindValue(':id_utilisateur', $id_utilisateur);
    $requete->execute();

    if ($result = $requete->fetch(PDO::FETCH_ASSOC)) {

        $requete->closeCursor();
        return $result;
    }
    return false;
}
