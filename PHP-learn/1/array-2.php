<?php
// array

$x  = array();  //this kind of write its for beginner and for better reader
$y = [];  //this kind of write its usual
// you cant print array with echo !
var_dump($x);
print_r($y);

echo '<br>' ; 
echo '<br>' ; 

//type of  Array
//[gd] 1= indexed array / علامت گذاری عددی ==> this type has index{something like numbers} and its start from 0
$car = array("bmw" , "pride" , "benz" , 14 , 15.15 , true);  //bmw is index 0 - pride is index 1 - benz is 3 - and.......
var_dump($car);  //for array when you use  var_dump you can see number of member in array , and see index and data type and lengh of each memeber
echo '<br>' ; 
print_r($car);  //for array when you use  print_r you can see just  index 
echo '<br>' ;

//[w] you can print just a selected index
var_dump( $car[2] );
echo '<br>' ; 
print_r( $car[0] );
echo '<br>' ; 
echo $car[1] ;

echo '<br>' ; 
echo '<br>' ; 

//[gd] 2= associative array  / متناظر ==> this type has custom index(evrything you like)
$cc = array("iran" => "tehran" , "japan" => "tokyo" , "germany" => "berlin");  //tehran is index iran
 var_dump($cc);
 echo '<br>' ; 
 print_r($cc);

 echo '<br>' ; 
 
 echo $cc['iran'];

 echo '<br>' ; 
 echo '<br>' ; 
 
 //[gd] 3= multidimensional array  / چند بعدی ==> with this type we have nested array

 //[w] multidimensional indexed array   / 2 dimension
 $users  = array(

    array(
        "name" => "reza",
        "age" => 17 , 
        "is marrid" => false ,
        "avg" => 18.54
    ),

    array(
        "name" => "ali",
        "age" => 25 , 
        "is marrid" => true ,
        "avg" => null
    ),

    array(
        "name" => "mohammad",
        "age" => 12 , 
        "is marrid" => false ,
        "avg" => 13.2
    )
 );

 print_r($users);
 echo '<br>' ; 
 print_r($users[1]);
 echo '<br>' ; 
 print_r($users[0]["name"]);
echo '<hr>' ; 

 //[w] multidimensional associative array   / 2 dimension

 $users2  = array(

    "user1" => [
        "name" => "reza",
        "age" => 17 , 
        "is marrid" => false ,
        "avg" => 18.54
    ],

    "user2" => [
        "name" => "ali",
        "age" => 25 , 
        "is marrid" => true ,
        "avg" => null
    ]
);


print_r($users2);
echo '<br>' ; 
print_r($users2["user1"]);
echo '<br>' ; 
print_r($users2["user2"]["name"]);
echo '<br>' ; 
echo "dear " . $users2["user1"]["name"] . " welcome";

echo '<br>' ; 
echo '<br>' ; 

//[w] multidimensional associative array   / 3 dimension 

$users3  = array(

    "user1" => [
        "name" => "reza",
        "age" => 17 , 
        "is marrid" => false ,

        "avg" => [

            "math" => 19,
            "farsi" => 20,
            "programing" => 20,
            "arabi" => 10,
            "english" => 20

        ]
    ],
);

print_r($users3);
echo '<br>' ; 
print_r($users3["user1"]);
echo '<br>' ; 
print_r($users3["user1"]["name"]);
echo '<br>' ; 
print_r($users3["user1"]["avg"]["math"]);

echo '<br>' ; 

echo '<hr>' ; 

echo '<br>' ; 

//[red] array in .json

$JSson = json_encode($users3);  //[w]  for php array format to js and json format 
print_r($JSson);

echo '<br>' ; 
echo '<br>' ; 

$PHPjson = json_decode($JSson);  //[w]  for js array format to php arrya  format 
print_r($PHPjson  );


//[red] direct change array to object
$arrayTOobject = (object) $users3 ; 
print_r($arrayTOobject);
