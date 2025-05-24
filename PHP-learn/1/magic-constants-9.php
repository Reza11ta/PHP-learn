<?php

// Magic constants in PHP – They start and end with double underscores (__...__)

// __LINE__ → Shows the current line number in the file
echo __LINE__;
echo '<br>';

// __FILE__ → Shows the full path and filename of the current file
echo __FILE__;
echo '<br>';

// __DIR__ → Shows the directory of the current file
echo __DIR__;
echo '<br>';

// __FUNCTION__ → Returns the name of the current function (only works inside a function)
function sum()
{
    return __FUNCTION__;
}
echo sum();
echo '<br>';

//[red] __CLASS__ → Returns the name of the current class (only works inside a class)
//[red] We skip this one because we dont learn OOP until yet
//[red] __TRAIT__, __METHOD__, __NAMESPACE__ → Also related to OOP, so we skip them


// __PHP_VERSION__ → Shows the current PHP version (⚠️ this one is not a magic constant, it's a predefined constant, but still useful)
echo 'PHP Version: ' . PHP_VERSION;
echo '<br>';

// PHP_OS → Shows the name of the operating system PHP is running on
echo 'Operating System: ' . PHP_OS;
echo '<br>';
