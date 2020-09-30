function modify_league_name(){

  //////SOCCER//////

  if (obj.results[0].strLeague == 'English Premier League') {
    var league = 'EPL';
  } else if (obj.results[0].strLeague == 'English League Championship') {
    var league = 'Championship';
  } else if (obj.results[0].strLeague == 'English League 1') {
    var league = 'League 1';
  } else if (obj.results[0].strLeague == 'English League 2') {
    var league = 'League 2';
  } else if (obj.results[0].strLeague == 'Scottish Premier League') {
    var league = 'SPL';
  } else if (obj.results[0].strLeague == 'German Bundesliga') {
    var league = 'Bundesliga - Germany';
  } else if (obj.results[0].strLeague == 'German 2. Bundesliga') {
    var league = 'Bundesliga 2 - Germany';
  } else if (obj.results[0].strLeague == 'Italian Serie A') {
    var league = 'Serie A - Italy';
  } else if (obj.results[0].strLeague == 'Italian Serie B') {
    var league = 'Serie B - Italy';
  } else if (obj.results[0].strLeague == 'French Ligue 1') {
    var league = 'Ligue 1 - France';
  } else if (obj.results[0].strLeague == 'French Ligue 2') {
    var league = 'Ligue 2 - France';
  } else if (obj.results[0].strLeague == 'Spanish La Liga') {
    var league = 'La Liga - Spain';
  } else if (obj.results[0].strLeague == 'American Major League Soccer') {
    var league = 'MLS';
  } else if (obj.results[0].strLeague == 'Belgian First Division A') {
    var league = 'Belgium First Div';
  } else if (obj.results[0].strLeague == 'Brazilian Serie A') {
    var league = 'Brazil Série A';
  } else if (obj.results[0].strLeague == 'Danish Superliga') {
    var league = 'Denmark Superliga';
  } else if (obj.results[0].strLeague == 'Finish Veikkausliiga') {
    var league = 'Veikkausliiga - Finland';
  } else if (obj.results[0].strLeague == 'Japanese J1 League') {
    var league = 'J League';
  } else if (obj.results[0].strLeague == 'Swedish Allsvenskan') {
    var league = 'Allsvenskan - Sweden';
  } else if (obj.results[0].strLeague == 'Swedish Superettan') {
    var league = 'Superettan - Sweden';
  } else if (obj.results[0].strLeague == 'Swiss Super League') {
    var league = 'Swiss Superleague';
  } else if (obj.results[0].strLeague == 'Turkish Super Lig') {
    var league = 'Turkey Super League';
  } else if (obj.results[0].strLeague == 'League of Ireland First Division') {
    var league = 'League of Ireland';
  } else if (obj.results[0].strLeague == 'Mexican Ascenso MX') {
    var league = 'Liga MX';
  } else if (obj.results[0].strLeague == 'Dutch Eredivisie') {
    var league = 'Dutch Eredivisie';
  } else if (obj.results[0].strLeague == 'Norwegian Eliteserien') {
    var league = 'Eliteserien - Norway';
  } else if (obj.results[0].strLeague == 'Portuguese Primeira Liga') {
    var league = 'Primeira Liga - Portugal';
  } else if (obj.results[0].strLeague == 'Russian Football Premier League') {
    var league = 'Premier League - Russia';
  }

  //////BASKET//////

  if (obj.results[0].strLeague == 'NBA') {
    var league = 'NBA';
  } else if (obj.results[0].strLeague == 'EuroLeague Basketball') {
    var league = 'Basketball Euroleague';
  } else if (obj.results[0].strLeague == 'NCAA Division I Basketball Mens') {
    var league = 'NCAAB';
  }

  //////AMERICAN FOOTBALL//////

  if (obj.results[0].strLeague == 'NFL') {
    var league = 'NFL';
  }

  //////HOCKEY//////

  if (obj.results[0].strLeague == 'NHL') {
    var league = 'NHL';
  }

  //////RUGBY//////

  if (obj.results[0].strLeague == 'Six Nations Championship') {
    var league = 'Six Nations';
  }

}


