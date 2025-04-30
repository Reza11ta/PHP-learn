<?php

// function funcName (){   //[w] this is the function
//     code
// }


function printer () {  //when you call it , the functions code start and execute
    echo "hello world"; //[gd] accutly return is better than echo , like next exm.
}

printer();  //it is call the function

echo '<br>' ; 

function printer2 () {
    return "hello world2"; // it means when you call this function , its return hello world2
}

echo printer2() ;

echo '<hr>' ; 

function user ($name , $family) {  // when you want to run this function, you should pass it $name and $family
    return "you name is $name $family";
}

echo user("reza" , "tomas");