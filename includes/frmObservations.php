<form action="index.php?page=observations" method="post">
    <ul>
        <li>
            <label for="timeStamp">Date et heure de l'évènement :</label>
            <input type="date" name="date" id="date" value="<?php echo $date;?>">
        </li>
        <li>
            <label for="time">Durée de l'évènement :</label>
            <input type="time" name="time" id="time" value="<?php echo $time?>;">
        </li>
        <li>
            <label for="place">lieu de l'observation :</label>
            <?php echo getPlaces();?>
        </li>
        <li>
            <label for="direction">Trajectoire observée :</label>
            <select name="direction" id="direction" label="<?php echo $direction?>;">
                <option value="nord">N</option>
                <option value="nordest">NE</option>
                <option value="nordouest">NO</option>
                <option value="sud">S</option>
                <option value="sudest">SE</option>
                <option value="sudouest">SO</option>
                <option value="est">E</option>
                <option value="ouest">O</option>
            </select>
        </li>
        <li>
            <label for="meteo">Conditions météorologiques(0= ciel dégagé, 8=ciel couvert) :</label>
            <input type="number" name="meteo" id="meteo" value="<?php echo $meteo;?>" min="0" max="8">
        </li>
        <li>
            <label for="observation">Observation d'évenement :</label>
            <textarea id="observation" name="observation"  value="<?php echo $observation;?>"></textarea>
        </li>
        <li>
            <input type="reset" value="Effacer" />
            <input type="submit" value="Valider le formulaire" name="validation" />
        </li>
    </ul>
</form>