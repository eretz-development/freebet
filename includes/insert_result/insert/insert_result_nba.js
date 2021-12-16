ajax_get_request(liste_result_basket,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=NBA',"async");

function liste_result_basket(data){
  var obj = JSON.parse(data);

  var valeur_result_nba = document.getElementById("valeur_result_nba").value;
  console.log(valeur_result_nba);

  var id = obj.teams[valeur_result_nba].idTeam;
  ajax_get_request(liste_result_basket_team,'https://www.thesportsdb.com/api/v1/json/1/eventslast.php?id='+id,"async");
}

function liste_result_basket_team(data){
  var obj = JSON.parse(data);

    document.getElementById("sport").value = "basket";
    document.getElementById("league").value = obj.results[0].strLeague;
    document.getElementById("home_team").value = obj.results[0].strHomeTeam;
    document.getElementById("home_team_result").value = obj.results[0].intHomeScore;
    document.getElementById("visit_team_result").value = obj.results[0].intAwayScore;
    document.getElementById("visit_team").value = obj.results[0].strAwayTeam;

    modify_league_name();
    modify_team_name_basket();

    document.getElementById("result").click();
}
