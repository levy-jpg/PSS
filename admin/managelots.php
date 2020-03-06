<?php
$page = "Home";
include ("head.php");
//include ("includes/navbar.php");
?>

<div class="container">
    <div class="row min-vh-90 align-items-center justify-content-center" id="lotformdata">
    <form action="" method="get" class="border p-3" id="editLotFormz">
            <h1>Manage /Edit Lots</h1>
            <div class="form-group ">
                <label for="floor">Lot Floor</label>
                <select type="text" class="form-control" id="floor">
                    <option value="groundfloor">Ground Floor</option>
                    <option value="firstfloor">First Floor</option>
                    <option value="secondfloor">Second Floor</option>
                </select>
            </div>
        <section id="editlotFormContent"></section>
    </div>
</div>
