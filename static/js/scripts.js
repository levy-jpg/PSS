
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
},200)


  $("form#addLotForm").submit(function(event){
      // Stop form from submitting normally
      event.preventDefault();
   var data = $("form#addLotForm :input").serializeArray();

   $.post($("form#addLotForm").attr("action"),data, function(info){
      $("#feedback").html(info);
   });
  });

  setInterval(function(){
     var submit = "leftLots";
      $.post("static/includes/processor.php",{submit:submit},function(data){
         $("#leftlots").html(data);
      });
  },1000);

    setInterval(function(){
     var submit = "rightLots";
      $.post("static/includes/processor.php",{submit:submit},function(data){
         $("#rightlots").html(data);
      });
  },1000);
});
