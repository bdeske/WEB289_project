<!-- Author William Deskevich
Revision date: 5/4/2016
File name Little_Bird2
Description homepage admin A view-->

<main>

	<ul id="navbar">
		<li><a class="here" href="#">Home</a></li>
		<li><a href="?action=list_products">View Products</a></li>
		<li><a href="?action=update_products">Update Products</a></li>
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