<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="<?php echo  $_SERVER['PHP_SELF']   ?>" method="GET"> <!-- if action is empty means the form send to this correct page, but for safe code, you can add this  $_SERVER['PHP_SELF']   -->

        <label for="text">نام</label>
        <input type="text" name="firstName" id="text">
        <br>
        <label for="age">سن</label>
        <input type="text" name="age" id="age">
        <br>
        <input type="submit" value="اسال">

    </form>




<?php
    if (!empty ($_GET["firstName"]) && !empty($_GET["age"])) { //if with methode GET can get the "firstName" and "age" (firstName and age are the name in html form) run the code
        $userFirtsName = $_GET["firstName"]; //[w] we get the input and send them in the variabels
        $userAge = $_GET["age"];

        echo "welcome  $userFirtsName  with  $userAge years old"; 
    }else{
        echo "please fill the input";
    }
   
?>
</body>

</html>