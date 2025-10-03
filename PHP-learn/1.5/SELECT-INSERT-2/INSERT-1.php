<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Register</title>
</head>
<body>
    <h2>Register Form</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name" required> <br><br>
        Email: <input type="email" name="email" required> <br><br>
        Password: <input type="password" name="password" required> <br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>

<?php
// connection (we already learned this part)
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "test_db";

$conn = new mysqli($servername, $username, $password, $database);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// check if the form is submitted
if (isset($_POST['submit'])) {   //[w] this checks if user clicked the submit button

    // get values from the form
    $name     = $_POST['name'];      //[w] take the input 'name'
    $email    = $_POST['email'];     //[w] take the input 'email'
    $password = $_POST['password'];  //[w] take the input 'password'

    // SQL query to insert new data
    $sql = "INSERT INTO users (name, email, password) 
            VALUES ('$name', '$email', '$password')";  //[w] this is the INSERT query

    // run the query
    if ($conn->query($sql) === TRUE) {   //[w] this runs the SQL query on database
        echo "شمابا موفقیت ثبت نام شدید";
    } else {
        echo "Error: " . $conn->error;   //[w] show error if query fails
    }
}

// close the connection
$conn->close();   //[w] always close connection at the end

