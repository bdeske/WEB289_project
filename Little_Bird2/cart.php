<main>

	<ul id="navbar">
		<li><a href="?action=go_to_home">Home</a></li>
		<li><a href="?action=list_products_user">View Products</a></li>
		<li><a class="here" href="#">Go to Cart</a></li>
	</ul>

	<ul id="navbar2">
		<li><?php
if($_SESSION["First_Name"]) {
?>
Welcome <?php echo $_SESSION["First_Name"]; ?>. Click here to <a href="?action=log_out" tite="Logout">Logout</a>
<?php
}
?>
		
	</ul><br>

 



<h1>This Page Under Construction</h1>

<p>There will be more to come</p>


		

	</main>