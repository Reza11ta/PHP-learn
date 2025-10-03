<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Login</title>
</head>
<body>
    <h2>Login Form</h2>
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
if (isset($_POST['login'])) {   //[w] check if login button was clicked

    // get form values
    $email    = $_POST['email'];     //[w] take the input 'email'
    $password = $_POST['password'];  //[w] take the input 'password'

    // SQL query to check user
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'"; 
    //[w] SELECT all columns from users table where email and password match

    $result = $conn->query($sql);  //[w] run the query

    if ($result->num_rows > 0) {   //[w] if rows found, login is successful
        echo "با موفقیت لاگین شدید)";
    } else {
        echo "Invalid email or password!";
    }
}

// close the connection
$conn->close();

