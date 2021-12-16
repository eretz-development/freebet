$('.cote1').click(function(e){

  if (($(this).css('color') === 'rgb(255, 255, 255)') && ($(this).parent().css("background-color") === 'rgb(0, 0, 0)')) {
    $(this).css("color", "black");
    $(this).parent().css("background-color", "white");

    var value = 'null';
    $(this).parent().parent().next().children().first().val(value);
  }
  else {
    $(this).css("color", "white");
    $(this).parent().css("background-color", "black");
    $(this).parent().next().next().css("background-color", "white");
    $(this).parent().next().next().children().css("color", "black");
    $(this).parent().next().next().next().next().css("background-color", "white");
    $(this).parent().next().next().next().next().children().css("color", "black");

    var value = $(this).parent().parent().prev().prev().prev().children().first().text();
    $(this).parent().parent().next().children().first().val(value);
  }

});

$('.cotex').click(function(e){

  if (($(this).css('color') === 'rgb(255, 255, 255)') && ($(this).parent().css("background-color") === 'rgb(0, 0, 0)')) {
    $(this).css("color", "black");
    $(this).parent().css("background-color", "white");

    var value = 'null';
    $(this).parent().parent().next().children().first().val(value);
  }
  else {
    $(this).css("color", "white");
    $(this).parent().css("background-color", "black");
    $(this).parent().prev().prev().css("background-color", "white");
    $(this).parent().prev().prev().children().css("color", "black");
    $(this).parent().next().next().css("background-color", "white");
    $(this).parent().next().next().children().css("color", "black");

    var value = 'Nul';
    $(this).parent().parent().next().children().first().val(value);
  }

});

$('.cote2').click(function(e){

  if (($(this).css('color') === 'rgb(255, 255, 255)') && ($(this).parent().css("background-color") === 'rgb(0, 0, 0)')) {
    $(this).css("color", "black");
    $(this).parent().css("background-color", "white");

    var value = 'null';
    $(this).parent().parent().next().children().first().val(value);
  }
  else {
    $(this).css("color", "white");
    $(this).parent().css("background-color", "black");
    $(this).parent().prev().prev().css("background-color", "white");
    $(this).parent().prev().prev().children().css("color", "black");
    $(this).parent().prev().prev().prev().prev().css("background-color", "white");
    $(this).parent().prev().prev().prev().prev().children().css("color", "black");

    var value = $(this).parent().parent().prev().prev().prev().children().last().text();
    $(this).parent().parent().next().children().first().val(value);
  }

});
