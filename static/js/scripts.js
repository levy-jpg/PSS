
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
},200);


  $("form#addLotForm").submit(function(event){
      // Stop form from submitting normally
      event.preventDefault();
   var data = $("form#addLotForm :input").serializeArray();

   $.post($("form#addLotForm").attr("action"),data, function(info){
      $("#feedback").html(info);
   });
  });

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
//AUTO REFRESH THE 
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

