<!DOCTYPE html>
<html>
<head>
    <title>Tuto Meteo</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript"
            src="../wp-content/plugins/expertime-weather/admin/js/expertime-weather-admin.js"></script>
</head>
<body>

<div class='container'>
    <div class='row'>
        <h1 class="m-auto"> bonjour meteo</h1>
    </div>

    <input id="queryLoc" type="text" value="insérer une ville"/>
    <input type="button" value="APPEL API METEO" onclick="buttonClickGET()"/>
    <p id="zone_meteo"></p>
    <p id="zone_meteo1"></p>
    <p id="zone_meteo2"></p>
    <p id="zone_meteo3"></p>
    <p id="zone_meteo4"></p>
    <p id="zone_meteo5"></p>
</div>

</body>
</html>
