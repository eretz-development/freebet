ajax_get_request(liste_result_hockey,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=NHL',"async");

function liste_result_hockey(data){
  var obj = JSON.parse(data);

  var valeur_result_nhl = document.getElementById("valeur_result_nhl").value;
  console.log(valeur_result_nhl);

  var id = obj.teams[valeur_result_nhl].idTeam;
  ajax_get_request(liste_result_hockey_team,'https://www.thesportsdb.com/api/v1/json/1/eventslast.php?id='+id,"async");

}

function liste_result_hockey_team(data){
  var obj = JSON.parse(data);

    modify_league_name();
    modify_team_name_hockey();

    document.getElementById("sport").value = "hockey";
    document.getElementById("league").value = league;
    document.getElementById("home_team").value = home_team;
    document.getElementById("home_team_result").value = obj.results[0].intHomeScore;
    document.getElementById("visit_team_result").value = obj.results[0].intAwayScore;
    document.getElementById("visit_team").value = away_team;
    document.getElementById("result").click();
}
