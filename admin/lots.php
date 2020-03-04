<?php
$page = "Lots";
include ("head.php");
//include ("processors/lot.php");
?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center  min-vh-100">
        <form action="processors/lot.php" method="post" class="form-horizontal text-black col-sm-8" id="addLotForm">
            <h1>Add A Lot</h1>
            <span id="feedback" class="text-danger bg-dark p-2 rounded font-weight-bolder d-flex">Waiting For Server Response...</span>
            <div class="form-group">
                <label for="lotName">Lot Name</label>
                <input type="text" class="form-control" name="lotName" maxlength="3" required>
            </div>
            <div class="form-group">
                <label for="lotFloor">Lot Floor</label>
                <select id="lotFloor" name="lotFloor" class="form-control" required>
                    <option value="0">Ground Floor</option>
                    <option value="1">First Floor</option>
                    <option value="2">Second Floor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="lotStatus" class="form-control" id="statusSelect" required>
                    <option value="" disabled selected>Select Status</option>
                    <option value="0">Out Of Service</option>
                    <option value="1">On Service</option>
                </select>
            </div>
            <div class="form-group">
                <label for="special">For Special People?</label>
                <select name="special" class="form-control">
                    <option value="" disabled selected>Special Parking?</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success form-control">Commit</button>
            </div>
        </form>
    </div>
</div>