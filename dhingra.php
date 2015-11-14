<?php
	if(isset($_POST['validate_id']))
         {
            include 'mysql_conn.php';
			
			$id=$_POST['voter_id'];
			$pass=$_POST['OTP'];
			$found=0;
			$pin=0;
			$stat=0;
			
			
			mysql_select_db('kamal_test');
			$sql="Select * from voter_list";
			$retvalue = mysql_query( $sql, $conn );
			while($row = mysql_fetch_assoc($retvalue))
			{
				if($row['Id']==$id)
					$found=1;
				
				if($row['OTP']==$pass) 
					$pin=1;
				
				if($row['Status']=='NULL')
					$stat=1;
			}
			
			if($found==0)
				die("You have Not Registered");
			if($pin==0)
				die("Make Sure You Have Entered Correct Password");
			if($stat==0)
				die("You Have Already Voted.");
		 }
?>