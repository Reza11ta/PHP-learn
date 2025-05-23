<?php

$a = "reza";

echo "hello" . " " . $a;

echo "<br>";

echo " <p style='color : red'> hello"  . " " .  $a . "</p> ";

echo "<hr>";

//[red] Printer code
echo "hello";   //for normal print; can print HTML & CSS in PHP / most useful print code
echo "<br>";
var_dump("hello");   //prints the value, data type, and length of the value / also for arrays / testing print code
echo "<br>";
print_r("hello");  //mostly used for arrays / testing print code

echo "<hr>";


//[red] Variables  /متغیر ها  {values are changeable  / you can change the values in another line}
// variables are case-sensitive { $txt   !=   $TXT   !=   $tXt }
$name = 'reza';
$age = 17;
var_dump($name);
echo "<br>";
var_dump($age);
echo '<br>';
var_dump($name .  $age);

$txt = 'reza';
$TXT = 'reza2';
$tXt = 'reza3';

echo '<hr>';


//[red] Constants  / ثابت ها  {values are unchangeable / you cannot change the values in another line}
// constants have global scope {you can use them in any page of the project}
const url = "kojaberim-ra.ir";  //it's more usable
var_dump(url);

echo '<br>';

define("Url", "https://www.kojaberim-ra.ir", /* third is optional {true will define it as case-insensitive} */  false);
var_dump(Url);

echo '<hr>';


//[red] Data Type
//[gd] 1 = integer = int
//[gd] 2 = float
//[gd] 3 = string
//[gd] 4 = boolean
//[gd] 5 = array
//[gd] 6 = object
//[gd] 7 = resource
//[gd] 8 = null


// 1 = int   //[w] normal numbers
$int = 15;
$int = -15;
$int = 0x1A;  //hexadecimal numbers
$int = 0123;  //octal numbers

// 2 = float   //[w] decimal numbers
$float = 1.1254;
$float = 1.2e3;

// 3 = string   //[w] anything in " " or ' '
$string = "hello";
$string = "reza @ 17 _ 1.5  -  0x1A";

// 4 = boolean   //[w] just true or false
$boolean = true;  //when printing a boolean with the value true, it returns 1
$boolean = false;  //when printing a boolean with the value false, it returns nothing but it is 0

// 5 = array     //[gd] information is in array.php page!
// 6 = object     //[gd] information is in object.php page!    

// 7 = resource   //[w] for external resources; like connection code for MySQL
$resource = mysqli_connect("localhost", "root"  /* and .... */);

// 8 = null   //[w] blank - empty - void
$null = null;  //when printing a null value, it returns nothing but it is NOT 0
