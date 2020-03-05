<?php
$page = "Lots";
include ("head.php");
//include ("processors/lot.php");
?>
<div class="container">
    <div class="form-group">
        <label for="statFloor">Select Floor</label>
        <select name="statFloor" id="statFloor" class="form-control btn btn-outline-warning">
            <option value="groundfloor">Ground Floor</option>
            <option value="firstfloor">First Floor</option>
            <option value="secondfloor">Second Floor</option>
        </select>
    </div>

  <h2>Active Users</h2>
  <table class="table  text-white-50">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Number Plate</th>
        <th>Time In</th>
        <th>Time Out</th>
      </tr>
    </thead>
    <tbody id="tablestats">
      <tr>

      </tr>
    </tbody>
  </table>
</div>