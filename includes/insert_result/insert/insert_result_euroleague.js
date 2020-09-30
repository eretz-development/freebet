ajax_get_request(liste_result_basket,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=EuroLeague%20Basketball',"async");

function liste_result_basket(data){
  var obj = JSON.parse(data);

  var valeur_result_euroleague = document.getElementById("valeur_result_euroleague").value;
  console.log(valeur_result_euroleague);

  var id = obj.teams[valeur_result_euroleague].idTeam;
  ajax_get_request(liste_result_basket_team,'https://www.thesportsdb.com/api/v1/json/1/eventslast.php?id='+id,"async");

}

function liste_result_basket_team(data){
  var obj = JSON.parse(data);

    modify_league_name();
    modify_team_name_basket();

    document.getElementById("sport").value = "basket";
    document.getElementById("league").value = league;
    document.getElementById("home_team").value = home_team;
    document.getElementById("home_team_result").value = obj.results[0].intHomeScore;
    document.getElementById("visit_team_result").value = obj.results[0].intAwayScore;
    document.getElementById("visit_team").value = away_team;
    document.getElementById("result").click();
}
