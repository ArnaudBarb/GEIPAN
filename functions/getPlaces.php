<?php

function getPlaces()
{
    $conn = connPdo();
    
    $requete = $conn->prepare("SELECT * FROM states ORDER BY id_state ASC");
    $requete -> execute();
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    
        $html = "<select name='place'>";
        for ($i = 0 ; $i < count($resultat) ; $i++) 
        {
            $html .= "<option value='" . $resultat[$i]['stateNumber'] . "'>";
            $html .= $resultat[$i]['stateNumber'] . " - " . $resultat[$i]['stateLabel'];
            $html .= "</option>";
        }
        $html .= "</select>";

        return $html;        
}