function modify_team_name_soccer(){

  ////BUNDESLIGA////

  //home
  if (obj.results[0].strHomeTeam == 'Augsburg') {
    var home_team = 'Augsburg';
  } else if (obj.results[0].strHomeTeam == 'Bayern Munich') {
    var home_team = 'Bayern Munich';
  } else if (obj.results[0].strHomeTeam == 'Bielefeld') {
    var home_team = 'Arminia Bielefeld';
  } else if (obj.results[0].strHomeTeam == 'Dortmund') {
    var home_team = 'Borussia Dortmund';
  } else if (obj.results[0].strHomeTeam == 'Ein Frankfurt') {
    var home_team = 'Eintracht Frankfurt';
  } else if (obj.results[0].strHomeTeam == 'FC Koln') {
    var home_team = 'FC Koln';
  } else if (obj.results[0].strHomeTeam == 'Freiburg') {
    var home_team = 'SC Freiburg';
  } else if (obj.results[0].strHomeTeam == 'Hertha') {
    var home_team = 'Hertha Berlin';
  } else if (obj.results[0].strHomeTeam == 'Hoffenheim') {
    var home_team = 'TSG Hoffenheim';
  } else if (obj.results[0].strHomeTeam == 'Leverkusen') {
    var home_team = 'Bayer Leverkusen';
  } else if (obj.results[0].strHomeTeam == 'Mainz') {
    var home_team = 'FSV Mainz 05';
  } else if (obj.results[0].strHomeTeam == 'Mönchengladbach') {
    var home_team = 'Borussia Monchengladbach';
  } else if (obj.results[0].strHomeTeam == 'RasenBallsport Leipzig') {
    var home_team = 'RB Leipzig';
  } else if (obj.results[0].strHomeTeam == 'Schalke 04') {
    var home_team = 'Schalke 04';
  } else if (obj.results[0].strHomeTeam == 'Stuttgart') {
    var home_team = 'VfB Stuttgart';
  } else if (obj.results[0].strHomeTeam == 'Union Berlin') {
    var home_team = 'Union Berlin';
  } else if (obj.results[0].strHomeTeam == 'Werder Bremen') {
    var home_team = 'Werder Bremen';
  } else if (obj.results[0].strHomeTeam == 'Wolfsburg') {
    var home_team = 'VfL Wolfsburg';
  }

  //away
  if (obj.results[0].strAwayTeam == 'Augsburg') {
    var away_team = 'Augsburg';
  } else if (obj.results[0].strAwayTeam == 'Bayern Munich') {
    var away_team = 'Bayern Munich';
  } else if (obj.results[0].strAwayTeam == 'Bielefeld') {
    var away_team = 'Arminia Bielefeld';
  } else if (obj.results[0].strAwayTeam == 'Dortmund') {
    var away_team = 'Borussia Dortmund';
  } else if (obj.results[0].strAwayTeam == 'Ein Frankfurt') {
    var away_team = 'Eintracht Frankfurt';
  } else if (obj.results[0].strAwayTeam == 'FC Koln') {
    var away_team = 'FC Koln';
  } else if (obj.results[0].strAwayTeam == 'Freiburg') {
    var away_team = 'SC Freiburg';
  } else if (obj.results[0].strAwayTeam == 'Hertha') {
    var away_team = 'Hertha Berlin';
  } else if (obj.results[0].strAwayTeam == 'Hoffenheim') {
    var away_team = 'TSG Hoffenheim';
  } else if (obj.results[0].strAwayTeam == 'Leverkusen') {
    var away_team = 'Bayer Leverkusen';
  } else if (obj.results[0].strAwayTeam == 'Mainz') {
    var away_team = 'FSV Mainz 05';
  } else if (obj.results[0].strAwayTeam == 'Mönchengladbach') {
    var away_team = 'Borussia Monchengladbach';
  } else if (obj.results[0].strAwayTeam == 'RasenBallsport Leipzig') {
    var away_team = 'RB Leipzig';
  } else if (obj.results[0].strAwayTeam == 'Schalke 04') {
    var away_team = 'Schalke 04';
  } else if (obj.results[0].strAwayTeam == 'Stuttgart') {
    var away_team = 'VfB Stuttgart';
  } else if (obj.results[0].strAwayTeam == 'Union Berlin') {
    var away_team = 'Union Berlin';
  } else if (obj.results[0].strAwayTeam == 'Werder Bremen') {
    var away_team = 'Werder Bremen';
  } else if (obj.results[0].strAwayTeam == 'Wolfsburg') {
    var away_team = 'VfL Wolfsburg';
  }

  ////LIGA////

  //home
  if (obj.results[0].strHomeTeam == 'Alaves') {
    var home_team = 'Alavés';
  } else if (obj.results[0].strHomeTeam == 'Ath Bilbao') {
    var home_team = 'Athletic Bilbao';
  } else if (obj.results[0].strHomeTeam == 'Ath Madrid') {
    var home_team = 'Atlético Madrid';
  } else if (obj.results[0].strHomeTeam == 'Barcelona') {
    var home_team = 'Barcelona';
  } else if (obj.results[0].strHomeTeam == 'Betis') {
    var home_team = 'Real Betis';
  } else if (obj.results[0].strHomeTeam == 'Cadiz') {
    var home_team = 'Cádiz CF';
  } else if (obj.results[0].strHomeTeam == 'Celta Vigo') {
    var home_team = 'Celta Vigo';
  } else if (obj.results[0].strHomeTeam == 'Eibar') {
    var home_team = 'Eibar';
  } else if (obj.results[0].strHomeTeam == 'Elche') {
    var home_team = 'Elche';
  } else if (obj.results[0].strHomeTeam == 'Getafe') {
    var home_team = 'Getafe';
  } else if (obj.results[0].strHomeTeam == 'Granada') {
    var home_team = 'Granada CF';
  } else if (obj.results[0].strHomeTeam == 'Huesca') {
    var home_team = 'Huesca';
  } else if (obj.results[0].strHomeTeam == 'Levante') {
    var home_team = 'Levante';
  } else if (obj.results[0].strHomeTeam == 'Osasuna') {
    var home_team = 'CA Osasuna';
  } else if (obj.results[0].strHomeTeam == 'Real Madrid') {
    var home_team = 'Real Madrid';
  } else if (obj.results[0].strHomeTeam == 'Sevilla') {
    var home_team = 'Sevilla';
  } else if (obj.results[0].strHomeTeam == 'Sociedad') {
    var home_team = 'Real Sociedad';
  } else if (obj.results[0].strHomeTeam == 'Valencia') {
    var home_team = 'Valencia';
  } else if (obj.results[0].strHomeTeam == 'Valladolid') {
    var home_team = 'Valladolid';
  } else if (obj.results[0].strHomeTeam == 'Villarreal') {
    var home_team = 'Villarreal';
  }

  //away
  if (obj.results[0].strAwayTeam == 'Alaves') {
    var away_team = 'Alavés';
  } else if (obj.results[0].strAwayTeam == 'Ath Bilbao') {
    var away_team = 'Athletic Bilbao';
  } else if (obj.results[0].strAwayTeam == 'Ath Madrid') {
    var away_team = 'Atlético Madrid';
  } else if (obj.results[0].strAwayTeam == 'Barcelona') {
    var away_team = 'Barcelona';
  } else if (obj.results[0].strAwayTeam == 'Betis') {
    var away_team = 'Real Betis';
  } else if (obj.results[0].strAwayTeam == 'Cadiz') {
    var away_team = 'Cádiz CF';
  } else if (obj.results[0].strAwayTeam == 'Celta Vigo') {
    var away_team = 'Celta Vigo';
  } else if (obj.results[0].strAwayTeam == 'Eibar') {
    var away_team = 'Eibar';
  } else if (obj.results[0].strAwayTeam == 'Elche') {
    var away_team = 'Elche';
  } else if (obj.results[0].strAwayTeam == 'Getafe') {
    var away_team = 'Getafe';
  } else if (obj.results[0].strAwayTeam == 'Granada') {
    var away_team = 'Granada CF';
  } else if (obj.results[0].strAwayTeam == 'Huesca') {
    var away_team = 'Huesca';
  } else if (obj.results[0].strAwayTeam == 'Levante') {
    var away_team = 'Levante';
  } else if (obj.results[0].strAwayTeam == 'Osasuna') {
    var away_team = 'CA Osasuna';
  } else if (obj.results[0].strAwayTeam == 'Real Madrid') {
    var away_team = 'Real Madrid';
  } else if (obj.results[0].strAwayTeam == 'Sevilla') {
    var away_team = 'Sevilla';
  } else if (obj.results[0].strAwayTeam == 'Sociedad') {
    var away_team = 'Real Sociedad';
  } else if (obj.results[0].strAwayTeam == 'Valencia') {
    var away_team = 'Valencia';
  } else if (obj.results[0].strAwayTeam == 'Valladolid') {
    var away_team = 'Valladolid';
  } else if (obj.results[0].strAwayTeam == 'Villarreal') {
    var away_team = 'Villarreal';
  }

  ////LIGUE 1////

  //home
  if (obj.results[0].strHomeTeam == 'Angers') {
    var home_team = 'Angers';
  } else if (obj.results[0].strHomeTeam == 'Bordeaux') {
    var home_team = 'Bordeaux';
  } else if (obj.results[0].strHomeTeam == 'Brest') {
    var home_team = 'Brest';
  } else if (obj.results[0].strHomeTeam == 'Dijon') {
    var home_team = 'Dijon';
  } else if (obj.results[0].strHomeTeam == 'Lens') {
    var home_team = 'RC Lens';
  } else if (obj.results[0].strHomeTeam == 'Lille') {
    var home_team = 'Lille';
  } else if (obj.results[0].strHomeTeam == 'Lorient') {
    var home_team = 'Lorient';
  } else if (obj.results[0].strHomeTeam == 'Lyon') {
    var home_team = 'Lyon';
  } else if (obj.results[0].strHomeTeam == 'Marseille') {
    var home_team = 'Marseille';
  } else if (obj.results[0].strHomeTeam == 'Metz') {
    var home_team = 'Metz';
  } else if (obj.results[0].strHomeTeam == 'Monaco') {
    var home_team = 'AS Monaco';
  } else if (obj.results[0].strHomeTeam == 'Montpellier') {
    var home_team = 'Montpellier';
  } else if (obj.results[0].strHomeTeam == 'Nantes') {
    var home_team = 'Nantes';
  } else if (obj.results[0].strHomeTeam == 'Nice') {
    var home_team = 'Nice';
  } else if (obj.results[0].strHomeTeam == 'Nimes') {
    var home_team = 'Nîmes Olympique';
  } else if (obj.results[0].strHomeTeam == 'Paris SG') {
    var home_team = 'Paris Saint Germain';
  } else if (obj.results[0].strHomeTeam == 'Rennes') {
    var home_team = 'Rennes';
  } else if (obj.results[0].strHomeTeam == 'St Etienne') {
    var home_team = 'Saint Etienne';
  } else if (obj.results[0].strHomeTeam == 'Stade de Reims') {
    var home_team = 'Stade de Reims';
  } else if (obj.results[0].strHomeTeam == 'Strasbourg') {
    var home_team = 'Strasbourg';
  }

  //away
  if (obj.results[0].strAwayTeam == 'Angers') {
    var away_team = 'Angers';
  } else if (obj.results[0].strAwayTeam == 'Bordeaux') {
    var away_team = 'Bordeaux';
  } else if (obj.results[0].strAwayTeam == 'Brest') {
    var away_team = 'Brest';
  } else if (obj.results[0].strAwayTeam == 'Dijon') {
    var away_team = 'Dijon';
  } else if (obj.results[0].strAwayTeam == 'Lens') {
    var away_team = 'RC Lens';
  } else if (obj.results[0].strAwayTeam == 'Lille') {
    var away_team = 'Lille';
  } else if (obj.results[0].strAwayTeam == 'Lorient') {
    var away_team = 'Lorient';
  } else if (obj.results[0].strAwayTeam == 'Lyon') {
    var away_team = 'Lyon';
  } else if (obj.results[0].strAwayTeam == 'Marseille') {
    var away_team = 'Marseille';
  } else if (obj.results[0].strAwayTeam == 'Metz') {
    var away_team = 'Metz';
  } else if (obj.results[0].strAwayTeam == 'Monaco') {
    var away_team = 'AS Monaco';
  } else if (obj.results[0].strAwayTeam == 'Montpellier') {
    var away_team = 'Montpellier';
  } else if (obj.results[0].strAwayTeam == 'Nantes') {
    var away_team = 'Nantes';
  } else if (obj.results[0].strAwayTeam == 'Nice') {
    var away_team = 'Nice';
  } else if (obj.results[0].strAwayTeam == 'Nimes') {
    var away_team = 'Nîmes Olympique';
  } else if (obj.results[0].strAwayTeam == 'Paris SG') {
    var away_team = 'Paris Saint Germain';
  } else if (obj.results[0].strAwayTeam == 'Rennes') {
    var away_team = 'Rennes';
  } else if (obj.results[0].strAwayTeam == 'St Etienne') {
    var away_team = 'Saint Etienne';
  } else if (obj.results[0].strAwayTeam == 'Stade de Reims') {
    var away_team = 'Stade de Reims';
  } else if (obj.results[0].strAwayTeam == 'Strasbourg') {
    var away_team = 'Strasbourg';
  }

  ////PREMIER LEAGUE////

  //home
  if (obj.results[0].strHomeTeam == 'Arsenal') {
    var home_team = 'Arsenal';
  } else if (obj.results[0].strHomeTeam == 'Aston Villa') {
    var home_team = 'Aston Villa';
  } else if (obj.results[0].strHomeTeam == 'Brighton') {
    var home_team = 'Brighton and Hove Albion';
  } else if (obj.results[0].strHomeTeam == 'Burnley') {
    var home_team = 'Burnley';
  } else if (obj.results[0].strHomeTeam == 'Chelsea') {
    var home_team = 'Chelsea';
  } else if (obj.results[0].strHomeTeam == 'Crystal Palace') {
    var home_team = 'Crystal Palace';
  } else if (obj.results[0].strHomeTeam == 'Everton') {
    var home_team = 'Everton';
  } else if (obj.results[0].strHomeTeam == 'Fulham') {
    var home_team = 'Fulham';
  } else if (obj.results[0].strHomeTeam == 'Leeds') {
    var home_team = 'Leeds United';
  } else if (obj.results[0].strHomeTeam == 'Leicester') {
    var home_team = 'Leicester City';
  } else if (obj.results[0].strHomeTeam == 'Liverpool') {
    var home_team = 'Liverpool';
  } else if (obj.results[0].strHomeTeam == 'Man City') {
    var home_team = 'Manchester City';
  } else if (obj.results[0].strHomeTeam == 'Man United') {
    var home_team = 'Manchester United';
  } else if (obj.results[0].strHomeTeam == 'Newcastle') {
    var home_team = 'Newcastle United';
  } else if (obj.results[0].strHomeTeam == 'Sheffield United') {
    var home_team = 'Sheffield United';
  } else if (obj.results[0].strHomeTeam == 'Southampton') {
    var home_team = 'Southampton';
  } else if (obj.results[0].strHomeTeam == 'Tottenham') {
    var home_team = 'Tottenham Hotspur';
  } else if (obj.results[0].strHomeTeam == 'West Brom') {
    var home_team = 'West Bromwich Albion';
  } else if (obj.results[0].strHomeTeam == 'West Ham') {
    var home_team = 'West Ham United';
  } else if (obj.results[0].strHomeTeam == 'Wolves') {
    var home_team = 'Wolverhampton Wanderers';
  }

  //away
  if (obj.results[0].strAwayTeam == 'Arsenal') {
    var away_team = 'Arsenal';
  } else if (obj.results[0].strAwayTeam == 'Aston Villa') {
    var away_team = 'Aston Villa';
  } else if (obj.results[0].strAwayTeam == 'Brighton') {
    var away_team = 'Brighton and Hove Albion';
  } else if (obj.results[0].strAwayTeam == 'Burnley') {
    var away_team = 'Burnley';
  } else if (obj.results[0].strAwayTeam == 'Chelsea') {
    var away_team = 'Chelsea';
  } else if (obj.results[0].strAwayTeam == 'Crystal Palace') {
    var away_team = 'Crystal Palace';
  } else if (obj.results[0].strAwayTeam == 'Everton') {
    var away_team = 'Everton';
  } else if (obj.results[0].strAwayTeam == 'Fulham') {
    var away_team = 'Fulham';
  } else if (obj.results[0].strAwayTeam == 'Leeds') {
    var away_team = 'Leeds United';
  } else if (obj.results[0].strAwayTeam == 'Leicester') {
    var away_team = 'Leicester City';
  } else if (obj.results[0].strAwayTeam == 'Liverpool') {
    var away_team = 'Liverpool';
  } else if (obj.results[0].strAwayTeam == 'Man City') {
    var away_team = 'Manchester City';
  } else if (obj.results[0].strAwayTeam == 'Man United') {
    var away_team = 'Manchester United';
  } else if (obj.results[0].strAwayTeam == 'Newcastle') {
    var away_team = 'Newcastle United';
  } else if (obj.results[0].strAwayTeam == 'Sheffield United') {
    var away_team = 'Sheffield United';
  } else if (obj.results[0].strAwayTeam == 'Southampton') {
    var away_team = 'Southampton';
  } else if (obj.results[0].strAwayTeam == 'Tottenham') {
    var away_team = 'Tottenham Hotspur';
  } else if (obj.results[0].strAwayTeam == 'West Brom') {
    var away_team = 'West Bromwich Albion';
  } else if (obj.results[0].strAwayTeam == 'West Ham') {
    var away_team = 'West Ham United';
  } else if (obj.results[0].strAwayTeam == 'Wolves') {
    var away_team = 'Wolverhampton Wanderers';
  }

  ////SERIE A////

  //home
  if (obj.results[0].strHomeTeam == 'Atalanta') {
    var home_team = 'Atalanta BC';
  } else if (obj.results[0].strHomeTeam == 'Benevento') {
    var home_team = 'Benevento';
  } else if (obj.results[0].strHomeTeam == 'Bologna') {
    var home_team = 'Bologna';
  } else if (obj.results[0].strHomeTeam == 'Cagliari') {
    var home_team = 'Cagliari';
  } else if (obj.results[0].strHomeTeam == 'Crotone') {
    var home_team = 'Crotone';
  } else if (obj.results[0].strHomeTeam == 'Fiorentina') {
    var home_team = 'Fiorentina';
  } else if (obj.results[0].strHomeTeam == 'Genoa') {
    var home_team = 'Genoa';
  } else if (obj.results[0].strHomeTeam == 'Inter') {
    var home_team = 'FC Internazionale';
  } else if (obj.results[0].strHomeTeam == 'Juventus') {
    var home_team = 'Juventus';
  } else if (obj.results[0].strHomeTeam == 'Lazio') {
    var home_team = 'Lazio';
  } else if (obj.results[0].strHomeTeam == 'Milan') {
    var home_team = 'AC Milan';
  } else if (obj.results[0].strHomeTeam == 'Napoli') {
    var home_team = 'Napoli';
  } else if (obj.results[0].strHomeTeam == 'Parma Calcio 1913') {
    var home_team = 'Parma';
  } else if (obj.results[0].strHomeTeam == 'Roma') {
    var home_team = 'AS Roma';
  } else if (obj.results[0].strHomeTeam == 'Sampdoria') {
    var home_team = 'Sampdoria';
  } else if (obj.results[0].strHomeTeam == 'Sassuolo') {
    var home_team = 'Sassuolo';
  } else if (obj.results[0].strHomeTeam == 'Spezia') {
    var home_team = 'Spezia';
  } else if (obj.results[0].strHomeTeam == 'Torino') {
    var home_team = 'Torino';
  } else if (obj.results[0].strHomeTeam == 'Udinese') {
    var home_team = 'Udinese';
  } else if (obj.results[0].strHomeTeam == 'Verona') {
    var home_team = 'Hellas Verona FC';
  }

  //away
  if (obj.results[0].strAwayTeam == 'Atalanta') {
    var away_team = 'Atalanta BC';
  } else if (obj.results[0].strAwayTeam == 'Benevento') {
    var away_team = 'Benevento';
  } else if (obj.results[0].strAwayTeam == 'Bologna') {
    var away_team = 'Bologna';
  } else if (obj.results[0].strAwayTeam == 'Cagliari') {
    var away_team = 'Cagliari';
  } else if (obj.results[0].strAwayTeam == 'Crotone') {
    var away_team = 'Crotone';
  } else if (obj.results[0].strAwayTeam == 'Fiorentina') {
    var away_team = 'Fiorentina';
  } else if (obj.results[0].strAwayTeam == 'Genoa') {
    var away_team = 'Genoa';
  } else if (obj.results[0].strAwayTeam == 'Inter') {
    var away_team = 'FC Internazionale';
  } else if (obj.results[0].strAwayTeam == 'Juventus') {
    var away_team = 'Juventus';
  } else if (obj.results[0].strAwayTeam == 'Lazio') {
    var away_team = 'Lazio';
  } else if (obj.results[0].strAwayTeam == 'Milan') {
    var away_team = 'AC Milan';
  } else if (obj.results[0].strAwayTeam == 'Napoli') {
    var away_team = 'Napoli';
  } else if (obj.results[0].strAwayTeam == 'Parma Calcio 1913') {
    var away_team = 'Parma';
  } else if (obj.results[0].strAwayTeam == 'Roma') {
    var away_team = 'AS Roma';
  } else if (obj.results[0].strAwayTeam == 'Sampdoria') {
    var away_team = 'Sampdoria';
  } else if (obj.results[0].strAwayTeam == 'Sassuolo') {
    var away_team = 'Sassuolo';
  } else if (obj.results[0].strAwayTeam == 'Spezia') {
    var away_team = 'Spezia';
  } else if (obj.results[0].strAwayTeam == 'Torino') {
    var away_team = 'Torino';
  } else if (obj.results[0].strAwayTeam == 'Udinese') {
    var away_team = 'Udinese';
  } else if (obj.results[0].strAwayTeam == 'Verona') {
    var away_team = 'Hellas Verona FC';
  }

}

