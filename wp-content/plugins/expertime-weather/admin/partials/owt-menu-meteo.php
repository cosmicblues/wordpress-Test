<div class='container'>
    <div class='row'>
        <h1 class="m-auto"> bonjour meteo</h1>
    </div>
    <div class="row m-auto">
        <div class='col-6 mt-5'>
            <button>Utiliser ma position actuelle</button>
        </div>

        <div class='col-6 mt-5'>
            <p>Entrez une adresse.</p>
            <form method=\"post\" action=\"https://www.prevision-meteo.ch/services/json/lat=46.259lng=5.235\">
                <input class="form-text" type=\"text\" name=\"meteo\">
                <input class="button mt-3" type='submit'>
            </form>
        </div>
    </div>
</div>


<?php

$json = file_get_contents('https://www.prevision-meteo.ch/services/json/lat=46.259lng=5.235');

$json = json_decode($json);

echo $json->city_info->latitude;

?>
