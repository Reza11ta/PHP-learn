<?php

// function funcName (){   //[w] this is the function
//     code
// }


function printer()
{  //when you call it , the functions code start and execute
    echo "hello world"; //[gd] accutly return is better than echo , like next exm.
}

printer();  //it is call the function

echo '<br>';

function printer2()
{
    return "hello world2"; // it means when you call this function , its return hello world2
}

echo printer2();

echo '<hr>';

function user($name, $family)
{  // when you want to run this function, you should pass it $name and $family
    return "you name is $name $family";
}

echo user("reza", "tomas");



echo '<br>';
echo '<hr>';
echo '<br>';


//[w] by value and by reference

//[red] argument by value :
function test($number = null)
{  // = null means when you didnt pass anything to $number , we dont see any error and the value of $number = null
    return $number *= $number;
}
echo $number = 5;
echo '<br>';
echo test($number);
echo '<br>';
echo $number;

echo '<hr>';

//[red] argument by reference :
function test1(&$number1 = null)
{  //& means it is argument by reference ! it means  the original $number change with function!!
    return $number1 *= $number1;
}
echo $number1 = 5;
echo '<br>';
echo test1($number1);
echo '<br>';
echo $number1;


echo '<br>';
echo '<hr>';
echo '<br>';

//[w] variables scope

function msg()
{
    return $message = "hello";
}
echo msg();
// echo $message;    ===>>> if we run this code we just see an error because $message is just in function msg() have value ; and we cant echo the $message out of the function
// we have the opposite of this! i mean if we make a variable out of the function , we cant use it in function , because function have their own scope :
echo '<br>';

$message2 = "Bye!";
function msg2()
{
    global $message2;  //[red] but with global word, we can use a variable out of the function
    return $message2;
}

echo msg2();
