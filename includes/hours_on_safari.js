//js pour ecire l'heure des match sur safari

var date = document.getElementById('date').innerHTML;

function timeConverter(UNIX_timestamp){
  var a = new Date(UNIX_timestamp * 1000);
  var months = ['01','02','03','04','05','06','07','08','09','10','11','12'];
  var year = a.getFullYear();
  var month = months[a.getMonth()];
  var date = a.getDate();
  var hour = a.getHours();
  var min = a.getMinutes();
  var sec = a.getSeconds();
  var time = year + '/' + month + '/' + date + ' ' + hour + ':' + min + ':' + sec ;
    console.log(time);
    time = moment(time, "YYYY-MM-DD HH:mm:ss").format('DD/MM/YYYY HH:mm'); // October 8th 2020, 6:23:41 pm
  return time;
}


var new_date = timeConverter(date);
document.getElementById('date').innerHTML = new_date;
