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
			
			
			mysql_select_db('project');
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
<p style="background-color:Yellow;font-size:30px;"><b>Click On The Cast Vote Of Your Desired Party To Cast Your Vote-</b></p>
<body background="blue.jpg">
<form action="cast_vote.php" method="post">
<table border="3" cellspacing ="20" cellpadding="10" >
                  <tr>
				  <td width="400"><h1 style="text-align:center;">Party Name</h1></td>
				  <td width="400"><h1 style="text-align:center;">Candidate Name</h1></td>
				  <td width="400"><h1 style="text-align:center;">Party Symbol</h1></td>
				  </tr>
                     <tr>
                        <td width="500"><h2 style="text-align:center;">Congress</h2></td>
						<td width="500"><?php
				  include 'mysql_conn.php';
				  
				  mysql_select_db('project');
				  $sql="Select con_no from voter_id where '$id'=e_no";
				  $retvalue = mysql_query( $sql, $conn );
				  $row = mysql_fetch_assoc($retvalue);
				  $i=101;
				  
				  $qry="Select UPPER(name) from voter_id where e_no in (Select e_no from candidate where p_no='$i' and con_no=".$row['con_no'].")"; 
					  $retval=mysql_query( $qry, $conn );
					  $rowww = mysql_fetch_assoc($retval);
					  $candidate[0]=$rowww['UPPER(name)'];
				  
				   echo '<span style="padding-left:165px;font-family:Georgia;font-size:30px;color:RED;">'.$candidate[0].'</span>';
				  ?>
				  </td>
				  <td>
				  
				<img src="congress.jpg" style="width:150px;height:100px;border:0;padding-left:80px;">
				<input name="castcong" type="submit" value="Cast Vote">
					
				  </td>
				  </tr>
				  
				  
				  
						<tr>
                        <td width="500"><h2 style="text-align:center;">Bhartiya Janta Party</h2></td>
						<td width="500"><?php
				  include 'mysql_conn.php';
				  
				  mysql_select_db('project');
				  $sql="Select con_no from voter_id where '$id'=e_no";
				  $retvalue = mysql_query( $sql, $conn );
				  $row = mysql_fetch_assoc($retvalue);
				  $i=102;
				  $qry="Select UPPER(name) from voter_id where e_no in (Select e_no from candidate where p_no='$i' and con_no=".$row['con_no'].")"; 
					  $retval=mysql_query( $qry, $conn );
					  $rowww = mysql_fetch_assoc($retval);
					  $candidate[1]=$rowww['UPPER(name)'];
				  
				   echo '<span style="padding-left:165px;font-family:Georgia;font-size:30px;color:RED;">'.$candidate[1].'</span>';
				  ?>
				  </td>
				  <td>
					
					<img src="bjp.jpg" style="width:150px;height:100px;border:0;padding-left:80px;">
					<input name="castbjp" type="submit" value="Cast Vote">
					
				  </td>
				  </tr>
				  
						<tr>
                        <td width="500"><h2 style="text-align:center;">Aam Aadmi Party</h2></td>
						<td width="500"><?php
				  include 'mysql_conn.php';
				  
				  mysql_select_db('project');
				  $sql="Select con_no from voter_id where '$id'=e_no";
				  $retvalue = mysql_query( $sql, $conn );
				  $row = mysql_fetch_assoc($retvalue);
				  $i=103;
				  
				  $qry="Select UPPER(name) from voter_id where e_no in (Select e_no from candidate where p_no='$i' and con_no=".$row['con_no'].")"; 
					  $retval=mysql_query( $qry, $conn );
					  $rowww = mysql_fetch_assoc($retval);
					  $candidate[2]=$rowww['UPPER(name)'];
				  
				   echo '<span style="padding-left:165px;font-family:Georgia;font-size:30px;color:RED;">'.$candidate[2].'</span>';
				  ?>
				  </td>
				  <td>
					
					<img src="aap.jpg" style="width:150px;height:100px;border:0;padding-left:80px;">
					<input name="castaap" type="submit" value="Cast Vote">
					
				  </td>
				  </tr>
                  
					
</table>
</form>                     
</body>
</html>   
		 
		 
				





