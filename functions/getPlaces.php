<?php

function getPlaces()
{
    $conn = connPdo();
    
    $requete = $conn->prepare("SELECT * FROM departement ORDER BY name ASC");
    $requete -> execute();
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    
        $html = "<select name='place[]'>";
        for ($i = 0 ; $i < count($resultat) ; $i++) {
                $html .= "<option value='" . $resultat[$i]['code'] . "'>";
                $html .= $resultat[$i]['name'] . " - " . $resultat[$i]['code'];
                $html .= "</option>";
            }
        $html .= "</select>";
        return $html;
}