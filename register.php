<?php
	function random_password( $length ) {
    $chars = "012345678958864112323247779002";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}


         if(isset($_POST['registers']))
         {
            include 'mysql_conn.php';
			
            
            $id = $_POST['voter_id'];
			$dobenter=$_POST['dobb'];
			$found=0;
			$f=0;
			mysql_select_db('kamal_test');
            $sql ="select * from voter_id"; 
            
            $retval = mysql_query( $sql, $conn );
			
			while($row = mysql_fetch_assoc($retval))
			{
				if($row['e_no']==$id && $row['dob']==$dobenter)  
					$found=1;
				if($row['con_no']==11 || $row['con_no']==13 || $row['con_no']==15 || $row['con_no']==17 || $row['con_no']==19)
					$f=1;
				
			}
			if ($found==0)
			{
				die('The Details Entered Do Not Exist');
				 mysql_close($conn);
			}
			
			if($f==0)
			{
				die('Either The Constituency Does Not Exist Or You Are Not Eligible To Vote From This Constituency');
				 mysql_close($conn);
			}
			
			else
            {
				$pass = random_password(4);
			$qry="Insert Into voter_list values($id,'$pass','NULL')";
			
			$retvalue = mysql_query( $qry, $conn );
			
			$sql="Select * from voter_list where Id=$id";
			$retvalue = mysql_query( $sql, $conn );
			while($row = mysql_fetch_assoc($retvalue))
			{
				echo "Your Registration Details Are--<br>Your Id--".$row['Id']."<br>Your Pass ".$row['OTP']."<br>Vote Status".$row['Status']."<br>------------------" ;
			}
            
			
      
		
   		
			}
		 }			
  
           
         
?>		 