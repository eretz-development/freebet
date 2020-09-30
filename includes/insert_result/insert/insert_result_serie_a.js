ajax_get_request(liste_result_foot,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=Italian%20Serie%20A',"async");

function liste_result_foot(data){
  var obj = JSON.parse(data);

  var valeur_result_serie_a = document.getElementById("valeur_result_serie_a").value;
  console.log(valeur_result_serie_a);

  var id = obj.teams[valeur_result_serie_a].idTeam;
  ajax_get_request(liste_result_foot_team,'https://www.thesportsdb.com/api/v1/json/1/eventslast.php?id='+id,"async");
}

function liste_result_foot_team(data){
  var obj = JSON.parse(data);

    modify_league_name();
    modify_team_name_soccer();

    document.getElementById("sport").value = "foot";
    document.getElementById("league").value = league;
    document.getElementById("home_team").value = home_team;
    document.getElementById("home_team_result").value = obj.results[0].intHomeScore;
    document.getElementById("visit_team_result").value = obj.results[0].intAwayScore;
    document.getElementById("visit_team").value = away_team;
    document.getElementById("result").click();
}
