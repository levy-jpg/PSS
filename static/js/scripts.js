
$(document).ready(function(){
  var orientation =function() {
     if(window.innerHeight > window.innerWidth){
      $("#turn-landscape").fadeIn();
      $("#parking-cont").fadeOut();
   }else {
      $("#turn-landscape").fadeOut();
      $("#parking-cont").fadeIn();
   }
  }

  setInterval(function(){
     orientation();
  }, 200);



 var leftLots = function(){
     var submit = "leftLots";
     var floor = $("#prefFloor option:selected").val();
      $.post("static/includes/processor.php",{submit:submit, lotFloor:floor},function(data){
         $("#leftlots").html(data);
         $(".floor").html(floor);
      })};
var rightLots = function(){
   var submit = "rightLots";
   var floor = $("#prefFloor option:selected").val();
      $.post("static/includes/processor.php",{submit:submit, lotFloor:floor},function(data){
         $("#rightlots").html(data);
      })};


//BOOKING
$("#bookingform").submit(function(e){
   e.preventDefault();
      $("input[name=floorq][id=floorq]").val($("#prefFloor option:selected").val());
     var data = $("form#bookingform :input").serializeArray();
     $.post("static/includes/processor.php", data,function(feed){
     });
});
//AUTO REFRESH AFTER ONE SECOND
      setInterval(function(){
         leftLots();
         rightLots();
      },1000);


      $(".book").click(function(){
         $(".bookFormCont").slideDown();
      });

      $("#close").click(function(){
         $(".bookFormCont").slideUp();
      });
      
});

