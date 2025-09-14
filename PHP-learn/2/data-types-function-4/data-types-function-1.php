<?php

//[w] gettype shows the data type of the variable
$a = "10"; // string
echo gettype($a);

echo '<hr>' ; 

$b = 10; // integer
echo gettype($b);

echo '<hr>' ; 

$c = 5.53; // double (float)
echo gettype($c);

echo '<hr>' ; 

$d = array(); // array
echo gettype($d);

echo '<hr>' ; 

$e = "reza"; // string
echo gettype($e);

echo '<hr>' ; 

$f = null; // NULL
echo gettype($f);

echo '<hr>' ; 

$g = ""; // string (empty)
echo gettype($g);

echo '<hr>' ; 

$h = new stdClass; // object
echo gettype($h);

echo '<hr>' ; 

$i = tmpfile(); // resource
echo gettype($i);

echo '<hr>' ; 

$g = true; // boolean
echo gettype($g);

echo '<hr>' ; 

//[w] empty() returns true if the variable is empty

//[w] $a = "10" → not empty, so false
if (empty($a)){
    echo "true";
}else{
    echo "false";
}

echo '<hr>' ; 

//[w] $g = true → not empty, so false
if (empty($g)){
    echo "true";
}else{
    echo "false";
}

echo '<hr>' ; 

//[w] $f = null → empty, so true
if (empty($f)){
    echo "true";
}else{
    echo "false";
}