function modify_team_name_basket(){

  ////EUROLEAGUE////

  //home
  if (obj.results[0].strHomeTeam == 'ALBA Berlin') {
    var home_team = 'ALBA Berlin';
  } else if (obj.results[0].strHomeTeam == 'Anadolu Efes SK') {
    var home_team = 'Anadolu Efes';
  } else if (obj.results[0].strHomeTeam == 'Baskonia') {
    var home_team = 'Saski Baskonia';
  } else if (obj.results[0].strHomeTeam == 'Bayern München Basketball') {
    var home_team = 'FC Bayern München';
  } else if (obj.results[0].strHomeTeam == 'BC Khimki') {
    var home_team = 'BC Khimki';
  } else if (obj.results[0].strHomeTeam == 'BC Žalgiris') {
    var home_team = 'Žalgiris';
  } else if (obj.results[0].strHomeTeam == 'BC Zenit Saint Petersburg') {
    var home_team = 'Zenit Saint Petersburg';
  } else if (obj.results[0].strHomeTeam == 'FC Barcelona Basquet') {
    var home_team = 'FC Barcelona Bàsquet';
  } else if (obj.results[0].strHomeTeam == 'Fenerbahçe Basketbol') {
    var home_team = 'Fenerbahçe Beko';
  } else if (obj.results[0].strHomeTeam == 'KK Crvena zvezda') {
    var home_team = 'KK Crvena zvezda';
  } else if (obj.results[0].strHomeTeam == 'Lyon-Villeurbanne') {
    var home_team = 'ASVEL Lyon Villeurbanne';
  } else if (obj.results[0].strHomeTeam == 'Maccabi Tel Aviv BC') {
    var home_team = 'Maccabi Tel Aviv';
  } else if (obj.results[0].strHomeTeam == 'Olimpia Milano') {
    var home_team = 'Pallacanestro Olimpia Milano';
  } else if (obj.results[0].strHomeTeam == 'Olympiacos BC') {
    var home_team = 'Olympiacos';
  } else if (obj.results[0].strHomeTeam == 'Panathinaikos BC') {
    var home_team = 'Panathinaikos';
  } else if (obj.results[0].strHomeTeam == 'PBC CSKA Moscow') {
    var home_team = 'CSKA Moscow';
  } else if (obj.results[0].strHomeTeam == 'Real Madrid Baloncesto') {
    var home_team = 'Real Madrid';
  } else if (obj.results[0].strHomeTeam == 'Valencia Basket') {
    var home_team = 'Valencia Basket';
  }

  //away
  if (obj.results[0].strAwayTeam == 'ALBA Berlin') {
    var away_team = 'ALBA Berlin';
  } else if (obj.results[0].strAwayTeam == 'Anadolu Efes SK') {
    var away_team = 'Anadolu Efes';
  } else if (obj.results[0].strAwayTeam == 'Baskonia') {
    var away_team = 'Saski Baskonia';
  } else if (obj.results[0].strAwayTeam == 'Bayern München Basketball') {
    var away_team = 'FC Bayern München';
  } else if (obj.results[0].strAwayTeam == 'BC Khimki') {
    var away_team = 'BC Khimki';
  } else if (obj.results[0].strAwayTeam == 'BC Žalgiris') {
    var away_team = 'Žalgiris';
  } else if (obj.results[0].strAwayTeam == 'BC Zenit Saint Petersburg') {
    var away_team = 'Zenit Saint Petersburg';
  } else if (obj.results[0].strAwayTeam == 'FC Barcelona Basquet') {
    var away_team = 'FC Barcelona Bàsquet';
  } else if (obj.results[0].strAwayTeam == 'Fenerbahçe Basketbol') {
    var away_team = 'Fenerbahçe Beko';
  } else if (obj.results[0].strAwayTeam == 'KK Crvena zvezda') {
    var away_team = 'KK Crvena zvezda';
  } else if (obj.results[0].strAwayTeam == 'Lyon-Villeurbanne') {
    var away_team = 'ASVEL Lyon Villeurbanne';
  } else if (obj.results[0].strAwayTeam == 'Maccabi Tel Aviv BC') {
    var away_team = 'Maccabi Tel Aviv';
  } else if (obj.results[0].strAwayTeam == 'Olimpia Milano') {
    var away_team = 'Pallacanestro Olimpia Milano';
  } else if (obj.results[0].strAwayTeam == 'Olympiacos BC') {
    var away_team = 'Olympiacos';
  } else if (obj.results[0].strAwayTeam == 'Panathinaikos BC') {
    var away_team = 'Panathinaikos';
  } else if (obj.results[0].strAwayTeam == 'PBC CSKA Moscow') {
    var away_team = 'CSKA Moscow';
  } else if (obj.results[0].strAwayTeam == 'Real Madrid Baloncesto') {
    var away_team = 'Real Madrid';
  } else if (obj.results[0].strAwayTeam == 'Valencia Basket') {
    var away_team = 'Valencia Basket';
  }

  ////NBA////

  //home
  if (obj.results[0].strHomeTeam == 'Atlanta Hawks') {
    var home_team = 'Atlanta Hawks';
  } else if (obj.results[0].strHomeTeam == 'Boston Celtics') {
    var home_team = 'Boston Celtics';
  } else if (obj.results[0].strHomeTeam == 'Brooklyn Nets') {
    var home_team = 'Brooklyn Nets';
  } else if (obj.results[0].strHomeTeam == 'Charlotte Hornets') {
    var home_team = 'Charlotte Hornets';
  } else if (obj.results[0].strHomeTeam == 'Chicago Bulls') {
    var home_team = 'Chicago Bulls';
  } else if (obj.results[0].strHomeTeam == 'Cleveland Cavaliers') {
    var home_team = 'Cleveland Cavaliers';
  } else if (obj.results[0].strHomeTeam == 'Dallas Mavericks') {
    var home_team = 'Dallas Mavericks';
  } else if (obj.results[0].strHomeTeam == 'Denver Nuggets') {
    var home_team = 'Denver Nuggets';
  } else if (obj.results[0].strHomeTeam == 'Detroit Pistons') {
    var home_team = 'Detroit Pistons';
  } else if (obj.results[0].strHomeTeam == 'Golden State Warriors') {
    var home_team = 'Golden State Warriors';
  } else if (obj.results[0].strHomeTeam == 'Houston Rockets') {
    var home_team = 'Houston Rockets';
  } else if (obj.results[0].strHomeTeam == 'Indiana Pacers') {
    var home_team = 'Indiana Pacers';
  } else if (obj.results[0].strHomeTeam == 'Los Angeles Clippers') {
    var home_team = 'Los Angeles Clippers';
  } else if (obj.results[0].strHomeTeam == 'Los Angeles Lakers') {
    var home_team = 'Los Angeles Lakers';
  } else if (obj.results[0].strHomeTeam == 'Memphis Grizzlies') {
    var home_team = 'Memphis Grizzlies';
  } else if (obj.results[0].strHomeTeam == 'Miami Heat') {
    var home_team = 'Miami Heat';
  } else if (obj.results[0].strHomeTeam == 'Milwaukee Bucks') {
    var home_team = 'Milwaukee Bucks';
  } else if (obj.results[0].strHomeTeam == 'Minnesota Timberwolves') {
    var home_team = 'Minnesota Timberwolves';
  } else if (obj.results[0].strHomeTeam == 'New Orleans Pelicans') {
    var home_team = 'New Orleans Pelicans';
  } else if (obj.results[0].strHomeTeam == 'New York Knicks') {
    var home_team = 'New York Knicks';
  } else if (obj.results[0].strHomeTeam == 'Oklahoma City Thunder') {
    var home_team = 'Oklahoma City Thunder';
  } else if (obj.results[0].strHomeTeam == 'Orlando Magic') {
    var home_team = 'Orlando Magic';
  } else if (obj.results[0].strHomeTeam == 'Philadelphia 76ers') {
    var home_team = 'Philadelphia 76ers';
  } else if (obj.results[0].strHomeTeam == 'Phoenix Suns') {
    var home_team = 'Phoenix Suns';
  } else if (obj.results[0].strHomeTeam == 'Portland Trail Blazers') {
    var home_team = 'Portland Trail Blazers';
  } else if (obj.results[0].strHomeTeam == 'Sacramento Kings') {
    var home_team = 'Sacramento Kings';
  } else if (obj.results[0].strHomeTeam == 'San Antonio Spurs') {
    var home_team = 'San Antonio Spurs';
  } else if (obj.results[0].strHomeTeam == 'Toronto Raptors') {
    var home_team = 'Toronto Raptors';
  } else if (obj.results[0].strHomeTeam == 'Utah Jazz') {
    var home_team = 'Utah Jazz';
  } else if (obj.results[0].strHomeTeam == 'Washington Wizards') {
    var home_team = 'Washington Wizards';
  }

  //away
  if (obj.results[0].strAwayTeam == 'Atlanta Hawks') {
    var away_team = 'Atlanta Hawks';
  } else if (obj.results[0].strAwayTeam == 'Boston Celtics') {
    var away_team = 'Boston Celtics';
  } else if (obj.results[0].strAwayTeam == 'Brooklyn Nets') {
    var away_team = 'Brooklyn Nets';
  } else if (obj.results[0].strAwayTeam == 'Charlotte Hornets') {
    var away_team = 'Charlotte Hornets';
  } else if (obj.results[0].strAwayTeam == 'Chicago Bulls') {
    var away_team = 'Chicago Bulls';
  } else if (obj.results[0].strAwayTeam == 'Cleveland Cavaliers') {
    var away_team = 'Cleveland Cavaliers';
  } else if (obj.results[0].strAwayTeam == 'Dallas Mavericks') {
    var away_team = 'Dallas Mavericks';
  } else if (obj.results[0].strAwayTeam == 'Denver Nuggets') {
    var away_team = 'Denver Nuggets';
  } else if (obj.results[0].strAwayTeam == 'Detroit Pistons') {
    var away_team = 'Detroit Pistons';
  } else if (obj.results[0].strAwayTeam == 'Golden State Warriors') {
    var away_team = 'Golden State Warriors';
  } else if (obj.results[0].strAwayTeam == 'Houston Rockets') {
    var away_team = 'Houston Rockets';
  } else if (obj.results[0].strAwayTeam == 'Indiana Pacers') {
    var away_team = 'Indiana Pacers';
  } else if (obj.results[0].strAwayTeam == 'Los Angeles Clippers') {
    var away_team = 'Los Angeles Clippers';
  } else if (obj.results[0].strAwayTeam == 'Los Angeles Lakers') {
    var away_team = 'Los Angeles Lakers';
  } else if (obj.results[0].strAwayTeam == 'Memphis Grizzlies') {
    var away_team = 'Memphis Grizzlies';
  } else if (obj.results[0].strAwayTeam == 'Miami Heat') {
    var away_team = 'Miami Heat';
  } else if (obj.results[0].strAwayTeam == 'Milwaukee Bucks') {
    var away_team = 'Milwaukee Bucks';
  } else if (obj.results[0].strAwayTeam == 'Minnesota Timberwolves') {
    var away_team = 'Minnesota Timberwolves';
  } else if (obj.results[0].strAwayTeam == 'New Orleans Pelicans') {
    var away_team = 'New Orleans Pelicans';
  } else if (obj.results[0].strAwayTeam == 'New York Knicks') {
    var away_team = 'New York Knicks';
  } else if (obj.results[0].strAwayTeam == 'Oklahoma City Thunder') {
    var away_team = 'Oklahoma City Thunder';
  } else if (obj.results[0].strAwayTeam == 'Orlando Magic') {
    var away_team = 'Orlando Magic';
  } else if (obj.results[0].strAwayTeam == 'Philadelphia 76ers') {
    var away_team = 'Philadelphia 76ers';
  } else if (obj.results[0].strAwayTeam == 'Phoenix Suns') {
    var away_team = 'Phoenix Suns';
  } else if (obj.results[0].strAwayTeam == 'Portland Trail Blazers') {
    var away_team = 'Portland Trail Blazers';
  } else if (obj.results[0].strAwayTeam == 'Sacramento Kings') {
    var away_team = 'Sacramento Kings';
  } else if (obj.results[0].strAwayTeam == 'San Antonio Spurs') {
    var away_team = 'San Antonio Spurs';
  } else if (obj.results[0].strAwayTeam == 'Toronto Raptors') {
    var away_team = 'Toronto Raptors';
  } else if (obj.results[0].strAwayTeam == 'Utah Jazz') {
    var away_team = 'Utah Jazz';
  } else if (obj.results[0].strAwayTeam == 'Washington Wizards') {
    var away_team = 'Washington Wizards';
  }

  ////NCAA BASKET////

  //home
  if (obj.results[0].strHomeTeam == 'Abilene Christian') {
    var home_team = 'Abilene Christian';
  } else if (obj.results[0].strHomeTeam == 'Air Force') {
    var home_team = 'Air Force';
  } else if (obj.results[0].strHomeTeam == 'Akron') {
    var home_team = 'Akron';
  } else if (obj.results[0].strHomeTeam == 'Alabama') {
    var home_team = 'Alabama';
  } else if (obj.results[0].strHomeTeam == 'Alabama A&M') {
    var home_team = 'Alabama A&M';
  } else if (obj.results[0].strHomeTeam == 'Alabama State') {
    var home_team = 'Alabama State';
  } else if (obj.results[0].strHomeTeam == 'Albany') {
    var home_team = 'Albany';
  } else if (obj.results[0].strHomeTeam == 'Alcorn State') {
    var home_team = 'Alcorn State';
  } else if (obj.results[0].strHomeTeam == 'American') {
    var home_team = 'American';
  } else if (obj.results[0].strHomeTeam == 'Appalachian State') {
    var home_team = 'Appalachian State';
  } else if (obj.results[0].strHomeTeam == 'Arizona') {
    var home_team = 'Arizona';
  } else if (obj.results[0].strHomeTeam == 'Arizona State') {
    var home_team = 'Arizona State';
  } else if (obj.results[0].strHomeTeam == 'Arkansas') {
    var home_team = 'Arkansas';
  } else if (obj.results[0].strHomeTeam == 'Arkansas State') {
    var home_team = 'Arkansas State';
  } else if (obj.results[0].strHomeTeam == 'Arkansas-Little Rock') {
    var home_team = 'Arkansas-Little Rock';
  } else if (obj.results[0].strHomeTeam == 'Arkansas-Pine Bluff') {
    var home_team = 'Arkansas-Pine Bluff';
  } else if (obj.results[0].strHomeTeam == 'Army') {
    var home_team = 'Army';
  } else if (obj.results[0].strHomeTeam == 'Auburn') {
    var home_team = 'Auburn';
  } else if (obj.results[0].strHomeTeam == 'Austin Peay') {
    var home_team = 'Austin Peay';
  } else if (obj.results[0].strHomeTeam == 'Ball State') {
    var home_team = 'Ball State';
  } else if (obj.results[0].strHomeTeam == 'Baylor') {
    var home_team = 'Baylor';
  } else if (obj.results[0].strHomeTeam == 'Belmont') {
    var home_team = 'Belmont';
  } else if (obj.results[0].strHomeTeam == 'Bethune-Cookman') {
    var home_team = 'Bethune-Cookman';
  } else if (obj.results[0].strHomeTeam == 'Binghamton') {
    var home_team = 'Binghamton';
  } else if (obj.results[0].strHomeTeam == 'Boise State') {
    var home_team = 'Boise State';
  } else if (obj.results[0].strHomeTeam == 'Boston College') {
    var home_team = 'Boston College';
  } else if (obj.results[0].strHomeTeam == 'Boston University') {
    var home_team = 'Boston University';
  } else if (obj.results[0].strHomeTeam == 'Bowling Green') {
    var home_team = 'Bowling Green';
  } else if (obj.results[0].strHomeTeam == 'Bradley') {
    var home_team = 'Bradley';
  } else if (obj.results[0].strHomeTeam == 'Brown') {
    var home_team = 'Brown';
  } else if (obj.results[0].strHomeTeam == 'Bryant') {
    var home_team = 'Bryant';
  } else if (obj.results[0].strHomeTeam == 'Bucknell') {
    var home_team = 'Bucknell';
  } else if (obj.results[0].strHomeTeam == 'Buffalo') {
    var home_team = 'Buffalo';
  } else if (obj.results[0].strHomeTeam == 'Butler') {
    var home_team = 'Butler';
  } else if (obj.results[0].strHomeTeam == 'BYU') {
    var home_team = 'BYU';
  } else if (obj.results[0].strHomeTeam == 'Cal Poly') {
    var home_team = 'Cal Poly';
  } else if (obj.results[0].strHomeTeam == 'Cal State-Bakersfield') {
    var home_team = 'Cal State-Bakersfield';
  } else if (obj.results[0].strHomeTeam == 'Cal State-Fullerton') {
    var home_team = 'Cal State-Fullerton';
  } else if (obj.results[0].strHomeTeam == 'Cal State-Northridge') {
    var home_team = 'Cal State-Northridge';
  } else if (obj.results[0].strHomeTeam == 'California') {
    var home_team = 'California';
  } else if (obj.results[0].strHomeTeam == 'Campbell') {
    var home_team = 'Campbell';
  } else if (obj.results[0].strHomeTeam == 'Canisius') {
    var home_team = 'Canisius';
  } else if (obj.results[0].strHomeTeam == 'Central Arkansas') {
    var home_team = 'Central Arkansas';
  } else if (obj.results[0].strHomeTeam == 'Central Connecticut State') {
    var home_team = 'Central Connecticut State';
  } else if (obj.results[0].strHomeTeam == 'Central Florida') {
    var home_team = 'Central Florida';
  } else if (obj.results[0].strHomeTeam == 'Central Michigan') {
    var home_team = 'Central Michigan';
  } else if (obj.results[0].strHomeTeam == 'Charleston Southern') {
    var home_team = 'Charleston Southern';
  } else if (obj.results[0].strHomeTeam == 'Charlotte') {
    var home_team = 'Charlotte';
  } else if (obj.results[0].strHomeTeam == 'Chattanooga') {
    var home_team = 'Chattanooga';
  } else if (obj.results[0].strHomeTeam == 'Chicago State') {
    var home_team = 'Chicago State';
  }

  //away
  if (obj.results[0].strAwayTeam == 'Abilene Christian') {
    var away_team = 'Abilene Christian';
  } else if (obj.results[0].strAwayTeam == 'Air Force') {
    var away_team = 'Air Force';
  } else if (obj.results[0].strAwayTeam == 'Akron') {
    var away_team = 'Akron';
  } else if (obj.results[0].strAwayTeam == 'Alabama') {
    var away_team = 'Alabama';
  } else if (obj.results[0].strAwayTeam == 'Alabama A&M') {
    var away_team = 'Alabama A&M';
  } else if (obj.results[0].strAwayTeam == 'Alabama State') {
    var away_team = 'Alabama State';
  } else if (obj.results[0].strAwayTeam == 'Albany') {
    var away_team = 'Albany';
  } else if (obj.results[0].strAwayTeam == 'Alcorn State') {
    var away_team = 'Alcorn State';
  } else if (obj.results[0].strAwayTeam == 'American') {
    var away_team = 'American';
  } else if (obj.results[0].strAwayTeam == 'Appalachian State') {
    var away_team = 'Appalachian State';
  } else if (obj.results[0].strAwayTeam == 'Arizona') {
    var away_team = 'Arizona';
  } else if (obj.results[0].strAwayTeam == 'Arizona State') {
    var away_team = 'Arizona State';
  } else if (obj.results[0].strAwayTeam == 'Arkansas') {
    var away_team = 'Arkansas';
  } else if (obj.results[0].strAwayTeam == 'Arkansas State') {
    var away_team = 'Arkansas State';
  } else if (obj.results[0].strAwayTeam == 'Arkansas-Little Rock') {
    var away_team = 'Arkansas-Little Rock';
  } else if (obj.results[0].strAwayTeam == 'Arkansas-Pine Bluff') {
    var away_team = 'Arkansas-Pine Bluff';
  } else if (obj.results[0].strAwayTeam == 'Army') {
    var away_team = 'Army';
  } else if (obj.results[0].strAwayTeam == 'Auburn') {
    var away_team = 'Auburn';
  } else if (obj.results[0].strAwayTeam == 'Austin Peay') {
    var away_team = 'Austin Peay';
  } else if (obj.results[0].strAwayTeam == 'Ball State') {
    var away_team = 'Ball State';
  } else if (obj.results[0].strAwayTeam == 'Baylor') {
    var away_team = 'Baylor';
  } else if (obj.results[0].strAwayTeam == 'Belmont') {
    var away_team = 'Belmont';
  } else if (obj.results[0].strAwayTeam == 'Bethune-Cookman') {
    var away_team = 'Bethune-Cookman';
  } else if (obj.results[0].strAwayTeam == 'Binghamton') {
    var away_team = 'Binghamton';
  } else if (obj.results[0].strAwayTeam == 'Boise State') {
    var away_team = 'Boise State';
  } else if (obj.results[0].strAwayTeam == 'Boston College') {
    var away_team = 'Boston College';
  } else if (obj.results[0].strAwayTeam == 'Boston University') {
    var away_team = 'Boston University';
  } else if (obj.results[0].strAwayTeam == 'Bowling Green') {
    var away_team = 'Bowling Green';
  } else if (obj.results[0].strAwayTeam == 'Bradley') {
    var away_team = 'Bradley';
  } else if (obj.results[0].strAwayTeam == 'Brown') {
    var away_team = 'Brown';
  } else if (obj.results[0].strAwayTeam == 'Bryant') {
    var away_team = 'Bryant';
  } else if (obj.results[0].strAwayTeam == 'Bucknell') {
    var away_team = 'Bucknell';
  } else if (obj.results[0].strAwayTeam == 'Buffalo') {
    var away_team = 'Buffalo';
  } else if (obj.results[0].strAwayTeam == 'Butler') {
    var away_team = 'Butler';
  } else if (obj.results[0].strAwayTeam == 'BYU') {
    var away_team = 'BYU';
  } else if (obj.results[0].strAwayTeam == 'Cal Poly') {
    var away_team = 'Cal Poly';
  } else if (obj.results[0].strAwayTeam == 'Cal State-Bakersfield') {
    var away_team = 'Cal State-Bakersfield';
  } else if (obj.results[0].strAwayTeam == 'Cal State-Fullerton') {
    var away_team = 'Cal State-Fullerton';
  } else if (obj.results[0].strAwayTeam == 'Cal State-Northridge') {
    var away_team = 'Cal State-Northridge';
  } else if (obj.results[0].strAwayTeam == 'California') {
    var away_team = 'California';
  } else if (obj.results[0].strAwayTeam == 'Campbell') {
    var away_team = 'Campbell';
  } else if (obj.results[0].strAwayTeam == 'Canisius') {
    var away_team = 'Canisius';
  } else if (obj.results[0].strAwayTeam == 'Central Arkansas') {
    var away_team = 'Central Arkansas';
  } else if (obj.results[0].strAwayTeam == 'Central Connecticut State') {
    var away_team = 'Central Connecticut State';
  } else if (obj.results[0].strAwayTeam == 'Central Florida') {
    var away_team = 'Central Florida';
  } else if (obj.results[0].strAwayTeam == 'Central Michigan') {
    var away_team = 'Central Michigan';
  } else if (obj.results[0].strAwayTeam == 'Charleston Southern') {
    var away_team = 'Charleston Southern';
  } else if (obj.results[0].strAwayTeam == 'Charlotte') {
    var away_team = 'Charlotte';
  } else if (obj.results[0].strAwayTeam == 'Chattanooga') {
    var away_team = 'Chattanooga';
  } else if (obj.results[0].strAwayTeam == 'Chicago State') {
    var away_team = 'Chicago State';
  }

}

