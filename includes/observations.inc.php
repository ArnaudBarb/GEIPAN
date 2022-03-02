<h1>observation d'évènement</h1>
<?php

if (isset($_POST['validation'])) {
    $date = htmlentities(trim($_POST['date'])) ?? '';
    $time = htmlentities(trim($_POST['time'])) ?? '';
    $place = htmlentities($_POST['place']) ?? '';
    $direction = trim($_POST['direction']) ?? '';
    $meteo = trim($_POST['meteo']) ?? '';
    $observation = htmlentities(trim($_POST['observation'])) ?? '';
    $idState = 1;

    $erreur = array();

    if (html_entity_decode($date) === 0)
        array_push($erreur, "Veuillez saisir une date d'observation");
    else
        $date = html_entity_decode($date);

        if (html_entity_decode($time) === 0)
        array_push($erreur, "Veuillez saisir une durée d'observation");
    else
        $time = html_entity_decode($time);

        if (html_entity_decode($meteo) === 0)
        array_push($erreur, "Veuillez saisir les conditions météorologiques");
    else
        $meteo = html_entity_decode($meteo);

    if (strlen($observation) === 0)
        array_push($erreur, "Veuillez décrire l'évènement");
    else
        $observation = html_entity_decode($observation);

    if (count($erreur) === 0) {

        try 
        {
            $conn = connPdo();

            $query = $conn->prepare("
            INSERT INTO observations(obsDateTime, obsDuration, obsLocation, obsCardinalPoint,
                                        obsWeather,obsDescription, id_state)
            VALUES (:date, :time, :place, :direction, :meteo, :observation, :id_state)
            ");

            $query->bindParam(':date', $date, PDO::PARAM_STR_CHAR);
            $query->bindParam(':time', $time, PDO::PARAM_STR_CHAR);
            $query->bindParam(':place', $place, PDO::PARAM_STR_CHAR);
            $query->bindParam(':direction', $direction, PDO::PARAM_STR_CHAR);
            $query->bindParam(':meteo', $meteo, PDO::PARAM_STR_CHAR);
            $query->bindParam(':observation', $observation, PDO::PARAM_STR_CHAR);
            $query->bindParam(':id_state', $idState, PDO::PARAM_STR_CHAR);

            $query->execute();
            
            echo "<p>Insertions effectuées</p>";
        
        } catch (PDOException $e) {
            die("Erreur :  " . $e->getMessage());
        }
        $conn = null;

    } else {
        $messageErreur = retourErreur($erreur);
        include 'frmObservations.php';
    }
} 
else 
{
    echo "<h2>Merci de renseigner le formulaire&nbsp;:</h2>";
    $date = $time = $meteo = $observation = '';
    include 'frmObservations.php';
    
}
    
