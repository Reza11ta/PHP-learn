<?php

//[w] A session is a way to store information (like user data) on the server.
//[w] Unlike cookies, session data is not saved on the user's device — it's saved on the server.
//[w] Sessions are useful when you want to move data between pages, like keeping the user logged in or saving their selected items.
//[w] For example, after a user logs in, you can store their info in a session and use it on other pages without needing to log in again.

session_start();   // Start the session. This must be called before using any $_SESSION variables.

$_SESSION["userName"] = "reza";   // Store data in the session. This data will be available on other pages too.

echo $_SESSION["userName"];   // Show the stored session data 

session_unset();   // Remove all session variables. It clears the data inside $_SESSION, but the session still exists.

session_destroy();   // Completely destroy the session. The session is ended and can't be used anymore.

echo $_SESSION["userName"];   // This won't show anything because the session is already destroyed.


