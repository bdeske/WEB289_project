

<main> 

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


        <label>First Name:</label>
        <input type="text" name="First_Name" required="required"><br>

        <label>Last Name:</label>
        <input type="text" name="Last_Name" required="required"><br>

        <label>Email:</label>
        <input type="text" name="Email" required="required"><br>
		
		<label>Address:</label>
        <input type="text" name="Address"><br>
		
		<label>City:</label>
        <input type="text" name="City"><br>

        <label>State:</label>
        <input type="text" name="StateID" ><br>
		
		<label>Zip Code:</label>
        <input type="text" name="Zip_code"><br>		

        <label>Password:</label>
		<input type="text" name="Password" required="required"><br>
	
		<input class="submit" type="submit" value="Add User" /><br>
		</form>
		
       
	<!-- <p><a href="?action=search_users">Search Users</a></p> -->
</main>
