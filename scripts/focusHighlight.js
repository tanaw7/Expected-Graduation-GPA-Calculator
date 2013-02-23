
$(document).ready(function(){
  $("input").focus(function(){
    $("input").css("background-color","#FFFFCC");
  });
  $("input").blur(function(){
    $("input").css("background-color","lightGray");
  });
});
