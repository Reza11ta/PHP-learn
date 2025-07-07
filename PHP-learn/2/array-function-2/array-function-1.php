<?php

//[w] count gives number of items in the array
$arr = array("ali", "reza", "sara");
echo count($arr);

echo '<hr>';

//[w] sizeof also gives number of items (same as count)
echo sizeof($arr);

echo '<hr>';

//[w] array_keys shows all the keys of the array
print_r(array_keys($arr));
echo '<br>';

//[w] array_keys with a value shows key(s) that have that value
print_r(array_keys($arr, "reza"));
echo '<br>';

//[w] array_values shows all values of the array
print_r(array_values($arr));

echo '<hr>';

$arr2 = array("name1" => "reza", "name2" => "ali", "name3" => "sara", "name4" => "mohammad");

//[w] array_key_exists checks if a key exists
if (array_key_exists("name2", $arr2)) {
    echo "key is exists";
} else {
    echo "key does not exists";
}

echo '<br>';

//[w] in_array checks if a value exists in the array
if (in_array("mohammad", $arr2)) {
    echo "value is exists";
} else {
    echo "value does not exists";
}

echo '<hr>';

//[w] is_array checks if the variable is an array
if (is_array($arr2)) {
    echo "is array";
} else {
    echo "not array";
}

echo '<hr>';

//[w] sort sorts the array in ascending order
$students = array("reza", "ali", "hamid", "bahram");
sort($students);
$studentslength = count($students);
for ($i = 0; $i < $studentslength; $i++) {
    echo $students[$i];
    echo '<br>';
}

echo '<hr>';

//[w] max gives the biggest number
//[w] min gives the smallest number
//[w] end gives the last item
//[w] array_sum adds all numbers
//[w] array_rand picks a random key
$num = array(1 , 15 , 52 , 23 , 75 , 2 , 81 , 6);

echo max($num);
echo '<br>';
echo min($num);
echo '<br>';
echo end($num);
echo '<br>';
echo array_sum($num);
echo '<br>';
echo array_rand($num);
