<?php

//anonymous function :

//[w] anonymous functions are functions without names! so for call them , we should put them into a variable

$sum = function ( int $a   ,    int $b){
    return $a + $b;
};

echo $sum(12  ,   15);


echo '<br>' ; 
echo '<hr>' ; 
echo '<br>' ; 


//[w] in some case we want our function output is more than one output!

// function UpperLower( string $name){  
//     return strtoupper($name);  
//     //[gd] strtoupper make word uppercase(like : REZA)  AND strtolower make word lowercase(like : reza)
//     return strtolower( $name);
// };
//[red] this way is wrong becuase just return first return!
// echo UpperLower("REZA");  


//[red] the right way is like that :

function UpperLower(string $name) {
    $result = array(
        'uppercase' => strtoupper($name),
        'lowercase' => strtolower($name)
    );

    return $result;
};

var_dump(UpperLower("rEza"));
// if we want just one of the array value :
echo '<br>' ; 
$name2 = UpperLower("reza");
echo $name2['uppercase']; 
