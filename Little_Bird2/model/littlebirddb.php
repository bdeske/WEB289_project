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


function add_user($fName, $lName, $email, $address, $city, $stateID, $zipCode, $password, $level) {

    global $db;
    $query = 'INSERT INTO Users
                 (First_Name, Last_Name, Email, Address, City, StateID, Zip_Code, Password, Level)
              VALUES
                 (:First_Name, :Last_Name, :Email, :Address, :City, :StateID, :Zip_Code, :Password, :Level)';
    $statement = $db->prepare($query);
    $statement->bindValue(':First_Name', $fName);
    $statement->bindValue(':Last_Name', $lName);
    $statement->bindValue(':Email', $email);
    $statement->bindValue(':Address', $address);
    $statement->bindValue(':City', $city);
    $statement->bindValue(':StateID', $stateID);
    $statement->bindValue(':Zip_Code', $zipCode);
    $statement->bindValue(':Password', $password);
    $statement->bindValue(':Level', $level);
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
                FROM Users
                WHERE Last_Name = :Last_Name
                ORDER BY Last_Name';
                
    $statement = $db->prepare($query);
    $statement->bindValue(':Last_Name', $lName);
    $statement->execute();
    $users = $statement->fetch();
    $statement->closeCursor();
    return $users;
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



// function update_product($code, $name, $version, $release_date) {
//     global $db;
//     $query = 'UPDATE products
//               SET name = :name,
//                   version = :version,
//                   releaseDate = :release_date
//               WHERE productCode = :product_code';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':name', $name);
//     $statement->bindValue(':version', $version);
//     $statement->bindValue(':release_date', $release_date);
//     $statement->bindValue(':product_code', $code);
//     $statement->execute();
//     $statement->closeCursor();
// }
?>