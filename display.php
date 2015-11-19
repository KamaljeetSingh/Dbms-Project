
<?php
         if(isset($_POST['displays']))
         {
            include 'mysql_conn.php';
            
            $id = $_POST['voter_id'];
            $sex = $_POST['sex'];
            
            $sql = "Select * from voter_id where e_no=$id and sex='$sex'" ;
            mysql_select_db('project');
            $retval = mysql_query( $sql, $conn );
            $found=0;
            if(! $retval )
            {
               die('Could not display data: ' . mysql_error());
            }
            
			while($row = mysql_fetch_assoc($retval))
   {
      echo "Election Card No-- :{$row['e_no']} <br> ".
         "Card Holder Name-- : {$row['name']} <br> ".
         "--------------------------------<br>";
		 $found=1;
   }			
   if($found==0)
	   die('The Details Entered Do Not Exist');
            
            mysql_close($conn);
         }
?>		 
		 