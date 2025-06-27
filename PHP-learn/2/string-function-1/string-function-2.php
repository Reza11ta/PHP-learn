<?php

//[w] explode splits the string into parts using a character
$str = "hello , imreza .  its a , nice day";
print_r(explode(",", $str));

echo '<hr>';

//[w] implode joins array items into one string with a character
$arr = array('hello', 'world');
echo implode('/', $arr);

echo '<hr>';

//[w] substr gets part of the string (from index 6 to end)
$str2 = "hello world";
echo substr($str2, 6);

echo '<hr>';

//[w] strstr finds the first match and shows the rest of the string
echo strstr($str2, 'r');

echo '<hr>';

//[w] str_replace replaces text inside a string
$str3 = "hello reza ";
echo str_replace("reza", "sara", $str3);

echo '<hr>';

//[w] str_repeat repeats the string many times
echo str_repeat($str3, 4);

echo '<hr>';

//[w] str_shuffle changes the order of characters randomly
echo str_shuffle($str3);

echo '<hr>';

//[w] str_word_count counts how many words in the string
echo str_word_count($str3);

echo '<hr>';

$str4 = "hello world. i like you!";
//[w] strtok splits string into words, one by one
$token = strtok($str4, " ");

while ($token == true) {
    echo "$token<br>";
    $token = strtok(" ");
}

echo '<hr>' ; 

$str = "reza is 30 years old";

//[w] stripos finds the position of a letter (case-insensitive)
echo stripos($str, "y");

echo '<hr>' ; 

//[w] md5 makes a hash (fixed string) from the input
echo md5($str);

