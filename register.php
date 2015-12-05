<!DOCTYPE html>
<html>
<head>
<script>
function redirect()
{location="voting.html";
}
</script>
</head>
<body background="back/reg.jpg">

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
			mysql_select_db('project');
            $sql ="select * from voter_id where e_no='$id'"; 
            
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
				echo '<span style="padding-left:550px;font-family:Georgia;font-size:30px;color:RED;">The Details Entered Do Not Exist</span>';
?>
     <input type="button" value="Main Menu" onclick="redirect();" >
    <?php

		session_start();
							        unset($_SESSION['root']);
										session_destroy();
	die();				
			}
			
			if($f==0)
			{echo '<span style="padding-left:80px;font-family:Georgia;font-size:30px;color:RED;">Either The Constituency Does Not Exist Or You Are Not Eligible To Vote From This Constituency</span>';
?>
     <input type="button" value="Main Menu" onclick="redirect();" >
    <?php

		session_start();
							        unset($_SESSION['root']);
										session_destroy();
	die();				
				}
			
			
			
			else
            {	$found=0;
				$qry="Select * from voter_list";
				$ret=mysql_query($qry,$conn);
				while($row=mysql_fetch_assoc($ret))
				{
					
					if($row['e_no']==$id)
					$found=1;
					
				}
				
				if ($found==1)
				{echo '<span style="padding-left:550px;font-family:Georgia;font-size:30px;color:RED;">You Have Already Registered</span>';
?>
     <input type="button" value="Main Menu" onclick="redirect();" >
    <?php

			session_start();
							        unset($_SESSION['root']);
										session_destroy();
			die();
				}
				else
				{
				$pass = random_password(4);
			$qry="Insert Into voter_list values($id,'$pass',0)";
			
			$retvalue = mysql_query( $qry, $conn );
			
            
				}
      
		
   		
			}
		 }
		 
  
           
         
?>	

<h1 style="background-color:Black;color:White;font-size:30;font-family:times new roman;text-align:center;"><b>You Have Successfully Registered!</b></h1>
<br>
<br>
<table >
<table border="10" cellspacing="10" cellpadding="10" align="center" >
	<tr>
	<td width="50"><h3 style="color:Brown;font-family:cambria;text-align:center;">Voter_ID</h3></td>
	<td width="50"><h3 style="color:Brown;font-family:cambria;text-align:center;">Password</h3></td>
	<td width="50"><h3 style="color:Brown;font-family:cambria;text-align:center;">Status(Vote)</h3></td>
	</tr>
	<tr>
	<td width="50"><?php 
	mysql_select_db('project');
	$sql="Select * from voter_list where e_no=$id";
			$retvalue = mysql_query( $sql );
			$row = mysql_fetch_assoc($retvalue);
			echo '<span style="padding-left:165px;font-family:Georgia;font-size:30px;color:RED;">'.$row['e_no'].'</span>';
			?>
			</td>
	<td width="50"><?php 
	mysql_select_db('project');
	$sql="Select * from voter_list where e_no=$id";
			$retvalue = mysql_query( $sql );
			$row = mysql_fetch_assoc($retvalue);
			echo '<span style="padding-left:165px;font-family:Georgia;font-size:30px;color:RED;">'.$row['otp'].'</span>';
			?>
			</td>
			<td width="50"><?php 
	mysql_select_db('project');
	$sql="Select * from voter_list where e_no=$id";
			$retvalue = mysql_query( $sql );
			$row = mysql_fetch_assoc($retvalue);
			echo '<span style="padding-left:165px;font-family:Georgia;font-size:30px;color:RED;">'.$row['status'].'</span>';
			?>
			</td>
	</tr>
	<caption><h2>Your Registeration Details!</h2></caption>
	</table>
<br>
<br>
<br>
<br>
<br>
<br>	
<br> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table>
<tr>
<td>
<form>
         <input type="button" value="Main Menu" onclick="redirect();" >
      </form>
</td>	  
<td> <?php 
	mysql_select_db('project');
	$sql="Select count(*) from voter_list";
			$retvalue = mysql_query( $sql );
			$row = mysql_fetch_assoc($retvalue);
			echo '<span style="padding-left:1100px;font-family:Georgia;font-size:20px;color:Brown;">'.$row['count(*)']." Persons Have Registred ".'</span>';
			session_start();
							        unset($_SESSION['root']);
										session_destroy();

			?>
			
			</td>
			</tr>
</table>
</body>
</html>
