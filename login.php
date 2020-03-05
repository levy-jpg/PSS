<?php
$username = "user";
$password = "password";
session_start()
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true) {
header("Location: success.php";
}

if (isset($_POST['username']) && isset($_POST['password'])) {
   if ($_POST['username'] == $username && $_POST['password'] == $password)
{
       $SESSION['loggedin'] = true;
        header("Location: success.php");
}
}

if (!isset(&_SESSION['loggedin]) || $_SESSION['loggedin'] == false {
      header("Location: index.php");
}
<h2> You have logged in: </h2>
?>