
<?php

include 'mysql_conn.php';

$sql = 'Insert into voter_list values(101,7891,"Voted")';
mysql_select_db('project');
$retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   echo "Data Inserted Into Voter_list";
   
   
//mysql_free_result($retval);

$sql='Select * from voter_list';
$retval=mysql_query($sql,$conn);
if(! $retval)
   {
      die('Could not get data: ' . mysql_error());
   }
   echo "<br>";
   while($row = mysql_fetch_assoc($retval))
   {
      echo "Id :{$row['Id']}  <br> ".
         "Status : {$row['Status']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
   ?>
   