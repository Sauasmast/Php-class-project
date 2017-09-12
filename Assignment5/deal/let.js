$('.box1').mouseover(function(){
  $('.box1').css({"border":"10px solid black","opacity":"0.7"});
});

$('.box1').mouseout(function(){
  $('.box1').css({"border":"10px solid white","opacity":"1"});
});

$('.box2').mouseover(function(){
  $('.box2').css({"border":"10px solid black","opacity":"0.7"});
});

$('.box2').mouseout(function(){
  $('.box2').css({"border":"10px solid red","opacity":"1"});
});

$('.box3').mouseover(function(){
  $('.box3').css({"border":"10px solid black","opacity":"0.7"});
});

$('.box3').mouseout(function(){
  $('.box3').css({"border":"10px solid white","opacity":"1"});
});

function doSomething() {
  var request = new XMLHttpRequest();
    $.get("page.php");
    return false;
}

$('.box1').click(function(){
  $('.toknow').val(1);
});

$('.box3').click(function(){
  $('.toknow').val(3);
});

$('.box2').click(function(){
  $('.toknow').val(2);
});


