<?php
require('../../model/user_db.php');
require('../../model/database_db.php');
require('../../model/littlebirddb.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'add_user';
    }
}

$users = array();

if ($action == 'add_user') {
    echo "gfhkhgkh";
    // Add User
   $users = add_user($userID, $fName, $lName, $email, $address, $city, $stateID, $zipCode, $password, $level);
    $userID = filter_input(INPUT_POST, 'UserId');
    $fName = filter_input(INPUT_POST, 'First_Name');
    $lName = filter_input(INPUT_POST, 'Last_Name');
    $email = filter_input(INPUT_POST, 'Email');
    $address = filter_input(INPUT_POST, 'Address');
    $city = filter_input(INPUT_POST, 'City');
    $stateID = filter_input(INPUT_POST, 'State');
    $zipCode = filter_input(INPUT_POST, 'Zip_Code');
    $password = filter_input(INPUT_POST, 'Password');
    $level = filter_input(INPUT_POST, 'Level'); 
    echo $level;
    echo $fName;
        }
// } else if ($action == 'show_add_form'){
	
//     $userID = filter_input(INPUT_POST, 'UserId');
//     $fName = filter_input(INPUT_POST, 'First_Name');
//     $lName = filter_input(INPUT_POST, 'Last_Name');
//     $email = filter_input(INPUT_POST, 'Email');
//     $address = filter_input(INPUT_POST, 'Address');
//     $city = filter_input(INPUT_POST, 'City');
//     $stateID = filter_input(INPUT_POST, 'State');
//     $zipCode = filter_input(INPUT_POST, 'Zip_Code');
//     $password = filter_input(INPUT_POST, 'Password');
//     $level = filter_input(INPUT_POST, 'Level');
    
// 	// 
// 	include('../../view/user_display.php');add_user($userID, $fName, $lName, $email, $address, $city, $stateID, $zipCode, $password, $level);
    // else if ($action == 'delete_product') {
//     $productID = filter_input(INPUT_POST, 'productID');
//     delete_product($product_code);
//     header("Location: ."); //return to the same page
// } else if ($action == 'show_add_form') {
//     include('product_add.php');
// } else if ($action == 'add_product') {
//     $code = filter_input(INPUT_POST, 'code');
//     $name = filter_input(INPUT_POST, 'name');
//     $version = filter_input(INPUT_POST, 'version', FILTER_VALIDATE_FLOAT);
//     $release_date = filter_input(INPUT_POST, 'release_date');

//     // Validate the inputs
//     if ( $code === NULL || $name === FALSE || 
//             $version === NULL || $version === FALSE || 
//             $release_date === NULL) {
//         $error = "Invalid product data. Check all fields and try again.";
//         include('../errors/error.php');
//     } else {
//         add_product($code, $name, $version, $release_date);
//         header("Location: .");
//     }
// }
?>