function modify_team_name_american_football(){

  ////NFL////

  //home
  if (obj.results[0].strHomeTeam == 'Arizona Cardinals') {
    var home_team = 'Arizona Cardinals';
  } else if (obj.results[0].strHomeTeam == 'Atlanta Falcons') {
    var home_team = 'Atlanta Falcons';
  } else if (obj.results[0].strHomeTeam == 'Baltimore Ravens') {
    var home_team = 'Baltimore Ravens';
  } else if (obj.results[0].strHomeTeam == 'Buffalo Bills') {
    var home_team = 'Buffalo Bills';
  } else if (obj.results[0].strHomeTeam == 'Carolina Panthers') {
    var home_team = 'Carolina Panthers';
  } else if (obj.results[0].strHomeTeam == 'Chicago Bears') {
    var home_team = 'Chicago Bears';
  } else if (obj.results[0].strHomeTeam == 'Cincinnati Bengals') {
    var home_team = 'Cincinnati Bengals';
  } else if (obj.results[0].strHomeTeam == 'Cleveland Browns') {
    var home_team = 'Cleveland Browns';
  } else if (obj.results[0].strHomeTeam == 'Dallas Cowboys') {
    var home_team = 'Dallas Cowboys';
  } else if (obj.results[0].strHomeTeam == 'Denver Broncos') {
    var home_team = 'Denver Broncos';
  } else if (obj.results[0].strHomeTeam == 'Detroit Lions') {
    var home_team = 'Detroit Lions';
  } else if (obj.results[0].strHomeTeam == 'Green Bay Packers') {
    var home_team = 'Green Bay Packers';
  } else if (obj.results[0].strHomeTeam == 'Houston Texans') {
    var home_team = 'Houston Texans';
  } else if (obj.results[0].strHomeTeam == 'Indianapolis Colts') {
    var home_team = 'Indianapolis Colts';
  } else if (obj.results[0].strHomeTeam == 'Jacksonville Jaguars') {
    var home_team = 'Jacksonville Jaguars';
  } else if (obj.results[0].strHomeTeam == 'Kansas City Chiefs') {
    var home_team = 'Kansas City Chiefs';
  } else if (obj.results[0].strHomeTeam == 'Las Vegas Raiders') {
    var home_team = 'Las Vegas Raiders';
  } else if (obj.results[0].strHomeTeam == 'Los Angeles Chargers') {
    var home_team = 'Los Angeles Chargers';
  } else if (obj.results[0].strHomeTeam == 'Los Angeles Rams') {
    var home_team = 'Los Angeles Rams';
  } else if (obj.results[0].strHomeTeam == 'Miami Dolphins') {
    var home_team = 'Miami Dolphins';
  } else if (obj.results[0].strHomeTeam == 'Minnesota Vikings') {
    var home_team = 'Minnesota Vikings';
  } else if (obj.results[0].strHomeTeam == 'New England Patriots') {
    var home_team = 'New England Patriots';
  } else if (obj.results[0].strHomeTeam == 'New Orleans Saints') {
    var home_team = 'New Orleans Saints';
  } else if (obj.results[0].strHomeTeam == 'New York Giants') {
    var home_team = 'New York Giants';
  } else if (obj.results[0].strHomeTeam == 'New York Jets') {
    var home_team = 'New York Jets';
  } else if (obj.results[0].strHomeTeam == 'Philadelphia Eagles') {
    var home_team = 'Philadelphia Eagles';
  } else if (obj.results[0].strHomeTeam == 'Pittsburgh Steelers') {
    var home_team = 'Pittsburgh Steelers';
  } else if (obj.results[0].strHomeTeam == 'San Francisco 49ers') {
    var home_team = 'San Francisco 49ers';
  } else if (obj.results[0].strHomeTeam == 'Seattle Seahawks') {
    var home_team = 'Seattle Seahawks';
  } else if (obj.results[0].strHomeTeam == 'Tampa Bay Buccaneers') {
    var home_team = 'Tampa Bay Buccaneers';
  } else if (obj.results[0].strHomeTeam == 'Tennessee Titans') {
    var home_team = 'Tennessee Titans';
  } else if (obj.results[0].strHomeTeam == 'Washington') {
    var home_team = 'Washington Football Team';
  }

  //away
  if (obj.results[0].strAwayTeam == 'Arizona Cardinals') {
    var away_team = 'Arizona Cardinals';
  } else if (obj.results[0].strAwayTeam == 'Atlanta Falcons') {
    var away_team = 'Atlanta Falcons';
  } else if (obj.results[0].strAwayTeam == 'Baltimore Ravens') {
    var away_team = 'Baltimore Ravens';
  } else if (obj.results[0].strAwayTeam == 'Buffalo Bills') {
    var away_team = 'Buffalo Bills';
  } else if (obj.results[0].strAwayTeam == 'Carolina Panthers') {
    var away_team = 'Carolina Panthers';
  } else if (obj.results[0].strAwayTeam == 'Chicago Bears') {
    var away_team = 'Chicago Bears';
  } else if (obj.results[0].strAwayTeam == 'Cincinnati Bengals') {
    var away_team = 'Cincinnati Bengals';
  } else if (obj.results[0].strAwayTeam == 'Cleveland Browns') {
    var away_team = 'Cleveland Browns';
  } else if (obj.results[0].strAwayTeam == 'Dallas Cowboys') {
    var away_team = 'Dallas Cowboys';
  } else if (obj.results[0].strAwayTeam == 'Denver Broncos') {
    var away_team = 'Denver Broncos';
  } else if (obj.results[0].strAwayTeam == 'Detroit Lions') {
    var away_team = 'Detroit Lions';
  } else if (obj.results[0].strAwayTeam == 'Green Bay Packers') {
    var away_team = 'Green Bay Packers';
  } else if (obj.results[0].strAwayTeam == 'Houston Texans') {
    var away_team = 'Houston Texans';
  } else if (obj.results[0].strAwayTeam == 'Indianapolis Colts') {
    var away_team = 'Indianapolis Colts';
  } else if (obj.results[0].strAwayTeam == 'Jacksonville Jaguars') {
    var away_team = 'Jacksonville Jaguars';
  } else if (obj.results[0].strAwayTeam == 'Kansas City Chiefs') {
    var away_team = 'Kansas City Chiefs';
  } else if (obj.results[0].strAwayTeam == 'Las Vegas Raiders') {
    var away_team = 'Las Vegas Raiders';
  } else if (obj.results[0].strAwayTeam == 'Los Angeles Chargers') {
    var away_team = 'Los Angeles Chargers';
  } else if (obj.results[0].strAwayTeam == 'Los Angeles Rams') {
    var away_team = 'Los Angeles Rams';
  } else if (obj.results[0].strAwayTeam == 'Miami Dolphins') {
    var away_team = 'Miami Dolphins';
  } else if (obj.results[0].strAwayTeam == 'Minnesota Vikings') {
    var away_team = 'Minnesota Vikings';
  } else if (obj.results[0].strAwayTeam == 'New England Patriots') {
    var away_team = 'New England Patriots';
  } else if (obj.results[0].strAwayTeam == 'New Orleans Saints') {
    var away_team = 'New Orleans Saints';
  } else if (obj.results[0].strAwayTeam == 'New York Giants') {
    var away_team = 'New York Giants';
  } else if (obj.results[0].strAwayTeam == 'New York Jets') {
    var away_team = 'New York Jets';
  } else if (obj.results[0].strAwayTeam == 'Philadelphia Eagles') {
    var away_team = 'Philadelphia Eagles';
  } else if (obj.results[0].strAwayTeam == 'Pittsburgh Steelers') {
    var away_team = 'Pittsburgh Steelers';
  } else if (obj.results[0].strAwayTeam == 'San Francisco 49ers') {
    var away_team = 'San Francisco 49ers';
  } else if (obj.results[0].strAwayTeam == 'Seattle Seahawks') {
    var away_team = 'Seattle Seahawks';
  } else if (obj.results[0].strAwayTeam == 'Tampa Bay Buccaneers') {
    var away_team = 'Tampa Bay Buccaneers';
  } else if (obj.results[0].strAwayTeam == 'Tennessee Titans') {
    var away_team = 'Tennessee Titans';
  } else if (obj.results[0].strAwayTeam == 'Washington') {
    var away_team = 'Washington Football Team';
  }

}

