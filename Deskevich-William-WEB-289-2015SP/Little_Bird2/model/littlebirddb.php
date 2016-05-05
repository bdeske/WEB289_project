
<!-- Author William Deskevich
Revision date: 5/4/2016
File name Little_Bird2
Description function library-->



<?php

// 
// get_products function returns a list of products and populates table in Web site 
// This function takes no arguments
// 

function get_products() {
    global $db;
    $query = 'SELECT ProductID, Plant_Name, Description, Size, In_Stock, Price
    FROM products';
    $statement = $db->prepare($query);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

// 
// get_product_by_Plant_Name is used in the search feature to 
// return a list of the searched for plant
// This function takes one argument: the Plant Name variable
// 

function get_product_by_Plant_Name($plantname) {
    global $db;

    $query = 'SELECT ProductID, Plant_Name, Description, Size, In_Stock, Price
    FROM products
                WHERE Plant_Name = :Plant_Name
                ORDER BY Plant_Name';
    $statement = $db->prepare($query);
    $statement->bindValue(':Plant_Name', $plantname);
    $statement->execute();
    
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

// 
// add_user function is called when a user enters their information 
// into the sign up form. Nothing is returned but the data populates the
// users table
// This function takes four arguments: the First Name variable
//                                    the Last Name variable
//                                    the Email variable
//                                    the Password variable
// 

function add_user($fName, $lName, $email, $password) {
$fName = strip_tags($fName);
    $lName = strip_tags($lName);
    $email = strip_tags($email);
    $password = strip_tags($password);
    global $db;
    $password = hash('sha256', $password);
    $query = 'INSERT INTO users
                 (First_Name, Last_Name, Email, Password)
              VALUES
                 (:First_Name, :Last_Name, :Email, :Password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':First_Name', $fName);
    $statement->bindValue(':Last_Name', $lName);
    $statement->bindValue(':Email', $email);
    $statement->bindValue(':Password', $password);
    
    $statement->execute();
    $statement->closeCursor();
    
}

// 
// valid_email function is called when a user enters their login details 
// this function does not return data but it does verify the usr email and password
// This function takes two arguments: the Email variable
//                                    the Password variable
//


function valid_email($email, $password) {
   global $db;
   $password = hash('sha256', $password);
$query = 'SELECT *
            FROM users
            WHERE Email = :Email and Password = :Password';
$statement1 = $db->prepare($query);
$statement1->bindValue(':Email', $email);
$statement1->bindValue(':Password', $password);
$statement1->execute();
$category = $statement1->fetch();
$statement1->closeCursor();
return $category;
}

// 
// level function is called when a user enters their login details 
// this function does not return data but it does verify the user level
// This function takes one arguments: the $cat variable
// which is the product of the valid_email function
//

function level($cat) { 
    global $db;

    if ($cat['Level'] == "A") {
    include('home_admin.php');
    } elseif($cat['Level'] == "M") {
    include('home_user.php');
    } elseif($cat['Level'] == "B") {
    include('home_admin_B.php');
    }
    else {
     include('view/user_login_session.php');

    echo "Invalid email or password";}
}

// 
// insert_product function is called when an Admin "A" fills out the insert product form
// this function does not return data but it does populate the products table
// This function takes seven arguments: the Product ID variable
//                                    the CatID variable
//                                    the Plant_Name variable
//                                    the Description variable
//                                    the Size variable
//                                    the In_Stock variable
//                                    the Price variable
//

function insert_product($productID, $catID, $plantname, $description, $size, $instock, $price) {

    global $db;
    $query = 'INSERT INTO products
                 (ProductID, CatID, Plant_Name, Description, Size, In_Stock, Price)
              VALUES
                 (:ProductID, :CatID,:Plant_Name, :Description, :Size, :In_Stock, :Price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ProductID', $productID);
    $statement->bindValue(':CatID', $catID);
    $statement->bindValue(':Plant_Name', $plantname);
    $statement->bindValue(':Description', $description);
    $statement->bindValue(':Size', $size);
    $statement->bindValue(':In_Stock', $instock);
    $statement->bindValue(':Price', $price);
    $statement->execute();
    $statement->closeCursor();
    
}

// 
// insert_product_B function is called when an Admin "B" fills out the insert product form
// this function does not return data but it does populate the products table
// This function takes six arguments: the Product ID variable
//                                    the CatID variable
//                                    the Plant_Name variable
//                                    the Description variable
//                                    the Size variable
//                                    the In_Stock variable
//                                    
//

function insert_product_B($productID, $catID, $plantname, $description, $size, $instock) {

    global $db;
    $query = 'INSERT INTO products
                 (ProductID, CatID, Plant_Name, Description, Size, In_Stock)
              VALUES
                 (:ProductID, :CatID,:Plant_Name, :Description, :Size, :In_Stock)';
    $statement = $db->prepare($query);
    $statement->bindValue(':ProductID', $productID);
    $statement->bindValue(':CatID', $catID);
    $statement->bindValue(':Plant_Name', $plantname);
    $statement->bindValue(':Description', $description);
    $statement->bindValue(':Size', $size);
    $statement->bindValue(':In_Stock', $instock);
    $statement->execute();
    $statement->closeCursor();
    
}

// 
// update_products function is called when an Admin "A" fills out the update product form
// this function does not return data but it does update the products table
// This function takes two arguments: the Product ID variable
//                                    the Price variable
//                                    

function update_products($productID, $price) {
    global $db;
    $query = 'UPDATE products
              SET 
                  Price = :Price
                  WHERE ProductID = :ProductID';
    $statement = $db->prepare($query);
    $statement->bindValue(':ProductID', $productID);
    $statement->bindValue(':Price', $price);
    $statement->execute();
    $statement->closeCursor();
    
}

// 
// update_products_B function is called when an Admin "B" fills out the update product form
// this function does not return data but it does update the products table
// This function takes three arguments: the Product ID variable
//                                    the Size variable
//                                    the In_Stock variable


function update_products_B($productID, $size, $instock) {
    global $db;
    $query = 'UPDATE products
              SET Size = :Size,
                  In_Stock = :In_Stock
                  WHERE ProductID = :ProductID';
    $statement = $db->prepare($query);
    $statement->bindValue(':ProductID', $productID);
    $statement->bindValue(':Size', $size);
    $statement->bindValue(':In_Stock', $instock);
    $statement->execute();
    $statement->closeCursor();
    
}

//
// Cart get_subtotal function is called when the cart is created and returns the 
// subtotal of all items in the cart This function takes no arguments
// 

function get_subtotal() {
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal_f = number_format($subtotal, 2);
    return $subtotal_f;
}

//
// Add item function for cart
//

function add_item($key, $quantity) {
    global $db;
   $products = get_products();
    if ($quantity < 1) return;
    // If item already exists in cart, update quantity
    if (isset($_SESSION['cart'][$key])) {
        $quantity += $_SESSION['cart'][$key]['qty'];
        update_item($key, $quantity);
        return;
    }

    
    $cost = $products[$key]['Price'];
    $total = $cost * $quantity;
    $item = array(
        'Plant_Name' => $products[$key]['Plant_Name'],
        'Price' => $cost,
        'qty'  => $quantity,
        'total' => $total
    );

    $_SESSION['cart'][$key] = $item;

}

//
// update item function is called When item  quantity is updated in cart
//

function update_item($key, $quantity) {
    $quantity = (int) $quantity;
    if (isset($_SESSION['cart'][$key])) {
        if ($quantity <= 0) {
            unset($_SESSION['cart'][$key]);
        } else {
            $_SESSION['cart'][$key]['qty'] = $quantity;
            $total = $_SESSION['cart'][$key]['Price'] *
                     $_SESSION['cart'][$key]['qty'];
            $_SESSION['cart'][$key]['total'] = $total;
        }
    }
}

?>