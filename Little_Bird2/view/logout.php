<?php
session_start();
unset($_SESSION["Email"]);
unset($_SESSION["Password"]);
unset($_SESSION["First_Name"]);
echo "Session Ended";
header("Location:index.php");

?>