<?php
$page = "Home";
include("head.php");
include("static/includes/lotprocessor.php");
?>
<div class="container-fluid landing min-vh-100">
    <?php include ("static/includes/navbar.php")?>
</div>


<div class="container-fluid" id="turn-landscape">
    <div class="row justify-content-center vh-100 align-items-center text-center">
        <div class="loader"></div>
        <p class="text-danger col-sm-12">ALERT!!!</p>
        <p class="text-white col-sm-12">PLEASE TURN TO LANDSCAPE MODE TO VIEW AND BOOK A PARKING LOT! THE CURRENT FLOOR PLOTTING DOESN'T SUPPORT VIEWING IN PORTRAIT ORIENTATION!</p>
    </div>
</div>


<div class="container-fluid" id="parking-cont">
        <div class="text-center">
            <div class="form-group card px-3 py-1">
                <h3>Hello, Choose Your Preffered Parking Place</h3>
                <label for="prefFloor" class="h4">Select Floor</label>
                <select name="prefFloor" id="prefFloor" class="form-control btn btn-outline-success">
                    <option value="groundfloor">Ground Floor</option>
                    <option value="firstfloor">First Floor</option>
                    <option value="secondfloor">Second Floor</option>
                </select>
            </div>
        </div>
    <div class="row min-vh-90 p-auto rounded justify-content-center p-1" id="lotfloor">
        <div class="col-sm-4 d-flex flex-column" id="leftlots">
           
        </div>
        <div class="col-sm-4 p-1 d-flex">
            <div class="flex-fill text-vertical" id="turnspace">
                <span class="floor">Loading...</span>
            </div>
        </div>
        <div class="col-sm-4 d-flex flex-column" id="rightlots">
            
        </div>
    </div>