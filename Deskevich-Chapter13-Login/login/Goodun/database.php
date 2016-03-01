<?php
global $db;
$debug = true;

if ($_SERVER['HTTP_HOST'] == "localhost" OR $_SERVER['HTTP_HOST'] == "127.0.0.1") {
$dsn = 'mysql:host=localhost;dbname=users';
$username = 'root';
$password = '';
$host_location = "local";
} else {
$dsn = 'mysql:host=localhost;dbname=users';
$username = 'root';
$password = '';
$host_location = "remote";
}

try {
$db = new PDO($dsn, $username, $password);
if ($debug) {
echo "Successfully connected to: " . $host_location;
echo "<p />";
}
}
catch (PDOException $e) {
$error_message = $e->getMessage();
echo $error_message;
exit();
}
?>