<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="<?php echo  $_SERVER['PHP_SELF']   ?>" method="POST"> <!-- if action is empty means the form send to this correct page, but for safe code, you can add this  $_SERVER['PHP_SELF']   -->

    <label for="text">نام</label>
    <input type="text" name="firstName" id="text">
    <br>
    <label for="age">سن</label>
    <input type="text" name="age" id="age">
    <br>
    <input type="submit" name="submit" value="اسال">

</form>


<?php
if (isset($_POST["submit"])) {  //[gd] wiht isset , we say if user click on the submit butten , run the code (isset its something like when we want to say :  ok if the form send the info , we check it)
    if (!empty($_POST["firstName"]) && !empty($_POST["age"])) { //if with methode POST can get the "firstName" and "age" (firstName and age are the name in html form) run the code
        $userFirtsName = $_POST["firstName"]; //[w] we get the input and send them in the variabels
        $userAge = $_POST["age"];

        echo "welcome  $userFirtsName  with  $userAge years old";
    } else {
        echo "please fill the input";
    }
}
?>
</body>

</html>