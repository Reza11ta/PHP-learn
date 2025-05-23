 <?php
 //super globals array = $_GET

//[gd] $_GET :
//[gd] you can sent upto 1024 characters only
//[gd] never use $_GET for sensitive info like password because we can see them from url
//[gd] $_GET can not sent binary data like image
 //[gd] $_GET can cary some data in the url(QUERY_STRING)
 
 //[red] the example and how to use it is in the super-globals-2.php




 //super globals array = $_POST

 //[gd] $_POST :
 //[gd] you dont have any limit in sent characters
 //[gd] $_POST can sent binary data or ASCII 
 //[gd] with $_POST your info is always secure because this method goes through http header and we can not see the info from the url 
 
  //[red] the example and how to use it is in the super-globals-3.php
