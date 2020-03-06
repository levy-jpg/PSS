
$(document).ready(function(){
      //Admin site scripts
      var getGroundStats = function () {
        $.post("includes/processor.php", { stats: "ground" }, function (data) {
            $("#underStats").html(data);
        });
    }
    var getFirstStats = function () {
        $.post("includes/processor.php", { stats: "first" }, function (data) {
            $("#firstStats").html(data);
        });
    }
    var getSecondStats = function () {
        $.post("includes/processor.php", { stats: "second" }, function (data) {
            $("#secondStats").html(data);
        });
    }
  
  var getStats = function(){
      var x = $("select#statFloor").val();
      $.post("includes/processor.php",{getStats:"getStats", table:x},function(data){
            $("#tablestats").html(data);
      });
  }

  $("form#addLotForm").submit(function(event){
    // Stop form from submitting normally
    event.preventDefault();
     var data = $("form#addLotForm :input").serializeArray();
     $. post($("form#addLotForm").attr("action"),data, function(info){
        $("#feedback").html(info);
     });
});


//manage /edit lots
$("select#floor").find("option").click(function(){
    var value = $(this).val();
    $.post("includes/processor.php", {fetchEdit:"", table:value},function(data){
        $("#editlotFormContent").html(data);
    });
});

  //AUTO REFRESH AFTER ONE SECOND
        setInterval(function(){
           getSecondStats();
           getGroundStats();
           getFirstStats();
           getStats();
        },500);
  });
  