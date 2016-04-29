

<main> 


<?php
if(count($_POST)>0) {
/* Validation to ensure all fields are non-empty */
foreach($_POST as $key=>$value) {
if(empty($_POST[$key])) {
$message = ucwords($key) . " field is required";
break;
}
}
/* Validation for first name field */
if(!isset($message)) {
if (!filter_var($_POST["First_Name"])) {
$message = "This field is required";
}
}

/* Validation for last name field */
if(!isset($message)) {
if (!filter_var($_POST["Last_Name"])) {
$message = "This field is required";
}
}

/* Validation about the right format of user email */
if(!isset($message)) {
if (!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
$message = "Invalid Email";
}
}

/* Validation for last name field */
if(!isset($message)) {
if (!filter_var($_POST["Password"])) {
$message = "This field is required";
}
}

if(!isset($message)) {
$message = "You have registered successfully!"; 
unset($_POST);
}

}
?>


	<ul id="navbar">
		<li><a href="?action=home">Home</a></li>
		<li><a href="?action=listproducts">View Products</a></li>
	</ul>


<ul id="navbar2">
		<li><a href="?action=sign_up">Sign Up</a></li>
		<li><a href="?action=log_in">Login</a></li>
		
	</ul>



<form id="formval" action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_user">

		
        <label for="First_Name"> First Name:</label>
        <input class="astx" type="text" name="First_Name" id="First_Name" value="<?php if(isset($_POST['First_Name'])) echo $_POST['First_Name']; ?>" required="required"><br>

        <label for="Last_Name"> Last Name:</label>
        <input class="astx" type="text" name="Last_Name" id="Last_Name"  value="<?php if(isset($_POST['Last_Name'])) echo $_POST['Last_Name']; ?>"required="required"><br>
 
        <label for="Email"> Email:</label>
        <input class="astx" type="text" name="Email" id="Email"  value="<?php if(isset($_POST['Email'])) echo $_POST['Email']; ?>" required="required"><br>	

        <label for="Password"> Password:</label>
		<input class="astx" type="text" name="Password" id="Password" value="<?php if(isset($_POST['Password'])) echo $_POST['Password']; ?>" required="required"><br>
	
		<input class="submit" type="submit" value="Add User" /><br>
		</form>
		
       
	
</main>
