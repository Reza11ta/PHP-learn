<?php

$i = 0 ;

while($i <= 10 ){  //until $i is less than or equal to 10 , this code run
    echo $i . "  ";
    $i ++; //$i is 0 , when while start, $i plus 1;
}
//[w] if your while never be false , you would get stuck in an infinite loop!


echo '<br>' ; 
echo '<br>' ; 

$a = 0 ;
do {  // it means this code run for 1 time if our while not true
    echo $a . "  ";
    $a ++;
} while ($a <= 10);


echo '<br>' ; 
echo '<hr>' ; 
echo '<br>' ; 

for ( $j=10 ;  $j >= 0 ; $j--) {  //for is the condensed version of while , at fist we make $j , then make condition , and in the end we decide to -1 or +1
    echo $j . "  ";
}

//[w] i recommend you read about sizeof in php!
echo '<br>' ; 
echo '<hr>' ; 
echo '<br>' ;


$array = array(1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10);

foreach ($array as $value) {  // forech is better version of for with better ability and easyer to write  
    echo $value . "  ";
}

echo '<br>' ; 
foreach ($array as $value) { 
    if($value == 3)continue; //it means when foreach arrived 3 , skip 3 and do not print 3  
    echo $value . "  ";
}

echo '<br>' ; 
echo '<br>' ; 

$users = array(

    "reza" => [
        "job" => "admin",
        "age" => 17,
        "email" => "reza1110.work@gmail.com"
    ],

    "ali" => [
        "job" => "editor",
        "age" => 25,
        "email" => "ali@gmail.com"
    ],

    "sara" => [
        "job" => "author",
        "age" => 19,
        "email" => "sara@gmail.com"
    ]

);

foreach ($users as $key => $value) {  //  $key => $value means we want use the arrays key and value
    echo "$key  :  {$value["job"] }  - age : {$value["age"] } <br>";
};

//[gd] the best loop is foreach!
