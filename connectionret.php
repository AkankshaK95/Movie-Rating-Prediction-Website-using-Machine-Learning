<?php
echo "<body style='background: url(movie3.jpg)no-repeat;background-size: cover; background-position: center;}'>";
echo "<img src=1.jpg height=100 width=80 class=user style='position:relative;left:120px;'>";
echo "<h1 style=text-align:center;color:white;font-size:70px;position:relative;top:-150px;'>Movie Rating Prediction</h1>";
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'akalol';
   $mname=$_POST['mname1'];
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "select rating from rate where mname='$mname'";
   mysql_select_db('pro');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
	  echo "<div><p style=color:white;text-align:center;position:absolute;top:260px;left:440px;><font font face='arial' size='6pt'>The rating of  $mname</br> {$row[0]} \n</font> </p></div>";
    }
   
?>
