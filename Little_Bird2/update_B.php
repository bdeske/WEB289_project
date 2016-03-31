<main>

	<ul id="navbar">
		<li><a href="?action=go_to_home_admin">Home</a></li>
		<li><a href="?action=list_products">View Products</a></li>
		<li><a class="here" href="#">Update Products</a></li>
	</ul>

	<ul id="navbar2">
		<li><?php



if($_SESSION["First_Name"]) {
?>
<a href="?action=log_out" tite="Logout">Logout <?php echo $_SESSION["First_Name"]; ?></a>
<?php
}
?>
		
	</ul><br>



<h1>Update Products</h1>


<form id="formval" action="." method="post" id="aligned">
        <input type="hidden" name="action" value="update_products">


        <label>Product ID:</label>
        <input type="text" name="ProductID"><br>

        <label>Category ID:</label>
        <input type="text" name="CatID"><br>

        <label>Plant Name:</label>
        <input type="text" name="Plant_Name"><br>
		
		<label>Description:</label>
        <input type="text" name="Description"><br>
		
		<label>Size:</label>
        <input type="text" name="Size"><br>

        <label>In Stock:</label>
        <input type="text" name="In_Stock" ><br>		
	
		<input class="submit" type="submit" value="Update Product" /><br>
		</form>

		

	</main>