//////api test Inumerique2307@ : https://api.the-odds-api.com/v3/odds/?sport=soccer_spain_la_liga&region=us&apiKey=e10a7584bdff7319e5acbb974c974daf

 ajax_get_request(liste_match_foot,'https://api.the-odds-api.com/v3/odds/?sport=soccer_spain_la_liga&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");

function liste_match_foot(data){
  var obj = JSON.parse(data);
  if (obj.data[0].sport_key == 'soccer_spain_la_liga') {
    var sport = 'foot';
  }

  var valeur_match = document.getElementById("valeur_match_la_liga").value ;
  console.log(valeur_match);

  if (obj.data[valeur_match].home_team == obj.data[valeur_match].teams[0]){
    var home_team = obj.data[valeur_match].teams[0];
    var visit_team = obj.data[valeur_match].teams[1];

    var home_team_odd = obj.data[valeur_match].sites[0].odds.h2h[0];
    var visit_team_odd = obj.data[valeur_match].sites[0].odds.h2h[1];

  } else if (obj.data[valeur_match].home_team == obj.data[valeur_match].teams[1]){
    var home_team = obj.data[valeur_match].teams[1];
    var visit_team = obj.data[valeur_match].teams[0];

    var home_team_odd = obj.data[valeur_match].sites[0].odds.h2h[1];
    var visit_team_odd = obj.data[valeur_match].sites[0].odds.h2h[0];
  }

  var game_time_start = obj.data[valeur_match].commence_time;

    document.getElementById("sport").value = sport;
    document.getElementById("league").value = obj.data[valeur_match].sport_nice;
    document.getElementById("home_team").value = home_team;
    document.getElementById("home_team_odd").value = home_team_odd;
    document.getElementById("tie_game_odd").value = obj.data[valeur_match].sites[0].odds.h2h[2];
    document.getElementById("visit_team_odd").value = visit_team_odd;
    document.getElementById("visit_team").value = visit_team;
    document.getElementById("date_game").value = game_time_start;

      modify_league_name();
      modify_team_name_soccer();

    document.getElementById("game").click();
}
