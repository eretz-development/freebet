// $.ajax({
//         url: "https://api.the-odds-api.com/v3/odds/?sport=soccer_epl&region=uk&apiKey=018b31a7ef1004a664f06cc342142c14",
//         type: 'GET',
//         dataType: 'json', // added data type
//         success: function(res) {
//           var table = document.getElementById("table");
//
//           for (var i in res) {
//               for (var j in res[i]) {
//                 var newTr = document.createElement("tr");
//                 for (var x in res[i][j]) {
//                       var newTd = document.createElement("td");
//                       if (x == 'sites') {
//                         for (var y in res[i][j][x]) {
//                           for (var z in res[i][j][x][y]) {
//                             for (var a in res[i][j][x][y][z]) {
//                               newTd.textContent = res[i][j][x][y][z][a];
//                             }
//                           }
//                         }
//                       } else {
//                         newTd.textContent = res[i][j][x];
//                       }
//                       newTr.appendChild(newTd);
//                       table.appendChild(newTr);
//                       //console.log(res[i][j][x]);
//                 }
//               }
//           }
//         }
//     });
//////////BASKET//////////
 ajax_get_request(liste_result_basket,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=NBA',"async");
// ajax_get_request(liste_result_basket,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=EuroLeague%20Basketball',"async");
// ajax_get_request(liste_result_basket,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=NCAA%20Division%20I%20Basketball%20Mens',"async");
//
// //////////HOCKEY//////////
// ajax_get_request(liste_result_hockey,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=NHL',"async");
//
// //////////RUGBY//////////
// ajax_get_request(liste_result_rugby,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=Six%20Nations%20Championship',"async");
//
// //////////SOCCER//////////
// ajax_get_request(liste_result_foot,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=English%20Premier%20League',"async");
// ajax_get_request(liste_result_foot,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=German%20Bundesliga',"async");
// ajax_get_request(liste_result_foot,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=Italian%20Serie%20A',"async");
// ajax_get_request(liste_result_foot,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=French%20Ligue%201',"async");
// ajax_get_request(liste_result_foot,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=Spanish%20La%20Liga',"async");
// ajax_get_request(liste_result_foot,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=UEFA%20Champions%20League',"async");
// ajax_get_request(liste_result_foot,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=UEFA%20Europa%20League',"async");
//
// //////////FOOTA//////////
// ajax_get_request(liste_result_foot_americain,'https://www.thesportsdb.com/api/v1/json/1/search_all_teams.php?l=NFL',"async");


function liste_result_basket(data){
  var obj = JSON.parse(data);

  var valeur_match = document.getElementById("valeur_match").value;
  console.log(valeur_match);

  var id = obj.teams[valeur_match].idTeam;
  ajax_get_request(liste_result_basket_team,'https://www.thesportsdb.com/api/v1/json/1/eventslast.php?id='+id,"async");
  document.getElementById("result").click();
}

function liste_result_basket_team(data){
  var obj = JSON.parse(data);

    document.getElementById("sport").value = obj.results[0].strSport;
    document.getElementById("league").value = obj.results[0].strLeague;
    document.getElementById("home_team").value = obj.results[0].strHomeTeam;
    document.getElementById("home_team_result").value = obj.results[0].intHomeScore;
    document.getElementById("visit_team_result").value = obj.results[0].intAwayScore;
    document.getElementById("visit_team").value = obj.results[0].strAwayTeam;

}

function liste_result_hockey(data){
  var obj = JSON.parse(data);

  var valeur_match = document.getElementById("valeur_match").value;
  console.log(valeur_match);

  var id = obj.teams[valeur_match].idTeam;
  ajax_get_request(liste_result_hockey_team,'https://www.thesportsdb.com/api/v1/json/1/eventslast.php?id='+id,"async");
  document.getElementById("result").click();
}

function liste_result_hockey_team(data){
  var obj = JSON.parse(data);

    document.getElementById("sport").value = obj.results[0].strSport;
    document.getElementById("league").value = obj.results[0].strLeague;
    document.getElementById("home_team").value = obj.results[0].strHomeTeam;
    document.getElementById("home_team_result").value = obj.results[0].intHomeScore;
    document.getElementById("visit_team_result").value = obj.results[0].intAwayScore;
    document.getElementById("visit_team").value = obj.results[0].strAwayTeam;

}

function liste_result_foot_americain(data){
  var obj = JSON.parse(data);

  var valeur_match = document.getElementById("valeur_match").value;
  console.log(valeur_match);

  var id = obj.teams[valeur_match].idTeam;
  ajax_get_request(liste_result_foot_americain_team,'https://www.thesportsdb.com/api/v1/json/1/eventslast.php?id='+id,"async");
  document.getElementById("result").click();
}

function liste_result_foot_americain_team(data){
  var obj = JSON.parse(data);

    document.getElementById("sport").value = obj.results[0].strSport;
    document.getElementById("league").value = obj.results[0].strLeague;
    document.getElementById("home_team").value = obj.results[0].strHomeTeam;
    document.getElementById("home_team_result").value = obj.results[0].intHomeScore;
    document.getElementById("visit_team_result").value = obj.results[0].intAwayScore;
    document.getElementById("visit_team").value = obj.results[0].strAwayTeam;

}

function liste_result_rugby(data){
  var obj = JSON.parse(data);

  var valeur_match = document.getElementById("valeur_match").value;
  console.log(valeur_match);

  var id = obj.teams[valeur_match].idTeam;
  ajax_get_request(liste_result_rugby_team,'https://www.thesportsdb.com/api/v1/json/1/eventslast.php?id='+id,"async");
  document.getElementById("result").click();
}

function liste_result_rugby_team(data){
  var obj = JSON.parse(data);

    document.getElementById("sport").value = obj.results[0].strSport;
    document.getElementById("league").value = obj.results[0].strLeague;
    document.getElementById("home_team").value = obj.results[0].strHomeTeam;
    document.getElementById("home_team_result").value = obj.results[0].intHomeScore;
    document.getElementById("visit_team_result").value = obj.results[0].intAwayScore;
    document.getElementById("visit_team").value = obj.results[0].strAwayTeam;

}

function liste_result_foot(data){
  var obj = JSON.parse(data);

  var valeur_match = document.getElementById("valeur_match").value;
  console.log(valeur_match);

  var id = obj.teams[valeur_match].idTeam;
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
