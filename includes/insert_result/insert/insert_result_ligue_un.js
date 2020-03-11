ajax_get_request(liste_result_foot,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=French%20Ligue%201',"async");

function liste_result_foot(data){
  var obj = JSON.parse(data);

  var valeur_result_ligue_un = document.getElementById("valeur_result_ligue_un").value;
  console.log(valeur_result_ligue_un);

  var id = obj.teams[valeur_result_ligue_un].idTeam;
  ajax_get_request(liste_result_foot_team,'https://www.thesportsdb.com/api/v1/json/1/eventslast.php?id='+id,"async");
  document.getElementById("result").click();
}

function liste_result_foot_team(data){
  var obj = JSON.parse(data);

    document.getElementById("sport").value = obj.results[0].strSport;
    document.getElementById("league").value = obj.results[0].strLeague;
    document.getElementById("home_team").value = obj.results[0].strHomeTeam;
    document.getElementById("home_team_result").value = obj.results[0].intHomeScore;
    document.getElementById("visit_team_result").value = obj.results[0].intAwayScore;
    document.getElementById("visit_team").value = obj.results[0].strAwayTeam;

}
