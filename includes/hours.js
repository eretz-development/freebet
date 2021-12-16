$('.date').click(function(e){
  var a = new Date($(this).html() * 1000);
  var months = ['01','02','03','04','05','06','07','08','09','10','11','12'];
  var year = a.getFullYear();
  var month = months[a.getMonth()];
  var date = a.getDate();
  var hour = a.getHours();
  var min = a.getMinutes();
  var sec = a.getSeconds();
  var time = date + '/' + month + '/' + year + ' ' + hour + ':' + min;
  time = moment(time, "DD-MM-YYYY HH:mm").format('DD/MM/YYYY HH:mm'); // October 8th 2020, 6:23:41 pm
  $(this).html(time);
});

$('.date').trigger('click');
