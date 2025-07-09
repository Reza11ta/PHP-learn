<?php

//[w] Y = full year (e.g. 2025)
echo date("Y");
echo '<br>';

//[w] y = short year (e.g. 25)
echo date("y");
echo '<br>';

//[w] M = short month name (e.g. Jul)
echo date("M");
echo '<br>';

//[w] m = month number (01–12)
echo date("m");
echo '<br>';

//[w] D = short day name (e.g. Tue)
echo date("D");
echo '<br>';

//[w] d = day of the month (01–31)
echo date("d");
echo '<br>';

//[w] full date in format: year/month/day
echo date("Y/m/d");

echo '<hr>';

//[w] L = 1 if it's a leap year, 0 if not
echo date("L");
echo '<br>';

//[w] l = full day name (e.g. Tuesday)
echo date("l");

echo '<hr>';

//[w] H = hour in 24h format (00–23)
echo date("H");
echo '<br>';

//[w] h = hour in 12h format (01–12)
echo date("h");
echo '<br>';

//[w] I = 1 if daylight saving time is active
echo date("I");
echo '<br>';

//[w] i = minutes (00–59)
echo date("i");
echo '<br>';

//[w] S = suffix for the day (st, nd, rd, th)
echo date("S");
echo '<br>';

//[w] s = seconds (00–59)
echo date("s");
echo '<br>';

//[w] shows current time: hour:minute:second
echo date("h:i:s");
echo '<br>';

//[w] shows time with am or pm
echo date("h:i:sa");

echo '<hr>';

//[w] shows full date and time with am/pm
echo date("Y/m/d  h:i:sa");

echo '<hr>';

//[w] sets the timezone to Tehran
date_default_timezone_set("Asia/Tehran");

//[w] shows current time in Tehran
echo date("h:i:s");

echo '<hr>';
echo '<hr>';

//[w] time() gives current timestamp (seconds since 1970)
$time = time();
echo $time;

echo '<br>';

//[w] convert timestamp to readable date
echo date("Y/m/d  h:i:sa", $time);

echo '<hr>';

//[w] mktime creates a timestamp from a given date and time
echo mktime(3, 30, 1, 1, 1, 1970); // Jan 1, 1970 - 03:30:01
echo '<br>';
echo mktime(15, 34, 25, 5, 12, 2012); // May 12, 2012 - 15:34:25

echo '<hr>';

//[w] strtotime converts a date string to a timestamp
echo $str = strtotime("5:10:50 july 5 2025");
echo '<br>';

//[w] convert that timestamp to readable format
echo date("Y/m/d H:i:s", $str);
echo '<br>';

//[w] strtotime("tomorrow") gives timestamp of tomorrow
echo strtotime("tomorrow");
echo '<br>';

//[w] strtotime("yesterday") gives timestamp of yesterday
echo strtotime("yesterday");

echo '<hr>';

//[w] microtime shows current time with microseconds
echo microtime();