function modify_team_name_hockey(){

  ////NHL////

  //home
  if (obj.results[0].strHomeTeam == 'Anaheim Ducks') {
    var home_team = 'Anaheim Ducks';
  } else if (obj.results[0].strHomeTeam == 'Arizona Coyotes') {
    var home_team = 'Arizona Coyotes';
  } else if (obj.results[0].strHomeTeam == 'Boston Bruins') {
    var home_team = 'Boston Bruins';
  } else if (obj.results[0].strHomeTeam == 'Buffalo Sabres') {
    var home_team = 'Buffalo Sabres';
  } else if (obj.results[0].strHomeTeam == 'Calgary Flames') {
    var home_team = 'Calgary Flames';
  } else if (obj.results[0].strHomeTeam == 'Carolina Hurricanes') {
    var home_team = 'Carolina Hurricanes';
  } else if (obj.results[0].strHomeTeam == 'Chicago Blackhawks') {
    var home_team = 'Chicago Blackhawks';
  } else if (obj.results[0].strHomeTeam == 'Colorado Avalanche') {
    var home_team = 'Colorado Avalanche';
  } else if (obj.results[0].strHomeTeam == 'Columbus Blue Jackets') {
    var home_team = 'Columbus Blue Jackets';
  } else if (obj.results[0].strHomeTeam == 'Dallas Stars') {
    var home_team = 'Dallas Stars';
  } else if (obj.results[0].strHomeTeam == 'Detroit Red Wings') {
    var home_team = 'Detroit Red Wings';
  } else if (obj.results[0].strHomeTeam == 'Edmonton Oilers') {
    var home_team = 'Edmonton Oilers';
  } else if (obj.results[0].strHomeTeam == 'Florida Panthers') {
    var home_team = 'Florida Panthers';
  } else if (obj.results[0].strHomeTeam == 'Los Angeles Kings') {
    var home_team = 'Los Angeles Kings';
  } else if (obj.results[0].strHomeTeam == 'Minnesota Wild') {
    var home_team = 'Minnesota Wild';
  } else if (obj.results[0].strHomeTeam == 'Montreal Canadiens') {
    var home_team = 'Montreal Canadiens';
  } else if (obj.results[0].strHomeTeam == 'Nashville Predators') {
    var home_team = 'Nashville Predators';
  } else if (obj.results[0].strHomeTeam == 'New Jersey Devils') {
    var home_team = 'New Jersey Devils';
  } else if (obj.results[0].strHomeTeam == 'New York Islanders') {
    var home_team = 'New York Islanders';
  } else if (obj.results[0].strHomeTeam == 'New York Rangers') {
    var home_team = 'New York Rangers';
  } else if (obj.results[0].strHomeTeam == 'Ottawa Senators') {
    var home_team = 'Ottawa Senators';
  } else if (obj.results[0].strHomeTeam == 'Philadelphia Flyers') {
    var home_team = 'Philadelphia Flyers';
  } else if (obj.results[0].strHomeTeam == 'Pittsburgh Penguins') {
    var home_team = 'Pittsburgh Penguins';
  } else if (obj.results[0].strHomeTeam == 'San Jose Sharks') {
    var home_team = 'San Jose Sharks';
  } else if (obj.results[0].strHomeTeam == 'St. Louis Blues') {
    var home_team = 'St Louis Blues';
  } else if (obj.results[0].strHomeTeam == 'Tampa Bay Lightning') {
    var home_team = 'Tampa Bay Lightning';
  } else if (obj.results[0].strHomeTeam == 'Toronto Maple Leafs') {
    var home_team = 'Toronto Maple Leafs';
  } else if (obj.results[0].strHomeTeam == 'Vancouver Canucks') {
    var home_team = 'Vancouver Canucks';
  } else if (obj.results[0].strHomeTeam == 'Vegas Golden Knights') {
    var home_team = 'Vegas Golden Knights';
  } else if (obj.results[0].strHomeTeam == 'Washington Capitals') {
    var home_team = 'Washington Capitals';
  } else if (obj.results[0].strHomeTeam == 'Winnipeg Jets') {
    var home_team = 'Winnipeg Jets';
  }

  //away
  if (obj.results[0].strAwayTeam == 'Anaheim Ducks') {
    var away_team = 'Anaheim Ducks';
  } else if (obj.results[0].strAwayTeam == 'Arizona Coyotes') {
    var away_team = 'Arizona Coyotes';
  } else if (obj.results[0].strAwayTeam == 'Boston Bruins') {
    var away_team = 'Boston Bruins';
  } else if (obj.results[0].strAwayTeam == 'Buffalo Sabres') {
    var away_team = 'Buffalo Sabres';
  } else if (obj.results[0].strAwayTeam == 'Calgary Flames') {
    var away_team = 'Calgary Flames';
  } else if (obj.results[0].strAwayTeam == 'Carolina Hurricanes') {
    var away_team = 'Carolina Hurricanes';
  } else if (obj.results[0].strAwayTeam == 'Chicago Blackhawks') {
    var away_team = 'Chicago Blackhawks';
  } else if (obj.results[0].strAwayTeam == 'Colorado Avalanche') {
    var away_team = 'Colorado Avalanche';
  } else if (obj.results[0].strAwayTeam == 'Columbus Blue Jackets') {
    var away_team = 'Columbus Blue Jackets';
  } else if (obj.results[0].strAwayTeam == 'Dallas Stars') {
    var away_team = 'Dallas Stars';
  } else if (obj.results[0].strAwayTeam == 'Detroit Red Wings') {
    var away_team = 'Detroit Red Wings';
  } else if (obj.results[0].strAwayTeam == 'Edmonton Oilers') {
    var away_team = 'Edmonton Oilers';
  } else if (obj.results[0].strAwayTeam == 'Florida Panthers') {
    var away_team = 'Florida Panthers';
  } else if (obj.results[0].strAwayTeam == 'Los Angeles Kings') {
    var away_team = 'Los Angeles Kings';
  } else if (obj.results[0].strAwayTeam == 'Minnesota Wild') {
    var away_team = 'Minnesota Wild';
  } else if (obj.results[0].strAwayTeam == 'Montreal Canadiens') {
    var away_team = 'Montreal Canadiens';
  } else if (obj.results[0].strAwayTeam == 'Nashville Predators') {
    var away_team = 'Nashville Predators';
  } else if (obj.results[0].strAwayTeam == 'New Jersey Devils') {
    var away_team = 'New Jersey Devils';
  } else if (obj.results[0].strAwayTeam == 'New York Islanders') {
    var away_team = 'New York Islanders';
  } else if (obj.results[0].strAwayTeam == 'New York Rangers') {
    var away_team = 'New York Rangers';
  } else if (obj.results[0].strAwayTeam == 'Ottawa Senators') {
    var away_team = 'Ottawa Senators';
  } else if (obj.results[0].strAwayTeam == 'Philadelphia Flyers') {
    var away_team = 'Philadelphia Flyers';
  } else if (obj.results[0].strAwayTeam == 'Pittsburgh Penguins') {
    var away_team = 'Pittsburgh Penguins';
  } else if (obj.results[0].strAwayTeam == 'San Jose Sharks') {
    var away_team = 'San Jose Sharks';
  } else if (obj.results[0].strAwayTeam == 'St. Louis Blues') {
    var away_team = 'St Louis Blues';
  } else if (obj.results[0].strAwayTeam == 'Tampa Bay Lightning') {
    var away_team = 'Tampa Bay Lightning';
  } else if (obj.results[0].strAwayTeam == 'Toronto Maple Leafs') {
    var away_team = 'Toronto Maple Leafs';
  } else if (obj.results[0].strAwayTeam == 'Vancouver Canucks') {
    var away_team = 'Vancouver Canucks';
  } else if (obj.results[0].strAwayTeam == 'Vegas Golden Knights') {
    var away_team = 'Vegas Golden Knights';
  } else if (obj.results[0].strAwayTeam == 'Washington Capitals') {
    var away_team = 'Washington Capitals';
  } else if (obj.results[0].strAwayTeam == 'Winnipeg Jets') {
    var away_team = 'Winnipeg Jets';
  }

}

