<?php session_start(); ?>

<!DOCTYPE html>

<title>View</title>
<head>
<meta charset="utf-8">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body background="blue.jpg">
<div class="d">
<h3 style="font-size:300%;font-family:times new roman;text-align:center;"><font color="white"><b><u>View Details</u></b></font></h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<br>
	<br>
	<br>
	<br>
	<br>
	<p><b><u><span style="font-size:160%;padding-left:80px">Login Here To View Voter Id Card</span></u></b></p>
	<table border='0' cellspacing='10' cellpadding='15' >
	<tr > 
        <td width="250" id="3"><span style="font-size:120%;padding-left:50px"> Enter Your Voter_Id</span></td>
		<td ><input name="voter_id" type="text"></td>
    </tr>
	<tr>
        <td width="250"><span style="font-size:120%;padding-left:50px">Enter Your DOB </br><span style="padding-left:50px">(yyyy-mm-dd)</span></span></td>
        <td ><input name="dobb" type="password"></td>
    </tr>
	<tr >
	    <td><span style="padding-left:50px"><input name="validate_id" type="submit" value="Continue To View"></span></td>
		<td width="25"><input name="reset" type="reset" value="Reset Value"></td>
	</form>
	    <td><a href="Candidate.html"><h3 style="font-size:160%;font-family:times new roman;padding-left:400px;">Click Here to View Candidate Details</h3></a></td>
	</tr>
	</table>
	</div>
<?php
     if(isset($_POST['validate_id']))
	 {
		 
		 include 'mysql_conn.php';
		 $id=$_POST['voter_id'];
		 $pass=$_POST['dobb'];
		 mysql_select_db('project');
		 $i=0;
		 $j=0;
		 $sql='Select * from photo natural join voter_id natural join state natural join constituency';
		 $retvalue=mysql_query($sql,$conn);
		 $row;
		 while($row=mysql_fetch_assoc($retvalue))
		 {
			 if($id==$row['e_no'])
			 {
				 if($pass==$row['dob'])
				 {
					 $i=1;
					 $j=1;
					 ?>
					 <script>
					$( ".d" ).remove();
					 document.body.style.background = "url('back.jpg') no-repeat right top";
					</script>	
					 
					 <h3 style="font-size:300%;font-family:times new roman;text-align:center;"><font color="white"><b><u>Voter Id Card</u></b></font></h3>
				     
					 <br>
				     <br>
				     <br>
				     <br>
				     <br>
					 <img style="position:absolute; TOP:250px; LEFT:900px;"  src="<?php echo $row["addr"];"" ?>"alt "" align="right"  height="326" width="216">
	                 <table border='0' cellpadding="10"	 >	
					     <tr>
		                     <td ><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">Number</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>							 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.$row['e_no'].'</span>';?></td>
						</tr>
					     <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">Name</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['name']).'</span>';?></td>
					    </tr>
				     	 <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">Sex</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['sex']).'</span>';?></td>
					    </tr>
				     	 <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">DOB</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['dob']).'</span>';?></td>
					     </tr>
		    			 <tr>
			    		     <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">Address</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['address']).'</span>';?></td>
		     			 </tr>
			 		     <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">Constituency</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['con_name']).'</span>';?></td>
					     </tr>
					     <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">State</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['s_name']).'</span>';?></td>
					     </tr>
				    </table>
				     <br>
				     <?php
							        unset($_SESSION['root']);
										session_destroy();
							        //header("Location: frst.html");
							        //exit();
					 ?>
					 <a href="main.html"><u><span style="position:absolute; LEFT:400px;color:red;font-size:130%">Log Out</span></u></a>
				     
					        }							
				        }
				    </script>	
                	 </body>
					 <?php
				 }
				 else
				 {
					 $i=1;
					 $j=0;
				 } 
				 break;
			 }
		 }
		 if($i==0)
		 { 
	        ?>
			<script>
			    alert("Wrong Voter ID");
			</script>
			<?php
			die();
		 }
		 if($j==0)
		 {
			?>
			<script>
				alert("Wrong Password");
			</script>
			<?php
			die();
		 }
	 }
?>
</body>
</html>	 