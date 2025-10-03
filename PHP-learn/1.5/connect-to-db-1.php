<?php
// [1] connection information
$servername = "localhost";  //[w] usually localhost for XAMPP
$username   = "root";       //[w] default user in XAMPP
$password   = "";           //[w] default password is empty
$database   = "test_db";    //[w] database name you created in phpMyAdmin

// [2] create connection
$conn = new mysqli($servername, $username, $password, $database);

// [3] check connection
if ($conn->connect_error) {   //[w] if there is any error in connection
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}

// [gd] Always close connection when done
$conn->close();

