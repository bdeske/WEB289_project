This is in the folder LOGIN----index.php

error = array();
$message = array();
switch($action){
	case 'view_login':
		include 'login.php';
		break;

	case 'login':
		$userName = filter_input(INPUT_POST, 'userName');
		$password = filter_input(INPUT_POST, 'password');

		$member_user = is_valid_member_login($userName, $password);
		$admin_user = is_valid_admin_login($userName, $password);
		print_r($member_user);
		if ($userName == NULL || $userName == FALSE) {
		  	$error = 'Please enter a valid userName';
		  	include('login.php');

		} else if ($password == NULL || $password == FALSE) {
		  	$error = 'Please enter a valid password';
		  	include('login.php');

This is the login.php

        <h2>Login Page</h2>
   
        <form action="." method="post" class="formInput">
          <input type="hidden" name="action" value="login">
          
          <label for="username">Username:</label>
          <input type="text"  name="userName" id="userName" size="30" placeholder="Please enter a Username" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
          <br>
          <label for="password">Password:</label>
          <input type="password"  name="password" id="password" size="30" placeholder="Please enter a Password">
          <br>
          
          <button class="button" type="submit" value="Login">Login</button>
        </form>

Finally this is the model---> member_db.php #####this is the function to create the user, notice how i did the password
hash!

<?php
function add_member( $userName, $firstName, $lastName, $password, $email, $phone, $userlevel) {
    global $db;
    $password = hash('sha256', $password);
    $query = 
    'INSERT INTO users
            (users_userName, users_firstName, users_lastName, users_password, users_email, users_phone, users_userLevel )
        VALUES
            (:users_userName, :users_firstName, :users_lastName, :users_password, :users_email, :users_phone, :users_userLevel )';
    $statement = $db->prepare($query);
    $statement->bindValue(':users_userName', $userName);
    $statement->bindValue(':users_firstName', $firstName);
    $statement->bindValue(':users_lastName', $lastName);
    $statement->bindValue(':users_password', $password);
    $statement->bindValue(':users_email', $email);
    $statement->bindValue(':users_phone', $phone);
    $statement->bindValue(':users_userLevel', $userlevel);  
    $statement->execute();
    $statement->closeCursor();
   
}