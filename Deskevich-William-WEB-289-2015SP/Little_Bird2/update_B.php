<!-- Author William Deskevich
Revision date: 5/4/2016
File name Little_Bird2
Description update products page for admin B view-->



<main>

	<ul id="navbar">
		<li><a href="?action=go_to_home_admin_B">Home</a></li>
		<li><a href="?action=list_products_home">View Products</a></li>
		<li><a class="here" href="#">Update Products</a></li>
		<li><a href="?action=insert_product_B">Insert Products</a></li>
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
        <input type="hidden" name="action" value="update_products_B">


        <label>Product ID:</label>
        <input type="text" name="ProductID"><br>
		
		<label>Size:</label>
        <input type="text" name="Size"><br>

        <label>In Stock:</label>
        <input type="text" name="In_Stock" ><br>		
	
		<input class="submit" type="submit" value="Update Product" /><br>
		</form>

		

	</main>