function modify_team_name_rugby(){

  ////6 NATIONS////

  //home
  if (obj.results[0].strHomeTeam == 'England Rugby') {
    var home_team = 'England';
  } else if (obj.results[0].strHomeTeam == 'France Rugby') {
    var home_team = 'France';
  } else if (obj.results[0].strHomeTeam == 'Ireland Rugby') {
    var home_team = 'Ireland';
  } else if (obj.results[0].strHomeTeam == 'Italy Rugby') {
    var home_team = 'Italy';
  } else if (obj.results[0].strHomeTeam == 'Scotland Rugby') {
    var home_team = 'Scotland';
  } else if (obj.results[0].strHomeTeam == 'Wales Rugby') {
    var home_team = 'Wales';
  }

  //away
  if (obj.results[0].strAwayTeam == 'England Rugby') {
    var away_team = 'England';
  } else if (obj.results[0].strAwayTeam == 'France Rugby') {
    var away_team = 'France';
  } else if (obj.results[0].strAwayTeam == 'Ireland Rugby') {
    var away_team = 'Ireland';
  } else if (obj.results[0].strAwayTeam == 'Italy Rugby') {
    var away_team = 'Italy';
  } else if (obj.results[0].strAwayTeam == 'Scotland Rugby') {
    var away_team = 'Scotland';
  } else if (obj.results[0].strAwayTeam == 'Wales Rugby') {
    var away_team = 'Wales';
  }
}
