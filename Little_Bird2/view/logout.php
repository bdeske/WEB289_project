<?php

unset($_SESSION["Email"]);
unset($_SESSION["Password"]);
unset($_SESSION["First_Name"]);
unset($_SESSION["cart"]);
session_unset();
session_destroy();
echo ("Session Ended");
header("Location:index.php");

?>