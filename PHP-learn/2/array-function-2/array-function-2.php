<?php

$str = "test";
$arr1 = array("reza" , "ali" , "sara" , "mohammad");
$arr2 = array("name" => "reza" , "family" => "tavakoli" , "age" => 18);

//[w] array_chunk splits array into parts with fixed size
print_r(array_chunk($arr1 , 2));

echo '<hr>' ; 

//[w] array_merge joins two arrays into one
print_r(array_merge($arr1,$arr2));

echo '<hr>' ; 

$arr3 = array("reza" , "ali" , "sara" , "mohammad" , "reza" , "sara");

//[w] array_unique removes duplicate values
print_r(array_unique($arr3));

echo '<hr>' ; 

//[w] array_reverse flips the array order
print_r(array_reverse($arr1));

echo '<hr>' ; 

//[w] array_search finds the key of a value
echo array_search("reza" , $arr2);

echo '<hr>' ; 

$arrD1 = array("name" => "reza" , "family" => "tavakoli" , "age" => 18);
$arrD2 = array("name" => "ali" , "family" => "tavakoli" , "age" => 19);

//[w] array_diff shows values in arrD1 that are not in arrD2
print_r(array_diff($arrD1 , $arrD2));

echo '<hr>' ; 

//[w] array_slice gets a part of array (does not change original)
print_r(array_slice($arr3 , 3));

echo '<hr>' ; 

//[w] array_splice removes part of array and can replace it with another
print_r(array_splice($arr1 , 2 , 2 , $arr2));

echo '<hr>' ; 

//[w] array_shift removes first item from array
print_r(array_shift($arr1));

echo '<hr>' ; 

//[w] array_push adds items to the end of array
print_r(array_push($arr1 , "javad" , "ava"));

echo '<hr>' ; 

//[w] array_pop removes the last item from array
print_r(array_pop($arr1));

echo '<hr>' ; 

//[w] array_fill creates array and fills it with one value
$arr4 = array_fill(0, 10, "hello");
print_r($arr4);

echo '<hr>' ; 

$num = array(1,2,3,4,5,6,7,8,9,10);

//[w] array_filter keeps only items that pass the function
function odd(int $value){
    return ($value & 1); // if odd
}
function even(int $value){
    return (!($value & 1)); // if even
}

print_r(array_filter($num , "odd"));
echo '<br>' ; 
print_r(array_filter($num , "even"));

echo '<hr>' ; 

$name = "reza";
$age = 18;
$gender = "male";

//[w] compact makes an array from variables
print_r(compact("name" , "age" , "gender"));
