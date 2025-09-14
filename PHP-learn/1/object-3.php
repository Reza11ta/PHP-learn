<?php
$car = new stdClass;  // for start $car object
$car -> name = "audi";
$car -> model = 2024;
$car -> autogear = true ;
    
print_r($car);
echo '<br>' ; 
print_r($car -> name);

//[w] call by refrenc and call by value

//[w] read and study more about  "call by refrence"  and  "call by value"  in php