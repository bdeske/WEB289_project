<?php
require('../model/user_db.php');
require('../model/littlebirddb.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'add_user';
    }
}
if ($action="add_user") {
	include_once("login_customer.php");
	
} elseif ($action == 'validate_email') {
	$email = $_GET['Email'];
	$fName = $_GET['First_Name'];
	$cat = login($email, $fName);
	if(isset($cat)) {
		level($cat);
	} else "Not Working";
	
}

?>













