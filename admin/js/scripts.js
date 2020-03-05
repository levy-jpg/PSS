
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
  
  
  //AUTO REFRESH AFTER ONE SECOND
        setInterval(function(){
           getSecondStats();
           getGroundStats();
           getFirstStats();
        },500);
  });
  