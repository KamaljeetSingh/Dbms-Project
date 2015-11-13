<?php

include 'mysql_conn.php';



$sql = 'SELECT * FROM state';
mysql_select_db('Kamal_test');

 $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   echo "<br>";
   while($row = mysql_fetch_assoc($retval))
   {
      echo "S_no :{$row['s_no']}  <br> ".
         "State name : {$row['s_name']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   
   mysql_close($conn);


?>