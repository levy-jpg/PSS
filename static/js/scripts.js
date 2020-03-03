
$(document).ready(function(){
  $("form#addLotForm").submit(function(event){
      // Stop form from submitting normally
      event.preventDefault();
   var data = $("form#addLotForm :input").serializeArray();

   $.post($("form#addLotForm").attr("action"),data, function(info){
      $("#feedback").html(info);
   });
  });
});
