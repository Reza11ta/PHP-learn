<?php
$car = new stdClass;  // for start $car object
$car -> name = "audi";
$car -> model = 2024;
$car -> autogear = true ;

print_r($car);
echo '<br>' ; 
print_r($car -> name);

//[w] call by refrenc and call by value

//[gd] In PHP, Call by Reference means passing the variable itself, not just its value. So, if you change the variable inside the function, it also changes outside the function. We do this by adding  "&"  before the parameter in the function.
//[gd] In PHP, Call by Value means passing only the value of the variable to the function. So, if you change the variable inside the function, it doesn't change outside the function. This is the default behavior in PHP.

//[w] read and study more about  "call by refrence"  and  "call by value"  in php