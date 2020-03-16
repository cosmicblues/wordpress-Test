var callBackGetSuccess = function (data) {
    console.log("donnees api", data)
    //alert("Meteo temp  : "  + data.main.temp);
    var element = document.getElementById("zone_meteo");
    element.innerHTML = "ville : " + data.city_info.name;
    var element = document.getElementById("zone_meteo1");
    element.innerHTML = "température actuelle : " + data.current_condition.tmp;
    var element = document.getElementById("zone_meteo2");
    element.innerHTML = "température j1 min : " + data.fcst_day_1.tmin;
    var element = document.getElementById("zone_meteo3");
    element.innerHTML = "température j2 min : " + data.fcst_day_2.tmin;
    var element = document.getElementById("zone_meteo4");
    element.innerHTML = "température j3 min : " + data.fcst_day_3.tmin;
    var element = document.getElementById("zone_meteo5");
    element.innerHTML = "température j4 min : " + data.fcst_day_4.tmin;
}


function buttonClickGET() {
    var queryLoc = document.getElementById("queryLoc").value;

    var url = "https://www.prevision-meteo.ch/services/json/" + queryLoc;

    $.get(url, callBackGetSuccess).done(function () {
        //alert( "second success" );
    })
        .fail(function () {
            alert("error");
        })
        .always(function () {
            //alert( "finished" );
        });
}
