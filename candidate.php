<!Doctype html>
<body>
<?php 
     if(isset($_POST['validate']))
	 {
		 include 'mysql_conn.php';
		 mysql_select_db('project');
		 $cno=$_POST['const'];
		 $pno=$_POST['party'];
		 $sql='select * from constituency natural join party natural join candidate';
		 $retvalue=mysql_query($sql,$conn);
		 while($row=mysql_fetch_assoc($retvalue))
		 {
			 if($cno==$row['con_no'] && $pno==$row['p_no'])
			 {
                $sqli='Select * from photo natural join voter_id natural join state natural join constituency where e_no in (SELECT cand_eno from candidate)';
             	$ret=mysql_query($sqli,$conn);
		        while($rowi=mysql_fetch_assoc($ret))	
		        {
				if($rowi['e_no']==$row['cand_eno'])		 
				{
				 ?>
				  <script>
					 document.body.style.background = "url('back/back.jpg') no-repeat right top";
					</script>	
				     <br>
				     <br>
				     <br>
				     <br>
				     <br>
					 <img style="position:absolute; TOP:150px; LEFT:900px;"  src="<?php echo $rowi["addr"];"" ?>"alt "" align="right"  height="326" width="216">
	                 <table border='0' cellpadding="10"	 >
                        <br>
                        <br>
                        <br>						
					     <tr>
		                     <td ><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:orange">Candidate</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:orange">Number</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:orange">:</span></td>							 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:orange;">'.$row['cand_no'].'</span>';?></td>
						</tr>
					     <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:orange">Candidate</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:orange">Name</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:orange">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:orange;">'.strtoupper($rowi['name']).'</span>';?></td>
					    </tr>
				     	 <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:orange">Candidate</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:orange">Sex</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:orange">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:orange;">'.strtoupper($rowi['sex']).'</span>';?></td>
					    </tr>
		    			 <tr>
			    		     <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:orange">Candidate</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:orange">Address</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:orange">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:orange;">'.strtoupper($rowi['address']).'</span>';?></td>
		     			 </tr>
			 		     <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:orange">Candidate</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:orange">Constituency</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:orange">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:orange;">'.strtoupper($row['con_name']).'</span>';?></td>
					     </tr>
					     <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:orange">Candidate</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:orange">State</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:orange">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:orange;">'.strtoupper($rowi['s_name']).'</span>';?></td>
					     </tr>
				     	 <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:orange">Party</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:orange">Name</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:orange">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:orange;">'.strtoupper($row['p_name']).'</span>';?></td>
					     </tr>
				     	 <tr>
					         <td><span style="padding-left:225px;font-family:Georgia;font-size:20px;color:orange">Candidate</span></td>
		                     <td ><span style="font-family:Georgia;font-size:20px;color:orange">Details</span></td>						 
						     <td ><span style="font-family:Georgia;font-size:20px;color:orange">:</span></td>						 
						     <td width="350"><?php echo '<span style="font-family:Georgia;font-size:20px;color:orange;">'.strtoupper($row['cand_details']).'</span>';?></td>
					     </tr>
				    </table>
					<br>
					<br>
					<a href="Candidate.html"><u><span style="position:absolute; LEFT:400px;color:red;font-size:130%">Back</span></u></a>
				     <br>
				     <?php
					 die();
				}
				}				
			 }
		 }
		 
	 }
?>
</html>