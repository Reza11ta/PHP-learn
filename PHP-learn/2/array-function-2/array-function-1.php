<?php

$arr = array("ali", "reza", "sara");
echo count($arr);

echo '<hr>';

echo sizeof($arr);

echo '<hr>';

print_r(array_keys($arr));
echo '<br>';
print_r(array_keys($arr, "reza"));
echo '<br>';
print_r(array_values($arr));

echo '<hr>';

$arr2 = array("name1" => "reza", "name2" => "ali", "name3" => "sara", "name4" => "mohammad");
if (array_key_exists("name2", $arr2)) {
    echo "key is exists";
} else {
    echo "key does not exists";
}

echo '<br>';

if (in_array("mohammad", $arr2)) {
    echo "value is exists";
} else {
    echo "value does not exists";
}

echo '<hr>';

if (is_array($arr2)) {
    echo "is array";
} else {
    echo "not array";
}

echo '<hr>';

$students = array("reza", "ali", "hamid", "bahram");
sort($students);
$studentslength = count($students);
for ($i = 0; $i < $studentslength; $i++) {
    echo $students[$i];
    echo '<br>';
}

echo '<hr>' ; 

$num = array(1 , 15 , 52 , 23 , 75 , 2 , 81 , 6);

echo max($num);
echo '<br>' ; 
echo min($num);
echo '<br>' ; 
echo end($num);
echo '<br>' ; 
echo array_sum($num);
echo '<br>' ; 
echo array_rand($num);
