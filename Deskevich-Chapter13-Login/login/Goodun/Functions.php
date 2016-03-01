<?php
     function valid_email() if ($userLevels == "A") {
	echo "Welcome " . $email . " you are logged in as Admin";
	} elseif($userLevels == "M") {
	echo "Welcome " . $email . " you are logged in as Member";
	} else echo "Invalid Email"?>