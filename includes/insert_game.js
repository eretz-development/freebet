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

//////api test Inumerique2307@ : https://api.the-odds-api.com/v3/odds/?sport=basketball_nba&region=us&apiKey=e10a7584bdff7319e5acbb974c974daf

//////////BASKET//////////
//ajax_get_request(liste_match_basket,'https://api.the-odds-api.com/v3/odds/?sport=basketball_euroleague&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");
ajax_get_request(liste_match_basket,'https://api.the-odds-api.com/v3/odds/?sport=basketball_nba&region=us&apiKey=e10a7584bdff7319e5acbb974c974daf',"async");
//ajax_get_request(liste_match_basket,'https://api.the-odds-api.com/v3/odds/?sport=basketball_ncaab&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");

//////////HOCKEY//////////
// ajax_get_request(liste_match_hockey,'https://api.the-odds-api.com/v3/odds/?sport=icehockey_nhl&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");

// //////////RUGBY//////////
// ajax_get_request(liste_match_rugby,'https://api.the-odds-api.com/v3/odds/?sport=rugbyunion_six_nations&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");

// //////////SOCCER//////////
// ajax_get_request(liste_match_foot,'https://api.the-odds-api.com/v3/odds/?sport=soccer_epl&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");
// ajax_get_request(liste_match_foot,'https://api.the-odds-api.com/v3/odds/?sport=soccer_france_ligue_one&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");
// ajax_get_request(liste_match_foot,'https://api.the-odds-api.com/v3/odds/?sport=soccer_germany_bundesliga&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");
// ajax_get_request(liste_match_foot,'https://api.the-odds-api.com/v3/odds/?sport=soccer_italy_serie_a&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");
// ajax_get_request(liste_match_foot,'https://api.the-odds-api.com/v3/odds/?sport=soccer_spain_la_liga&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");
// ajax_get_request(liste_match_foot,'https://api.the-odds-api.com/v3/odds/?sport=soccer_uefa_champs_league&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");
// ajax_get_request(liste_match_foot,'https://api.the-odds-api.com/v3/odds/?sport=soccer_uefa_europa_league&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");

// //////////FOOTA//////////
// ajax_get_request(liste_match_footam,'https://api.the-odds-api.com/v3/odds/?sport=americanfootball_nfl&region=us&apiKey=018b31a7ef1004a664f06cc342142c14',"async");

function liste_match_basket(data){
  var obj = JSON.parse(data);
  if (obj.data[0].sport_key == 'basketball_euroleague' || obj.data[0].sport_key == 'basketball_nba' || obj.data[0].sport_key == 'basketball_ncaab') {
    var sport = 'basket';
  }

    var valeur_match = document.getElementById("valeur_match").value ;
    console.log(valeur_match);
    document.getElementById("sport").value = sport;
    document.getElementById("league").value = obj.data[valeur_match].sport_nice;
    document.getElementById("home_team").value = obj.data[valeur_match].teams[0];
    document.getElementById("home_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[0];
    document.getElementById("visit_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[1];
    document.getElementById("visit_team").value = obj.data[valeur_match].teams[1];
    document.getElementById("game").click();
}

function liste_match_hockey(data){
  var obj = JSON.parse(data);
  if (obj.data[0].sport_key == 'icehockey_nhl') {
    var sport = 'hockey';
  }

    var valeur_match = document.getElementById("valeur_match").value ;
    console.log(valeur_match);
    document.getElementById("sport").value = sport;
    document.getElementById("league").value = obj.data[valeur_match].sport_nice;
    document.getElementById("home_team").value = obj.data[valeur_match].teams[0];
    document.getElementById("home_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[0];
    document.getElementById("visit_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[1];
    document.getElementById("visit_team").value = obj.data[valeur_match].teams[1];
    document.getElementById("game").click();
}

function liste_match_rugby(data){
  var obj = JSON.parse(data);
  if (obj.data[0].sport_key == 'rugbyunion_six_nations') {
    var sport = 'rugby';
  }

    var valeur_match = document.getElementById("valeur_match").value ;
    console.log(valeur_match);
    document.getElementById("sport").value = sport;
    document.getElementById("league").value = obj.data[valeur_match].sport_nice;
    document.getElementById("home_team").value = obj.data[valeur_match].teams[0];
    document.getElementById("home_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[0];
    document.getElementById("visit_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[1];
    document.getElementById("visit_team").value = obj.data[valeur_match].teams[1];
    document.getElementById("game").click();
}

function liste_match_foot(data){
  var obj = JSON.parse(data);
  if (obj.data[0].sport_key == 'soccer_epl' || obj.data[0].sport_key == 'soccer_france_ligue_one' || obj.data[0].sport_key == 'soccer_germany_bundesliga' || obj.data[0].sport_key == 'soccer_italy_serie_a' || obj.data[0].sport_key == 'soccer_spain_la_liga' || obj.data[0].sport_key == 'soccer_uefa_champs_league' || obj.data[0].sport_key == 'soccer_uefa_europa_league') {
    var sport = 'foot';
  }

    var valeur_match = document.getElementById("valeur_match").value ;
    console.log(valeur_match);
    document.getElementById("sport").value = sport;
    document.getElementById("league").value = obj.data[valeur_match].sport_nice;
    document.getElementById("home_team").value = obj.data[valeur_match].teams[0];
    document.getElementById("home_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[0];
    document.getElementById("visit_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[1];
    document.getElementById("visit_team").value = obj.data[valeur_match].teams[1];
    document.getElementById("game").click();
}

function liste_match_footam(data){
  var obj = JSON.parse(data);
  if (obj.data[0].sport_key == 'americanfootball_nfl') {
    var sport = 'foot_am';
  }

    var valeur_match = document.getElementById("valeur_match").value ;
    console.log(valeur_match);
    document.getElementById("sport").value = sport;
    document.getElementById("league").value = obj.data[valeur_match].sport_nice;
    document.getElementById("home_team").value = obj.data[valeur_match].teams[0];
    document.getElementById("home_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[0];
    document.getElementById("visit_team_odd").value = obj.data[valeur_match].sites[0].odds.h2h[1];
    document.getElementById("visit_team").value = obj.data[valeur_match].teams[1];
    document.getElementById("game").click();
}
