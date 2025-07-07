<?php

//[w] Y = full year (e.g. 2025)
echo date("Y");
echo '<br>' ; 

//[w] y = short year (e.g. 25)
echo date("y");
echo '<br>' ; 

//[w] M = short month name (e.g. Jun)
echo date("M");
echo '<br>' ; 

//[w] m = month number (01–12)
echo date("m");
echo '<br>' ; 

//[w] D = short day name (e.g. Fri)
echo date("D");
echo '<br>' ; 

//[w] d = day of the month (01–31)
echo date("d");
echo '<br>' ; 

//[w] full date in format: year/month/day
echo date("Y/m/d");

echo '<hr>' ; 

//[w] L = 1 if it's a leap year, 0 if not
echo date("L");
echo '<br>' ; 

//[w] l = full day name (e.g. Friday)
echo date("l");

echo '<hr>' ; 

//[w] H = hour in 24h format (00–23)
echo date("H");
echo '<br>' ; 

//[w] h = hour in 12h format (01–12)
echo date("h");
echo '<br>' ; 

//[w] I = 1 if daylight saving time is on
echo date("I");
echo '<br>' ; 

//[w] i = minutes (00–59)
echo date("i");
echo '<br>' ; 

//[w] S = suffix for day (st, nd, rd, th)
echo date("S");
echo '<br>' ; 

//[w] s = seconds (00–59)
echo date("s");
echo '<br>' ; 

//[w] time in format: hour:minute:second
echo date("h:i:s");
echo '<br>' ; 

//[w] same as above but with am/pm
echo date("h:i:sa");

echo '<hr>' ; 

//[w] full datetime: year/month/day hour:minute:second am/pm
echo date("Y/m/d  h:i:sa");

echo '<hr>' ; 
