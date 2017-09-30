<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE DB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


// sql to create table
$sqlTable1 = "CREATE TABLE Comments (
    id INT(6) PRIMARY KEY, 
    postId INT(6) NOT NULL, 
    name VARCHAR(60) NOT NULL, 
    email VARCHAR(60) NOT NULL, 
    body VARCHAR(500) NOT NULL)";

if ($conn->query($sqlTable1) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sqlTable2 = "CREATE TABLE Posts (
    id INT(6) PRIMARY KEY,
    title VARCHAR(300) NOT NULL, 
    body VARCHAR(500) NOT NULL, 
    postId INT(6) NOT NULL)";

if ($conn->query($sqlTable2) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


?>