<?php

$name = "reza tavakoli";
$num = 1800000;

//[w] is_string checks if the variable is a string
echo is_string($name); // if it shows 1, it means it's a string
echo is_string($num);  // if it doesn't show anything, it means it's not a string

echo '<hr>';

//[w] strlen shows us the length of the string
echo strlen($name);

echo '<hr>';

//{w] lcfirst makes the first character lowercase
echo lcfirst($name);

echo '<hr>';

//[w] ucfirst makes the first character uppercase
echo ucfirst($name);

echo '<hr>';

//[w] ucwords makes the first character of each word uppercase
echo ucwords($name);

echo '<hr>';

//[w] strtoupper makes the whole string uppercase
echo strtoupper($name);

echo '<hr>';

//[w] strtolower makes the whole string lowercase
echo strtolower($name);

echo '<hr>';

//[w] ltrim removes an optional character from the left
echo ltrim($name, "r");

echo '<hr>';

//[w] rtrim removes an optional character from the right
echo rtrim($name, "li");

echo '<hr>';

//[w] trim removes an optional character (or whitespace by default)
echo trim($name); // [gd] if no character is set, it removes whitespace

echo '<hr>';

$name2 = "reza \n tavakoli";
//[w] nl2br adds a line break (<br>) where \n is found
echo nl2br($name2);

echo '<hr>';

//[w] number_format separates the number with commas every three digits
echo number_format($num);
