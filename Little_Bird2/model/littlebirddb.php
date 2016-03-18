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
    } else echo "Invalid Email";
}
// if ($userLevels == "A") {
//     echo "Welcome " . $email . " you are logged in as Admin";
//     } elseif($userLevels == "M") {
//     echo "Welcome " . $email . " you are logged in as Member";
//     } else echo "Invalid Email"

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

// function get_product($product_code) {
//     global $db;
//     $query = 'SELECT * FROM products
//               WHERE productCode = :product_code';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':product_code', $product_code);
//     $statement->execute();
//     $product = $statement->fetch();
//     $statement->closeCursor();
//     return $product;
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



function update_products($productID, $plantname, $description, $size, $instock, $price) {
    global $db;
    $query = 'UPDATE Products
              SET Plant_Name = :Plant_Name,
                  Description = :Description,
                  Size = :Size
                  In_Stock = :In_Stock,
                  Price = :Price
              WHERE productID :ProductID';
    $statement = $db->prepare($query);
    $statement->bindValue(':ProductID', $productID);
    $statement->bindValue(':Plant_Name', $plantname);
    $statement->bindValue(':Description', $description);
    $statement->bindValue(':Size', $size);
    $statement->bindValue(':In_Stock', $instock);
    $statement->bindValue(':Price', $price);
    $statement->execute();
    $products = $statement->fetch();
    $statement->closeCursor();
    return $products;
}
?>