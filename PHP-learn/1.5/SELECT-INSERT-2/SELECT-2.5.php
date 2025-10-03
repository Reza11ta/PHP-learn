<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Login</title>
</head>
<body>
    <h2>Login Form (Secure)</h2>
    <form method="POST" action="">
        Email: <input type="email" name="email" required> <br><br>
        Password: <input type="password" name="password" required> <br><br>
        <input type="submit" name="login" value="Login">
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

// check if login form is submitted
if (isset($_POST['login'])) {

    $email    = $_POST['email'];     
    $password = $_POST['password'];  

    //[w] SELECT only the user with this email
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1"; 
    //[gd] we don't check password here, because passwords are hashed

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //[w] fetch user row
        $row = $result->fetch_assoc();

        //[w] verify entered password with hashed password in DB
        if (password_verify($password, $row['password'])) {  
            //[w] password_verify() compares plain password with hashed one
            echo "Login successful! Welcome " . $row['name'];
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "No user found with this email!";
    }
}

// close connection
$conn->close();

