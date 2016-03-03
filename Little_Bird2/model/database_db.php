<?php
global $db;
$debug="true";
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