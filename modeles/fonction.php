<?php
/**
 * Created by PhpStorm.
 * User: Miss Mhv
 * Date: 23/10/2017
 * Time: 11:25
 */

/*
 * Fpnction pour afficher le "R�sum� brut" d'un texte en fonction du nombre de caract�res
 */
function texte_resume_brut($texte, $nbreCar)
{
    $texte 				= trim(strip_tags($texte)); // suppression des balises HTML
    if(is_numeric($nbreCar))
    {
        $PointSuspension	= '...'; // points de suspension (ou '' si vous n'en voulez pas)
        // ---------------------
        // COUPE DU TEXTE pour le R�SUM�
        // ajout d'un espace de fin au cas o� le texte n'en contiendrait pas...
        $texte			.= ' ';
        $LongueurAvant		= strlen($texte);
        if ($LongueurAvant > $nbreCar) {
            // pour ne pas couper un mot, on va � l'espace suivant
            $texte = substr($texte, 0, strpos($texte, ' ', $nbreCar));
            // On ajoute (ou pas) des points de suspension � la fin si le texte brut est plus long que $nbreCar
            if ($PointSuspension!='') {
                $texte	.= $PointSuspension;
            }
        }
        // ---------------------
    }
    // On renvoie le r�sum� du texte correctement format�.
    return $texte;
};

/*
 * Fpnction pour afficher le "R�sum� html" d'un texte en fonction du nombre de caract�res. Contrairement � la fonction pr�c�dente, celle-ci concerve les balises html
 */

