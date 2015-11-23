<?php 
    session_start();
	?> 

<html>
<?php
		// echo $_SESSION['id'];
		 //echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.$_SESSION['id'].'</span>';
         include 'mysql_conn.php';
		 mysql_select_db('project');
		 $i=0;
		 $j=0;
		 $sql='Select * from photo natural join voter_id natural join state natural join constituency';
		 $retvalue=mysql_query($sql,$conn);
		 $row;
		 while($row=mysql_fetch_assoc($retvalue))
		 {
			 if($_SESSION['id']==$row['e_no'])
			 {
				 $_SESSION['id']=$row['e_no'];
					 echo '<span style="font-family:Georgia;font-size:20px;color:white;position:absolute; TOP:30px; LEFT:600px">'.$row['e_no'].'</span>'; 
				 ?>
				 a:
				 <body background="back.jpg">
	   	     		 <br>
				     <br>
				     <br>
				     <br>
				     <br>
				     <br>
				     <br>
				     <br>
				     <img style="position:absolute; TOP:150px; LEFT:800px;"  src="<?php echo $row["addr"];"" ?>"alt "" align="right">
	                 <table border='0' cellpadding="10"	 >	
					     <tr>
		                     <td ><span style="padding-left:165px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">Number</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>							 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.$row['e_no'].'</span>';?></td>
						</tr>
						<tr>
					         <td><span style="padding-left:165px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">Name</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['name']).'</span>';?></td>
					    </tr>
				     	 <tr>
					         <td><span style="padding-left:165px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">Sex</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['sex']).'</span>';?></td>
					    </tr>
				     	 <tr>
					         <td><span style="padding-left:165px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">DOB</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['dob']).'</span>';?></td>
					     </tr>
		    			 <tr>
			    		     <td><span style="padding-left:165px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">Address</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['address']).'</span>';?></td>
		     			 </tr>
			 		     <tr>
					         <td><span style="padding-left:165px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">Constituency</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['con_name']).'</span>';?></td>
					     </tr>
					     <tr>
					         <td><span style="padding-left:165px;font-family:Georgia;font-size:20px;color:white">Voter</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:white">State</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:white">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:white;">'.strtoupper($row['s_name']).'</span>';?></td>
					     </tr>
				    </table>
				     <br>
				     <button style="position:absolute; LEFT:400px;" onclick="f1()">Log Out</button>
				     <script>
				         function f1(){
							 alert("yo");
					         var x=window.confirm("Press Ok to Logout !!");
					         if(x==true){
						         <?php
							        session_start();
									unset($_SESSION['root']);
							        session_destroy();
							        header("Location: view1.php");
							        exit();
					             ?>
					        }
a:							
				        }
				    </script>
</body>					
			 <?php
			 break;
			 }
		 }
?>
</html>		 
			 