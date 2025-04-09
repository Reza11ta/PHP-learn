<?php

$a = "reza";

echo "hello" . " " . $a;

echo "<br>";

echo " <p style='color : red'> hello"  . " " .  $a . "</p> ";

echo "<hr>";

//[red] Printer code
echo "hello";   //for normal print ; and print HTML & CSS in the PHP / most usful print code
echo "<br>";
var_dump("hello");   //print the value and DataType and Length of the value and also for array / testing print code
echo "<br>";
print_r("hello");  //most use for array /testing print code

echo "<hr>";



//[red] Variables  /متغیر ها  {values are changeable  / you can change the values in another line}
// variables are case_sensitive { $txt   !=   $TXT   !=   $tXt }
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



//[red] Constants  / ثابت ها  {values are unchangeable / you can not change the values in another line}
// constants are global scope {you can use them in any page of project}
const url = "kojaberim-ra.ir";  //its more usabale
var_dump(url);

echo '<br>';

define("Url", "https://www.kojaberim-ra.ir", /* third is optional {true is will be definde case} */  false);
var_dump(Url);

echo '<hr>';



//[red] Data Type
//[gd] 1= integer = int
//[gd] 2= float
//[gd] 3= string
//[gd] 4= boolean
//[gd] 5= array
//[gd] 6= object
//[gd] 7= resourse
//[gd] 8= null


// 1=int   //[w] normal numbers
$int = 15;
$int = -15;
$int = 0x1A;  //hexadecimal numbers
$int = 0123;  //octal numbers

// 2=float   //[w] decimal numbers
$float = 1.1254;
$float = 1.2e3;

// 3=string   //[w] anything in the " " or ' '
$string = "hello";
$string = "reza @ 17 _ 1.5  -  0x1A";

// 4=boolean   //[w] just true or false
$boolean = true;  // when print boolean with the value true ; its return 1
$boolean = false;  // when print boolean with the value false ; its return nothing but its 0

// 5=array     //[gd] informations is in array.php page !
// 6=object     //[w] information in the high level !    

// 7=resourse   //[w] for the external resourse ; like connection code for MySql
$resource = mysqli_connect("localhost" , "root"  /* and .... */);

// 8=null   //[w] blank - empty - void
$null = null;  // when print boolean with the value false ; its return nothing but its NOT 0

 