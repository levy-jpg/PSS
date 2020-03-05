<?php
$page = "Home";
include ("head.php");
//include ("includes/navbar.php");
?>

<div class="container border my-2 rounded">
    <h1 class="col-sm-12 align-items-center justify-content-center">Quick Statistics</h1>
    <div class="row" id="quickstats">
        <div class="col-md-4 col-sm-6 rounded" id="underStats">
   
        </div>
        <div class="col-md-4 col-sm-6 rounded" id="secondStats">
   
        </div>
        <div class="col-md-4 col-sm-6 rounded" id="firstStats">
   
        </div>
    </div>
</div>

<div class="container border my-2 rounded p-2">
    <h1 class="col-sm-12 align-items-center justify-content-center">Quick Menu</h1>
    <div class="row min-vh-50 p-4 text-center" id="quickmenu">
        <div class="col-md-3 col-sm-6 border-success border rounded" onclick="window.location.href='lots.php'">
            <p class="h5">Add Lots</p>
        </div>
        <div class="col-md-3 col-sm-6 border-success border rounded" onclick="window.location.href='lots.php'">
            <p class="h5">Manage Lots</p>
        </div>
        <div class="col-md-3 col-sm-6 border-success border rounded" onclick="window.location.href='lotstats.php'">
            <p class="h5">Lot Stats</p>
        </div>
    </div>
</div>



<?php
include ("footer.php");
?>