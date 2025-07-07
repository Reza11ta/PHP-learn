<?php

$str = "test";
$arr1 = array("reza" , "ali" , "sara" , "mohammad");
$arr2 = array("name" => "reza" , "family" => "tavakoli" , "age" => 18  );

print_r(array_chunk($arr1 , 2));

echo '<hr>' ; 

print_r(array_merge($arr1,$arr2));

echo '<hr>' ; 

$arr3 =  array("reza" , "ali" , "sara" , "mohammad" , "reza" , "sara");
print_r(array_unique($arr3));

echo '<hr>' ; 

print_r(array_reverse($arr1));

echo '<hr>' ; 

echo array_search("reza" , $arr2);

echo '<hr>' ; 

$arrD1 = array("name" => "reza" , "family" => "tavakoli" , "age" => 18 );
$arrD2 = array("name" => "ali" , "family" => "tavakoli" , "age" => 19 );

print_r(array_diff($arrD1 , $arrD2));

echo '<hr>' ; 

print_r(array_slice($arr3 , 3));

echo '<hr>' ; 

print_r(array_splice($arr1 , 2 , 2 , $arr2));

echo '<hr>' ; 

print_r(array_shift($arr1));

echo '<hr>' ; 

print_r(array_push($arr1 , "javad"  , "ava"));

echo '<hr>' ; 

print_r(array_pop($arr1));

echo '<hr>' ; 

$arr4 = array_fill(0,10,"hello");
print_r($arr4);

echo '<hr>' ; 

$num = array(1,2,3,4,5,6,7,8,9,10);
function odd( int $value){
    return($value & 1);
}
function even( int $value){
    return(!($value & 1));
}

print_r(array_filter($num , "odd"));
echo '<br>' ; 
print_r(array_filter($num , "even"));

echo '<hr>' ; 

$name = "reza";
$age = 18;
$gender = "male";

print_r(compact("name" , "age" , "gender"));

