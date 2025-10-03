<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Register</title>
</head>
<body>
    <h2>Register Form (Secure)</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name" required> <br><br>
        Email: <input type="email" name="email" required> <br><br>
        Password: <input type="password" name="password" required> <br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>

<?php
// connection (same as before)
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "test_db";

$conn = new mysqli($servername, $username, $password, $database);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// check if form is submitted
if (isset($_POST['submit'])) {

    $name     = $_POST['name'];      
    $email    = $_POST['email'];
    $password = $_POST['password'];

    //[w] hash the password before saving
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);  
    //[gd] this creates a secure hash (e.g. $2y$10$...) instead of storing plain text

    //[w] SQL query with hashed password
    $sql = "INSERT INTO users (name, email, password) 
            VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "New user registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// close connection
$conn->close();
?>
