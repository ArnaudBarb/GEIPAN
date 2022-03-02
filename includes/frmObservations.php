<form action="index.php?page=observation" method="post">
    <ul>
        <li>
            <label for="bio">Observation d'évenement :</label>
            <textarea id="observation" name="observation"  value="<?php echo $observation;?>"></textarea>
        </li>
        <li>
            <label for="timeStamp">Date et heure de l'évènement :</label>
            <input type="date" name="date" id="date" value="<?php echo $date;?>">
        </li>
        <li>
            <label for="time">Durée de l'évènement :</label>
            <input type="time" name="time" id="time" value="<?php echo $time?>;">
        </li>
        <li>
            <label for="place">lieu :</label>
            <input type="time" name="time" id="time" value="<?php echo $time?>;">
        </li>
        <li>
            <input type="reset" value="Effacer" />
            <input type="submit" value="S'inscrire" name="inscription" />
        </li>
    </ul>
</form>