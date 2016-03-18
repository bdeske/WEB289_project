

<main>

	<ul id="navbar">
		<li><a class="here" href="#">Home</a></li>
		<li><a href="?action=list_products">View Products</a></li>
		<li><a href="?action=update_products">Update Products</a></li>
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



<h1>Administrators Page</h1>

<p id="info"> <span>At Little Bird Gardens </span>we specialize in finding quality trees, shrubs, and perennials at a very affordable price. All of our plants have been inspected to ensure the highest quality for our customers.  </p>

<img id="homephoto" src="images/20140730_112110.jpg" alt="Liatris in bloom" width="350" height="250">

	<ul id="list">
		<li>Quality Shrubs</li>
		<li>Beautiful Perennials</li>
		<li>Evergreen Trees</li>
		<li>Deciduous Trees</li>
	</ul>		
		

	</main>