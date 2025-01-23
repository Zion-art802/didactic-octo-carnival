<?php

// FOR ERROR DISPLAY...
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

// OUTPUT BUFFERING...
ob_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "web-dev";

// Database connection
$conn = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$conn) {
    die("Cannot connect to the database at the moment: " . mysqli_connect_error());
}

// Table creation query
$create_user_sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(64) NOT NULL,
    lastname VARCHAR(64) NOT NULL,
    username VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute table creation query
$user_query = mysqli_query($conn, $create_user_sql);

if (!$user_query) {
    die("Error creating table: " . mysqli_error($conn));
}

// Include additional functions
require_once "functions.php";
