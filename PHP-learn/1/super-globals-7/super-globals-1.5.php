<?php

echo "<pre>";
var_dump($_SERVER); //you can see very information in this array
echo "</pre>";

echo '<hr>' ; 

//[red] some importtant :
print_r($_SERVER['HTTP_HOST']);
echo '<br>' ; 
print_r($_SERVER['PHP_SELF']); //the path of the file (its usable for form{you can see the exampe in : super-globals-2.php})
echo '<br>' ; 
print_r($_SERVER['HTTP_USER_AGENT']);  //some info about user
echo '<br>' ; 
print_r($_SERVER['SERVER_SOFTWARE']);
echo '<br>' ; 
print_r($_SERVER['SERVER_ADDR']); //server ip
echo '<br>' ; 
print_r($_SERVER['REMOTE_ADDR']); //user ip
echo '<br>' ; 
print_r($_SERVER['SERVER_PROTOCOL']); //http or https
echo '<br>' ; 
print_r($_SERVER['SCRIPT_FILENAME']); //full addres of the file
