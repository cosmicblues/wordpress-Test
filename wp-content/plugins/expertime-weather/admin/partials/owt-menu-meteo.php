<!DOCTYPE html>
<html>
<head>
    <title>Tuto Meteo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="meteo.js"></script>
</head>
<body>

<div class='container'>
    <div class='row'>
        <h1 class="m-auto"> bonjour meteo</h1>
    </div>

    <input id="queryLoc" type="text" value="Paris,fr"/>
    <input type="button" value="APPEL API METEO" onclick="buttonClickGET()"/>
    <p id="zone_meteo">toto</p>
</div>


</body>
</html>
