<?php
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

function add_user($fName, $lName, $email, $address, $city, $stateID, $zipCode, $password) {

    global $db;
    $query = 'INSERT INTO users
                 (First_Name, Last_Name, Email, Address, City, StateID, Zip_Code, Password)
              VALUES
                 (:First_Name, :Last_Name, :Email, :Address, :City, :StateID, :Zip_Code, :Password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':First_Name', $fName);
    $statement->bindValue(':Last_Name', $lName);
    $statement->bindValue(':Email', $email);
    $statement->bindValue(':Address', $address);
    $statement->bindValue(':City', $city);
    $statement->bindValue(':StateID', $stateID);
    $statement->bindValue(':Zip_Code', $zipCode);
    $statement->bindValue(':Password', $password);
    
    $statement->execute();
    $statement->closeCursor();
    
}

function get_users() {
    global $db;
    $query = 'SELECT * 
    FROM users';
    $statement = $db->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll();
    $statement->closeCursor();
    return $users;
}

function get_users_by_last_name($lName) {
    echo "hfjhah";
    global $db;
    $query = 'SELECT First_Name, Last_Name, Email, City
                FROM users
                WHERE Last_Name = :Last_Name
                ORDER BY Last_Name';
                
    $statement = $db->prepare($query);
    $statement->bindValue(':Last_Name', $lName);
    $statement->execute();
    $users = $statement->fetch();
    $statement->closeCursor();
    return $users;
}

function valid_email($email, $password) {

   global $db;
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

    echo "Invalid Email";}
}


// function get_customer_by_email($email) {
//     global $db;
//     $query = 'SELECT customerID, firstName, lastName
//               FROM customers 
//               WHERE email = :email';
//     $statement = $db->prepare($query);
//     echo $query;
//     $statement->bindValue(':email', $email);
//     $statement->execute();
//     $customer = $statement->fetch();
//     $statement->closeCursor();
//     return $customer;
// }
// function get_products_by_customer($email) {
//     global $db;
//     $query = 'SELECT products.productCode, products.name 
//               FROM products
//                 INNER JOIN registrations ON products.productCode = registrations.productCode
//                 INNER JOIN customers ON registrations.customerID = customers.customerID
//               WHERE customers.email = :email';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':email', $email);
//     $statement->execute();
//     $products = $statement->fetchAll();
//     $statement->closeCursor();
//     return $products;
// }



// function delete_product($product_code) {
//     global $db;
//     $query = 'DELETE FROM products
//               WHERE productCode = :product_code';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':product_code', $product_code);
//     $statement->execute();
//     $statement->closeCursor();
// }

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

// Get cart subtotal
function get_subtotal() {
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal_f = number_format($subtotal, 2);
    return $subtotal_f;
}

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

    // Add item
    $cost = $products[$key]['Price'];
    $total = $cost * $quantity;
    $item = array(
        'Plant_Name' => $products[$key]['Plant_Name'],
        'Price' => $cost,
        'qty'  => $quantity,
        'total' => $total
    );

    $_SESSION['cart'][$key] = $item;
    // $query = 'SELECT Plant_Name, Price
    // FROM products';
    // $statement = $db->prepare($query);
    // $statement->execute();
    // $item = $statement->fetchAll();
    // $statement->closeCursor();
    // return $item;
    // var_dump($item);
}

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