ajax_get_request(liste_result_rugby,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=Six%20Nations%20Championship',"async");

function liste_result_rugby(data){
  var obj = JSON.parse(data);

  var valeur_result_six_nations = document.getElementById("valeur_result_six_nations").value;
  console.log(valeur_result_six_nations);

  var id = obj.teams[valeur_result_six_nations].idTeam;
  ajax_get_request(liste_result_rugby_team,'https://www.thesportsdb.com/api/v1/json/1/eventslast.php?id='+id,"async");
}

function liste_result_rugby_team(data){
  var obj = JSON.parse(data);

    document.getElementById("sport").value = "rugby";
    document.getElementById("league").value = obj.results[0].strLeague;
    document.getElementById("home_team").value = obj.results[0].strHomeTeam;
    document.getElementById("home_team_result").value = obj.results[0].intHomeScore;
    document.getElementById("visit_team_result").value = obj.results[0].intAwayScore;
    document.getElementById("visit_team").value = obj.results[0].strAwayTeam;

    modify_league_name();
    modify_team_name_rugby();

    document.getElementById("result").click();
}
