<?php include_once ("../../static/includes/db.php");
$lotName = $_POST['lotName'];
$lotFloor = $_POST['lotFloor'];
$lotStatus = $_POST['lotStatus'];

    if($lotFloor == 0 ){$table = "groundfloor";}
    elseif($lotFloor == 1){$table = "firstfloor";}
    elseif($lotFloor == 2){$table ="secondfloor";}
    elseif($lotFloor == 3){$table = "thirdfloor";}

    if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $table")) ==12){
        echo "MAXIMUM NUMBER OF LOTS REGISTERED!";
    }else {
        $sql1 = "SELECT * FROM $table WHERE lotName='$lotName' AND lotFloor='$lotFloor'";
        $res = mysqli_query($conn, $sql1);
        if(mysqli_num_rows($res)>0){
            echo "Lot $lotName is already registered on this floor($lotFloor)";
        }else {
            $sql = "INSERT INTO $table (lotName, lotFloor, lotStatus) VALUES ('$lotName', '$lotFloor', '$lotStatus')";
            if(mysqli_query($conn, $sql)){
                echo "Lot $lotName registered on floor $lotFloor";
            }else {
                echo $sql;
            }
        }//end of else
    }//end of else



?>