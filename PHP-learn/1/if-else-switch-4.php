<?php

$number = 35;

if ($number < 100) { // if our condition {stipulation} is true , the code in the "{ }" start  but if is not true , the code skip the "{ }" and go to else block (if we have else)
    // code to be executed
    echo $number . " is smaller than 100 ";
} else {  // else is optional , but if you use else and if is not true , else start
    echo $number . " is bigger than 100";
}

echo '<hr>';
echo '<br>';

//[w] && = and 
//[w] || = or
//[gd] if you use && , all of conditions should be true ; but for || we can start if , if just one condition is true
$num1 = 32;
$num2 = 23;
$str = "reza";

if ($num1 == 32  && $num2 == 23) {
    echo "first condition is true <br>";

    if ($str == "php") { // if first condition is not true , this if block can not start
        echo " second condition is true <br>";
    } else {
        echo  " second condition is not true <br>";
    }
} else {
    echo "first condition is not true <br> ";
}

echo '<br>';
echo '<hr>';
echo '<br>';


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

$users = (object) $users; //for better and esyer work BUT with this code we just make $users object (reza and ali and sara selft change to object) and value in the reza and sara and ali are array! 
// so we shold chang all of the reza and ali and sara to object
$users -> reza = (object) $users -> reza;
$users -> ali = (object) $users -> ali;
$users -> sara = (object) $users -> sara;
//[gd] we have some good way to chang all of the array to object , but we learn them in the function page
// but we have very easy way to chang array to object
$users = json_decode(json_encode($users));  //[w] best way to chang all of the array to object

if ($users -> reza -> job == "admin") {
    $admin = "reza";
}elseif ($users -> ali -> job == "admin") {
    $admin = "ali";
}elseif ($users -> sara -> job == "admin") {
    $admin = "sara";
}

if ($users -> $admin -> age  >= 18) {
    $admin_age = "more than 18"; 
}else{
    $admin_age = "less than 18"; 
}

echo "hello " . $admin . " how are you our admin ! actuly our " . $admin_age . " years old admin";

echo '<br>' ; 
echo '<hr>' ; 
echo '<hr>' ; 
echo '<br>' ; 


$dayOFweek = 77 ;

switch($dayOFweek){
    case 1 :   // if  $dayOFweek is 1 ; its run the code after this case
    echo "day 1";  
    break;   // if  $dayOFweek is 1 ; break stop other code in switch

    case 2 :
        echo "day 2";
        break;

    case 3 :
        echo "day 3";
        break;

    case 4 :
        echo "day 4";
        break;

     case 5 :
         echo "day 5";
         break;

    case 6 :
        echo "day 6";
        break;

    case 7 :
        echo "day 7";    


    default :   // its like end else , if all of case is false , default run
    echo "we dont have any day like  $dayOFweek";    
}

//[gd] switch is like "  if & elseif & else  " but its easyer to write

//[w] i recommend you read about date function in php!