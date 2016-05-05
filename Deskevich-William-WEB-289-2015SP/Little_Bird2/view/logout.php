
<!-- Author William Deskevich
Revision date: 5/4/2016
File name Little_Bird2
Description logout page to end session-->


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