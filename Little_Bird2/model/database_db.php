<?php
global $db;
$debug="true";
    // $dsn = 'mysql:host=mysql4.000webhost.com;dbname=a8935893_dodie';
    // $username = 'a8935893_doe';
    // $password = 'roseanne54';

$dsn = 'mysql:host=localhost;dbname=littlebirddb';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
        if ($debug) {
            
        }
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>