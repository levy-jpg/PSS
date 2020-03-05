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
                <div class="form-group card p-2">
                    <select name="prefFloor" id="prefFloor" class="form-control btn btn-secondary">
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
            <div class="">
                <button class="btn btn-danger book">Book</button>
            </div>
        </div>
        <div class="col-sm-4 d-flex flex-column" id="rightlots">
<form>
        Username:<br/>
<input type="text" name="username"><br/>
Password<br/>
<input type="password" name="password"> <br/>
<input type="submit" value="login">
</form>

            
        </div>

        <div class="fixed-top bookFormCont">
            <div class="min-vh-100 row align-items-center  justify-content-center text-white">
                <form action="#" class="">
                    <h1>Your Info</h1>
                    <div class="form-group">
                        <span id="close" class="btn btn-danger">&times;</span>
                        <label for="firstName">FIRST NAME</label>
                        <input type="text" class="form-control" id="firstName" name="firstName">
                    </div>
                    <div class="form-group">
                        <label for="">LAST NAME</label>
                        <input type="text" class="form-control" id="lastName"
                        name="lastName">
                    </div>
                    <div class="form-group">
                        <label for="">NUMBER PLATE</label>
                        <input type="text" class="form-control" id="numberPlate" name="numberPlate">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-outline-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>