function texte_resume_html($texte, $nbreCar)
{
    if(is_numeric($nbreCar))
    {
        $PointSuspension		= '...'; // points de suspension (ou '' si vous n'en voulez pas)
        // ---------------------
        // longueur du texte brut, sans HTML (avant traitement)
        $LongueurAvantSansHtml	= strlen(trim(strip_tags($texte)));
        // ---------------------
        // MASQUE de l'expression r�guli�re
        // ---------------------
        $MasqueHtmlSplit		= '#</?([a-zA-Z1-6]+)(?: +[a-zA-Z]+="[^"]*")*( ?/)?>#';
        $MasqueHtmlMatch		= '#<(?:/([a-zA-Z1-6]+)|([a-zA-Z1-6]+)(?: +[a-zA-Z]+="[^"]*")*( ?/)?)>#';
        // ---------------------
        // Explication du masque : recherche de TOUTES les balises HTML
        // ---------------
        // d�tail : </?([a-zA-Z1-6]+)
        // recherche de chaines commen�ant par un <
        // suivi optionnellement d'un / (==> balises "fermantes")
        // suivi de (caract�res alphab�tiques (insensibles � la casse) ou num�riques (1 � 6)) au moins une fois
        // Suivi optionnellement (0, 1 fois ou plus) par un ou plusieurs attributs et leur valeur :
        // ---------------
        // d�tail : (?: +[a-zA-Z]+="[^"]*")*
        // caract�re espace une fois ou plus [space]+
        // suivi d'au moins un caract�re alphab�tique [a-zA-Z]+
        // suivi d'un =
        // suivi d'une paire de guillemets contenant optionnellement (0, 1 fois ou plus) tout caract�re autre que guillemet "[^"]*"
        // ---------------
        // d�tail : ( ?/)?
        // caract�re espace optionnel [space]?
        // suivi optionnellement d'un slash / (==> balises "orphelines")
        // NB : un :? suivant une parenth�se ouvrante signifie que l'on ne capture pas la parenth�se

        // ---------------------
        // RECHERCHE DU TEXTE DU R�SUM�
        // ---------------------
        // ajout d'un espace de fin au cas o� le texte n'en contiendrait pas...
        $texte					.= ' ';
        // ---------------------
        // Capture de tous les bouts de texte (en dehors des balises HTML)
        $BoutsTexte				= preg_split($MasqueHtmlSplit, $texte, -1,  PREG_SPLIT_OFFSET_CAPTURE | PREG_SPLIT_NO_EMPTY);
        // ---------------------
        // Explication preg_split : voir http://fr.php.net/manual/fr/function.preg-split.php
        // => on obtient un tableau (array) :
        // $BoutsTexte[xx][0] : le bout de texte
        // $BoutsTexte[xx][1] : sa position (dans la chaine)
        // ---------------------
        // Nombre d'�l�ments du tableau
        $NombreBouts			= count($BoutsTexte);

        // ---------------------
        // CALCUL de la POSITION de la coupe
        // ---------------------
        // Si seulement un seul �l�ment dans l'array, c'est que le texte ne contient pas de balises :
        // on renvoie directement le texte tronqu�
        if( $NombreBouts == 1 )
        {
            $texte				.= ' ';
            $LongueurAvant		= strlen($texte);
            $texte 				= substr($texte, 0, strpos($texte, ' ', $LongueurAvant > $nbreCar ? $nbreCar : $LongueurAvant));
            if ($PointSuspension!='' && $LongueurAvant > $nbreCar) {
                $texte			.= $PointSuspension;
            }
        } else {
            // ---------------------
            // Variable contenant la longueur des bouts de texte
            $longueur				= 0;
            // ---------------------
            // (position du dernier �l�ment du tableau $chaines)
            $indexDernierBout		= $NombreBouts - 1;
            // ---------------------
            // Position par d�faut de la c�sure au cas o� la longueur du texte serait inf�rieure au nombre de caract�res � s�lectionner
            // La position de la c�sure est �gale � sa position [1] + la longueur du bout de texte [0] - 1 (dernier caract�re)
            $position				= $BoutsTexte[$indexDernierBout][1] + strlen($BoutsTexte[$indexDernierBout][0]) - 1;
            // ---------------------
            $indexBout				= $indexDernierBout;
            $rechercheEspace		= true;
            // ---------------------
            // Boucle parcourant l'array et ayant pour fonction d'incr�menter au fur et � mesure la longueur des morceaux de texte,
            // et de calculer la position de c�sure de l'extrait dans le texte
            foreach( $BoutsTexte as $index => $bout )
            {
                $longueur += strlen($bout[0]);
                // Si la longueur d�sir�e de l'extrait � obtenir est atteinte
                if( $longueur >= $nbreCar )
                {
                    // On calcule la position de c�sure du texte (position de cha�ne + sa longueur -1 )
                    $position_fin_bout = $bout[1] + strlen($bout[0]) - 1;
                    // calcul de la position de c�sure
                    $position = $position_fin_bout - ($longueur - $nbreCar);
                    // On regarde si un espace est pr�sent apr�s la position dans le bout de texte
                    if( ($positionEspace = strpos($bout[0], ' ', $position - $bout[1])) !== false  )
                    {
                        // Un espace est d�tect� dans le bout de texte APR�S la position
                        $position	= $bout[1] + $positionEspace;
                        $rechercheEspace = false;
                    }
                    // Si on ne se trouve pas sur le dernier �l�ment
                    if( $index != $indexDernierBout )
                        $indexBout	= $index + 1;
                    break;
                }
            }
            // ---------------------
            // Donc il n'y avait pas d'espace dans le bout de texte o� la position de c�sure sert de r�f�rence
            if( $rechercheEspace === true )
            {
                // Recherche d'un espace dans les bouts de texte suivants
                for( $i=$indexBout; $i<=$indexDernierBout; $i++ )
                {
                    $position = $BoutsTexte[$i][1];
                    if( ($positionEspace = strpos($BoutsTexte[$i][0], ' ')) !== false )
                    {
                        $position += $positionEspace;
                        break;
                    }
                }
            }
            // ---------------------
            // COUPE DU TEXTE pour le R�SUM�
            // ---------------------
            // On effectue la c�sure sur le texte suivant la position calcul�e
            $texte					= substr($texte, 0, $position);

            // ---------------------
            // RECHERCHE DES BALISES HTML
            // ---------------------
            // R�cup�ration de toutes les balises du texte et de leur position (PREG_OFFSET_CAPTURE)
            preg_match_all($MasqueHtmlMatch, $texte, $retour, PREG_OFFSET_CAPTURE);
            // ---------------------
            // Explication preg_match_all : voir http://fr.php.net/manual/fr/function.preg-match-all.php
            // $retour[0][xx][0] contient la balise HTML enti�re
            // $retour[0][xx][1] contient la position de la balise HTML enti�re
            // $retour[1][xx][0] contient le nom de la balise HTML fermante $rechercheEspace
            // $retour[2][xx][0] contient le nom de la balise HTML ouvrante
            // $retour[3][xx][0] contient le slash de fermeture de balise unique (cette variable n'existe pas si la balise n'est pas unique)
            // ---------------------
            // Array destin� � enregistrer les noms de balises ouvrantes
            $BoutsTag				= array();
            // ---------------------
            foreach( $retour[0] as $index => $tag )
            {
                // Si on se trouve sur une balise unique, on passe au tour suivant
                if( isset($retour[3][$index][0]) )
                {
                    continue;
                }
                // Si le caract�re slash n'est pas d�tect� en seconde position dans la balise enti�re, on est sur une balise ouvrante
                if( $retour[0][$index][0][1] != '/' )
                {
                    // On empile l'�l�ment en d�but de l'array
                    array_unshift($BoutsTag, $retour[2][$index][0]);
                }
                // Donc balise fermante
                else
                {
                    // suppression du premier �l�ment de l'array
                    array_shift($BoutsTag);
                }
            }
            // ---------------------
            // R�PARATION des balises HTML
            // ---------------------
            // Il reste des tags � fermer ?
            // balises ouvertes, mais non ferm�es : on ajoute les balises fermantes � la fin du texte
            if( !empty($BoutsTag) )
            {
                foreach( $BoutsTag as $tag )
                {
                    $texte		.= '</'.$tag.'>';
                }
            }
            // ---------------------
            // On ajoute (ou pas) des points de suspension � la fin si le texte brut est plus long que $nbreCar
            if ($PointSuspension!='' && $LongueurAvantSansHtml > $nbreCar) {
                // si les points de suspension sont apr�s une(des) balise(s) fermante(s),
                // on les "remonte" jusqu'� l'int�rieur de la balise non-vide la plus proche (ici jusqu'� 5 niveaux de balises).
                // Explication du masque : ((</[^>]*>[\n\t\r ]*)?
                // </[^>]*>			: toute balise fermante
                // [\n\t\r ]*		: passage(s) � la ligne/tabulation(s)/espace(s)
                $texte				.= 'ReplacePointSuspension';
                $pattern			= '#((</[^>]*>[\n\t\r ]*)?(</[^>]*>[\n\t\r ]*)?(</[^>]*>[\n\t\r ]*)?(</[^>]*>[\n\t\r ]*)?(</[^>]*>)[\n\t\r ]*ReplacePointSuspension)#i';
                $texte				= preg_replace($pattern, $PointSuspension.'${2}${3}${4}${5}${6}', $texte);
            }
        }
    }
    // ---------------------
    // On renvoie le r�sum� du texte correctement format�.
    return $texte;
};