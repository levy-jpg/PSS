<?php
include ('lotprocessor.php');

    if($_POST['submit'] == "leftLots"){
    $object = new lotFetch;
    $object->fetchLeftLots(); 
}
elseif ($_POST['submit'] == "rightLots"){
    $object = new lotFetch;
    $object->fetchRightLots(); 
}

?>