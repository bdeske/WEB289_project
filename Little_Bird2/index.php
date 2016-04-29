<?php
session_start();
// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 1;    // 1 day in seconds
session_set_cookie_params($lifetime, '/');






// // if(isset($_SESSION["First_Name"])) {
// // // header("Location:view/user_dashboard.php");
// }
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
$plantname = '';
$products = array();


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




    case 'logout':

    include('view/logout.php');
break;


    case 'sign_up':
        include_once ('view/login_customer.php');
break;

    case 'log_in':

include_once ('view/user_login_session.php');
        
break;

    case 'add_user':
        
    // Add User
   
    
    $fName = filter_input(INPUT_POST, 'First_Name');
    $lName = filter_input(INPUT_POST, 'Last_Name');
    $email = filter_input(INPUT_POST, 'Email');
    $password = filter_input(INPUT_POST, 'Password');
   
    
add_user($fName, $lName, $email, $password);
    // // Display the user list

    include_once ('view/user_login_session.php');

break;

    case 'listproducts': 
    // Get product data
    $products = get_products();

    // Display the product list
    include('view/productlist.php');

break; 

    case 'display_product': 
    // Get product data
    $plantname = filter_input(INPUT_POST, 'Plant_Name');
    $products = get_product_by_Plant_Name($plantname);

    // Display the product list
    include('view/product_list_user.php');

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


    case 'validate_email':

//if(count($_POST)>0) {
//$conn = mysql_connect("mysql4.000webhost.com","a8935893_doe","roseanne54");
//mysql_select_db("a8935893_dodie", $conn); 
//   
//$result = mysql_query("SELECT * FROM users WHERE Email='" . $_POST["Email"] . "' and Password = '". hash('sha256', $_POST["Password"])."'");
//
//$row  = mysql_fetch_array($result);
//if(is_array($row)) {
//$_SESSION["First_Name"] = $row['First_Name'];
//$_SESSION["Email"] = $row['Email'];
//$_SESSION["Password"] = $row['Password'];
//$_SESSION["Level"] = 'A';
//echo $_SESSION["Level"];
//    } 
//}

    $email = $_POST['Email'];
    $password = $_POST['Password'];
    
    $cat = valid_email($email, $password);
    if(isset($cat)) {
        
        $_SESSION["First_Name"] = $cat['First_Name'];
$_SESSION["Email"] = $cat['Email'];
$_SESSION["Password"] = $cat['Password'];
$_SESSION["Level"] = $cat['Level'];
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

 

    case 'insert_product':

    $productID = filter_input(INPUT_POST, 'ProductID');
    $catID = filter_input(INPUT_POST, 'CatID');
    $plantname = filter_input(INPUT_POST, 'Plant_Name');
    $description = filter_input(INPUT_POST, 'Description');
    $size = filter_input(INPUT_POST, 'Size');
    $instock = filter_input(INPUT_POST, 'In_Stock');
    $price = filter_input(INPUT_POST, 'Price');
    

$products = insert_product($productID, $catID, $plantname, $description, $size, $instock, $price);

    include('view/insert_product.php');

break; 


    case 'insert_product_B':

    $productID = filter_input(INPUT_POST, 'ProductID');
    $catID = filter_input(INPUT_POST, 'CatID');
    $plantname = filter_input(INPUT_POST, 'Plant_Name');
    $description = filter_input(INPUT_POST, 'Description');
    $size = filter_input(INPUT_POST, 'Size');
    $instock = filter_input(INPUT_POST, 'In_Stock');
    

$products = insert_product_B($productID, $catID, $plantname, $description, $size, $instock);

    include('view/insert_product_B.php');

break; 


    case 'update_products':
    $products = get_products();
    $productID = filter_input(INPUT_POST, 'ProductID');
    $price = filter_input(INPUT_POST, 'Price');
    

$products = update_products($productID, $price);

    include('update.php');

break; 


    case 'update_products_B':

    $products = get_products();
    $productID = filter_input(INPUT_POST, 'ProductID');
    $size = filter_input(INPUT_POST, 'Size');
    $instock = filter_input(INPUT_POST, 'In_Stock');
    
    

$products = update_products_B($productID, $size, $instock);

    include('update_B.php');

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

    case '404':
        include('view/404.php');
        break;

 }   

// if ($action == FALSE) {
//     header('location: view/404.php');
//     }


include 'view/footer.php';
?>
<?php exit; ?>