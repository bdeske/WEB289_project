

<main> 

	<ul id="navbar">
		<li><a href="/WEB289/Little_Bird2/index.php">Home</a></li>
		<li><a href="product_manager/view/index.php">View Products</a></li>
	</ul>

<ul id="navbar2">
		
		<li><a href="?action=home">Logout</a></li>
	</ul>



<form id="formval" action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_user">


        <label>First Name:</label>
        <input type="text" name="First_Name"><br>

        <label>Last Name:</label>
        <input type="text" name="Last_Name"><br>

        <label>Email:</label>
        <input type="text" name="Email" /><br>
		
		<label>Address:</label>
        <input type="text" name="Address"><br>
		
		<label>City:</label>
        <input type="text" name="City"><br>

        <label>State:</label>
        <input type="text" name="StateID" /><br>
		
		<label>Zip Code:</label>
        <input type="text" name="Zip_code"><br>		

        <label>Password:</label>
		<input type="text" name="Password" /><br>

		<label>Level:</label>
        <input type="text" name="Level" /><br>
		
		
		
		<input type="submit" value="Add User" /><br>
		</form>
		
       
	<p><a href="?action=search_users">Search Users</a></p>
</main>
