<?php
    ob_start();
    session_start();
    $server = "localhost";
    $username = "root";
    $Password = "";
    $dbname = "site_commune";
    try {
        $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $Password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
    
?>
