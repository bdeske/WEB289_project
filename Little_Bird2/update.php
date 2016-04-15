<main>

	<ul id="navbar">
		<li><a href="?action=go_to_home_admin">Home</a></li>
		<li><a href="?action=list_products">View Products</a></li>
		<li><a class="here" href="#">Update Products</a></li>
		<li><a href="?action=insert_product">Insert Products</a></li>
	</ul>

	<ul id="navbar2">
		<li><?php
if (!isset($_SESSION["Level"])){
		header('Location:view/login_error.php');


        }


if($_SESSION["First_Name"]) {
?>
<a href="?action=logout" tite="Logout">Logout <?php echo $_SESSION["First_Name"]; ?></a>
<?php
}
?>
		
	</ul><br>



<h1>Update Products</h1>


<form id="formval" action="." method="post" id="aligned">
        <input type="hidden" name="action" value="update_products">


        <label>Product ID:</label>
        <input type="text" name="ProductID"><br>
		
		<label>Price:</label>
        <input type="decimal" name="Price"><br>		
	
		<input class="submit" type="submit" value="Update Product" /><br>
		</form>
		
		

	</main>