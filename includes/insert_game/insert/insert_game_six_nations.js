//////api test Inumerique2307@ : https://api.the-odds-api.com/v3/odds/?sport=rugbyunion_six_nations&region=us&apiKey=e10a7584bdff7319e5acbb974c974daf

ajax_get_request(liste_match_rugby,'https://api.the-odds-api.com/v3/odds/?sport=rugbyunion_six_nations&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");

function liste_match_rugby(data){
  var obj = JSON.parse(data);
  if (obj.data[0].sport_key == 'rugbyunion_six_nations') {
    var sport = 'rugby';
  }

    var valeur_match = document.getElementById("valeur_match_six_nations").value ;
    console.log(valeur_match);
    document.getElementById("sport").value = sport;
    document.getElementById("league").value = obj.data[valeur_match].sport_nice;
    document.getElementById("home_team").value = obj.data[valeur_match].teams[0];
    document.getElementById("home_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[0];
    document.getElementById("visit_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[1];
    document.getElementById("visit_team").value = obj.data[valeur_match].teams[1];
    document.getElementById("game").click();
}
