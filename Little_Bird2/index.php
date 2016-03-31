<?php
session_start();
// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 1;    // 1 day in seconds
session_set_cookie_params($lifetime, '/');






if(isset($_SESSION["First_Name"])) {
// header("Location:view/user_dashboard.php");
}
// Create a cart array if needed

 if (empty($_SESSION['cart'])) { $_SESSION['cart'] = array(); }

 
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
        if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'A')){
       include('home_admin.php');
        }
        if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'B')){
       include('home_admin_B.php');
        }
        if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'M')){
       include('home_user.php');
        }
        else {
            include('home.php');
        }
break;

    case 'sign_up':
        include_once ('view/login_customer.php');
break;

case 'log_in':
include_once ('view/user_login_session.php');
// $message="Invalid Email";

        
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

    include_once ('view/user_login_session.php');
break;



case 'list_products': 
    // Get product data
    $products = get_products();

    // Display the product list
    include('view/product_list.php');
break; 


case 'list_products_home': 
    // Get product data
    $products = get_products();

    // Display the product list
    include('view/product_list_home.php');
break; 


case 'list_products_user':

    $products = get_products();
    include('view/product_list_user.php');


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
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("littlebirddb", $conn);
$result = mysql_query("SELECT * FROM users WHERE Email='" . $_POST["Email"] . "' and Password = '". $_POST["Password"]."'");
if (mysql_error()) {
    die(mysql_error());
}
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["First_Name"] = $row['First_Name'];
$_SESSION["Email"] = $row['Email'];
$_SESSION["Password"] = $row['Password'];
$_SESSION["Level"] = $row['Level'];

}
}
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $cat = valid_email($email, $password);
    if(isset($cat)) {
        level($cat);
    } else "Not Working";





break;   


case 'go_to_home':

if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'A')){
       include('home_admin.php');
        }
        if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'B')){
       include('home_admin_B.php');
        }
        if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'M')){
       include('home_user.php');
        }
        else {
        }


    


break;   

case 'go_to_home_admin':
    
    if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'A')){
       include('home_admin.php');
        }
        if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'B')){
       include('home_admin_B.php');
        }
        if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'M')){
       include('home_user.php');
        }
        else {
            // include_once ('home.php');
        }


    


break; 

case 'go_to_home_admin_B':
    
    if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'A')){
       include('home_admin.php');
        }
        if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'B')){
       include('home_admin_B.php');
        }
        if (isset($_SESSION["First_Name"]) && ($_SESSION["Level"] == 'M')){
       include('home_user.php');
        }
        else {
            // include_once ('home.php');
        }


    


break;
 


case 'go_to_cart':

    include('cart.php');

break; 

case 'log_out':

    

    include('view/logout.php');


break; 


case 'update_products':
    $productID = filter_input(INPUT_POST, 'ProductID');
    $plantname = filter_input(INPUT_POST, 'Plant_Name');
    $description = filter_input(INPUT_POST, 'Description');
    $size = filter_input(INPUT_POST, 'Size');
    $instock = filter_input(INPUT_POST, 'In_Stock');
    $price = filter_input(INPUT_POST, 'Price');
    

$products = update_products($productID, $plantname, $description, $size, $instock, $price);

    include('update.php');



// include('view/user_search.php');

break; 

case 'update_products_B':
    $productID = filter_input(INPUT_POST, 'ProductID');
    $plantname = filter_input(INPUT_POST, 'Plant_Name');
    $description = filter_input(INPUT_POST, 'Description');
    $size = filter_input(INPUT_POST, 'Size');
    $instock = filter_input(INPUT_POST, 'In_Stock');
    
    

$products = update_products_B($productID, $plantname, $description, $size, $instock);

    include('update_B.php');



// include('view/user_search.php');

break; 

case 'add':

        $product_key = filter_input(INPUT_POST, 'productkey');
        $item_qty = filter_input(INPUT_POST, 'itemqty');
        add_item($product_key, $item_qty);
        include('cart.php');
        break;
    case 'update':
    
        $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, 
                                     FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['cart'][$key]['qty'] != $qty) {
                update_item($key, $qty);
            }
        }
        include('cart.php');
        break;
    case 'show_cart':
        include('cart.php');
        break;
    case 'show_add_item':
        include('view/add_item.php');
        break;
    case 'empty_cart':
        unset($_SESSION['cart']);
        include('cart.php');
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