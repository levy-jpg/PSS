<?php
include('lotprocessor.php');
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == "leftLots") {
        $object = new lotFetch;
        $object->fetchLeftLots();
    } elseif ($_POST['submit'] == "rightLots") {
        $object = new lotFetch;
        $object->fetchRightLots();
    }
}
if(isset($_POST['firstName']) && isset($_POST['numberPlate'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $numberPlate = $_POST['numberPlate'];
    $floor = $_POST['floorq'];
    $lotName = $_POST['lotName'];
    $sql = "INSERT INTO users (firstName, lastName, numberPlate, floor, lot) VALUES('$firstName', '$lastName', '$numberPlate', '$floor', '$lotName')";
    if(mysqli_query($conn, $sql)){
        $sql1 = "UPDATE $floor SET numberPlate='$numberPlate', booked='1' WHERE lotName='$lotName'";
            if($conn->query($sql1)){
                echo "Book Success";
            }else {
                echo $sql1;
            }
    }else{
        echo "failed";
    }
    
}

?>