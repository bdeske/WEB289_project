<?php
include_once('database.php');

	
	
	
	

$query = 'SELECT * FROM userinfo
                  WHERE email = :email';
$statement1 = $db->prepare($query);
$statement1->bindValue(':email', $email);
$statement1->execute();
$category = $statement1->fetch();
$emails = $category['email'];
$userLevels = $category['userLevel'];
$statement1->closeCursor();



?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title></title>
</head>

<!-- the body section -->
<body>
<header><h1></h1></header>
<main>
    <h1></h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Privileges</h2>
        <nav>
        <?php
            if ($userLevels == "A") {
	echo "Welcome " . $email . " you are logged in as Admin";
	} elseif($userLevels == "M") {
	echo "Welcome " . $email . " you are logged in as Member";
	} else echo "Invalid Email"?>
            
        </nav>         
    </aside>

  
</main>
<footer>
   <p>&copy 2015 Login status</p>
</footer>
</body>
</html>