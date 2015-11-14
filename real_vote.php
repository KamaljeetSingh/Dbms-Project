<html>
<body>

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
<h2 style="background-color:Black;color:White;font-size:30;font-family:times new roman;text-align:right;"><b>Cast Your Vote!</b></h2>
<body background="blue.jpg">
<form action="register.php" method="post">
<table border="0" cellspacing ="80">
                  <?php
				  include 'mysql_conn.php';
				  
				  mysql_select_db('kamal_test');
				  $sql="Select con_no from voter_id,voter_list where e_no=Id";
				  $retvalue = mysql_query( $sql, $conn );
				  $row = mysql_fetch_assoc($retvalue);
				  $i=101;
				  echo $row['con_no'];
				  for($j=0;$i<=103;$i++,$j++)
				  {		
					  	
					  $qry="Select name from voter_id where e_no in (Select e_no from candidate where p_no=$i and con_no=$row['con_no'])"; 
					  $retval=mysql_query( $qry, $conn );
					  $rowww = mysql_fetch_assoc($retval);
					  $candidate[j]="$rowww['name']";
				  }
				   echo $candidate[0]." -- "$candidate[1]." -- "$candidate[2];
				  ?>
				  
                     <tr>
                        <td width="500"><h3>Congress</h3></td>
						 <td width="500"><h3>Bhartiya Janta Party</h3></td>
						 <td width="500"><h3>Aam Aadmi Party</h3></td>
                        
                     </tr>
                   <br>
				   <br>
					
</table>                     
</body>
</html>   
		 
		 
				





