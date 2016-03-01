<!doctype html>
<html lang="en">

<head>
<title></title>
<meta charset="utf-8">
</head>

<body>
<?phpinclude_once('database.php');?>
<?phpinclude_once('Functions.php');?>




<form id="email" method="get" action="Functions.php">
<h3>
Enter E-mail
</h3>
<input type="text" name="email"><br>
<input type="submit" name="submit" value="submit">
</form>

<?phpvalid_email($email);?>

</body>


</html>