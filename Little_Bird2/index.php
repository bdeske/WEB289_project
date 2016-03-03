<?php
include 'view/header.php';
require('model/database_db.php');
require('model/littlebirddb.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'home';
    }
}

$lName = '';
$users = array();

switch( $action ) {
        case 'home':
        include_once ('home.php');
break;

        case 'login':
        include_once ('view/login_customer.php');
break;

        case 'add_user':
        
    // Add User
   
    
    $fName = filter_input(INPUT_POST, 'First_Name');
    $lName = filter_input(INPUT_POST, 'Last_Name');
    $email = filter_input(INPUT_POST, 'Email');
    $address = filter_input(INPUT_POST, 'Address');
    $city = filter_input(INPUT_POST, 'City');
    $stateID = filter_input(INPUT_POST, 'StateID');
    $zipCode = filter_input(INPUT_POST, 'Zip_Code');
    $password = filter_input(INPUT_POST, 'Password');
    $level = filter_input(INPUT_POST, 'Level'); 
    
add_user($fName, $lName, $email, $address, $city, $stateID, $zipCode, $password, $level);
    // // Display the user list

    include_once ('view/privileges.php');
break;



case 'list_products': 
    // Get product data
    $products = get_products();

    // Display the product list
    include('view/product_list.php');
break; 

case 'display_users': 
    // show list of users
    $users = get_users();

    // Display the user list
    include('view/user_display.php');
break; 

case 'search_users': 
if ($action == 'show_users') {
    $lName = filter_input(INPUT_POST, 'Last_Name');
    if (empty($lName)) {
        $message = 'You must enter a last name.';
    } else {
        $users = get_users_by_last_name($lName);
        echo $last_name;
        include('view/user_search.php');
    }
}
 
    
break; 


case 'validate_email':

    $email = $_GET['Email'];
    $password = $_GET['Password'];
    $cat = valid_email($email);
    if(isset($cat)) {
        level($cat);
    } else "Not Working";



// include('view/user_search.php');

break;     
}    
// useful code????


    // if (empty($lName)) {
    //     $message = 'You must enter a last name.';
    // } else {
    //     $customers = get_customers_by_last_name($lName);
    //     //echo $last_name;get_users_by_last_name($lName)
    // }






    // Display the user list
    // include('view/user_search.php');

 


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
include 'view/footer.php';
?>