<?php
         if(isset($_POST['registers']))
         {
            include 'mysql_conn.php';
            
            $id = $_POST['voter_id'];
			
            $sql = "Insert Into voter_list values($id,1211,'NULL')" ;
            mysql_select_db('kamal_test');
            $retval = mysql_query( $sql, $conn );
           
            if(! $retval )
            {
               die('You Are Already Registered Or You Typed A wrong Id ' );
            }
            
			$sql="Select * from voter_list where Id=$id";
			$retval = mysql_query( $sql, $conn );
            $found=0;
			while($row = mysql_fetch_assoc($retval))
   {
      echo "Your Voter Id-- :{$row['Id']} <br> ".
         "Your Generated OTP-- : {$row['OTP']} <br> ".
		 "Status Of Voting-- : {$row['Status']} <br> ".
         "--------------------------------<br>";
		 $found=1;
   }			
   if($found==0)
	   die('The Details Entered Do Not Exist');
            
            mysql_close($conn);
         }
?>		 