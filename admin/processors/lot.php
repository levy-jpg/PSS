<?php include_once ("../../static/includes/db.php");
$lotName = $_POST['lotName'];
$lotFloor = $_POST['lotFloor'];
$lotStatus = $_POST['lotStatus'];

    $sql1 = "SELECT * FROM lots WHERE lotName='$lotName' AND lotFloor='$lotFloor'";
    $res = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($res)>0){
        echo "Lot $lotName is already registered on this floor($lotFloor)";
    }else {
        $sql = "INSERT INTO lots (lotName, lotFloor, lotStatus) VALUES ('$lotName', '$lotFloor', '$lotStatus')";
        if(mysqli_query($conn, $sql)){
            echo "Lot $lotName registered on floor $lotFloor";
        }else {
            echo "failed";
        }
    }

?>