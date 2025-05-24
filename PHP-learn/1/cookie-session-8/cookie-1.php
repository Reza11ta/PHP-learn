<?php

// A cookie is something that gets saved on your system and stores some data.
// For example, when you log in to a website and come back the next day, you might still be logged in automatically — that's because of the cookie.
//[w] cookie has some data like:
//[w] name       // The name of the cookie.
//[w] value      // The value to store in the cookie.
//[w] expires    // The expiration date/time for the cookie. After this, the cookie will be deleted. (can be a Date object or timestamp)
//[w] path       // The URL path where the cookie is accessible. Default is "/" (our website).
//[w] domain     // The domain that the cookie belongs to. Useful for subdomains.
//[w] secure     // If true, the cookie will only be sent over HTTPS connections.
//[w] httpOnly   // If true, the cookie is inaccessible to JavaScript (only sent in HTTP headers). Increases security.
//[w] sameSite   // Controls whether the cookie is sent with cross-site requests. Can be 'Strict', 'Lax', or 'None'.


$cookie_name = "users";
$cookie_value = "reza";  // You should set this the same as the user who logged in.
$cookie_expires = time() + 86400;  // time() gives the current time in seconds since 1970. To set the cookie to expire in 1 day, add 86400 seconds (60*60*24).
$cookie_path = "/";  // Default is "/" (means the cookie works on the whole website).

setcookie($cookie_name, $cookie_value, $cookie_expires, $cookie_path);  // This should be called after login is verified.


 if(!isset($_COOKIE[$cookie_name])){
    echo "cookie is not set";
 }else{
    echo "cookie name :  $cookie_name  is set!";
 }

// $new_cookie_expires = time() - 3600;  // Set expiration time to 1 hour ago (any past time will delete the cookie)
// setcookie($cookie_name, $cookie_value, $new_cookie_expires, $cookie_path);  // This deletes the cookie

