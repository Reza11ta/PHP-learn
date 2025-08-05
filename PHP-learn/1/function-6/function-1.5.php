<?php

declare(strict_types=1); //this code job is when you make a function and want to sum some number in this function, but pass it string , this code show a fatal error!
function sum(int $a,   int $b)
{  //with int before the $a and $b , we made it clear that we wanted int
    return $a + $b;
};

echo sum(11, 15);
echo sum(11, "15");  //you can see the error