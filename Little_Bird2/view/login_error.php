<!doctype html>
<head>
<title>Little Bird Gardens</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/lilBird.css">
<link href="css/medium.css" rel="stylesheet" media="screen and (min-width: 481px) and (max-width: 768px)">
<link href="css/small.css" rel="stylesheet" media="screen and (min-width: 240px) and (max-width: 480px)">
<!--[if lt IE 9]>
<script src="http://html5shim.goog
<html lang="en">
le.com/svn/trunk/html5.js">
</script>
<! [endif]-->
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<script src="js/lilbirdcalls.js" type="text/javascript"></script>
<script src="js/lilbird.js" type="text/javascript"></script>
</head>

<body>

<div id="wrap">
<header>
<h1>Little Bird Gardens</h1>

</header>



<main>
	<ul id="navbar">
		<li><a href="../index.php">Home</a></li>
		<li><a href="../index.php?action=listproducts">View Products</a></li>
	</ul>


	<ul id="navbar2">
		<li><a href="../index.php?action=sign_up">Sign Up</a></li>
		<li><a href="../index.php?action=log_in">Login</a></li>
		
	</ul>

<h1>Login Error</h1>

	<p>You do Not have access to this Page</p>
	<p>Please sign in to open an account or login to use the site</p>
<?php echo $_SESSION['Level'];?>
</main>
<footer>
<p>Copyright &copy; 2016 Little Bird Gardens</p>

</footer>
</div>

</body>


</html>