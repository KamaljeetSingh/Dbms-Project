<!DOCTYPE html>

<title>View</title>

<h3 style="font-size:300%;font-family:times new roman;text-align:center;"><font color="white"><b><u>View Details</u></b></font></h3>

<body background="blue.jpg">

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<br>
	<br>
	<br>
	<br>
	<br>
	<p><b><u><span style="font-size:160%;padding-left:80px">Login Here To View Voter Id Card</span></u></b></p>
	<table border='0' cellspacing='10' cellpadding='15' >
	<tr> 
        <td width="250"><span style="font-size:120%;padding-left:50px"> Enter Your Voter_Id</span></td>
		<td><input name="voter_id" type="text"></td>
    </tr>
	<tr>
        <td width="250"><span style="font-size:120%;padding-left:50px">Enter Your DOB </br><span style="padding-left:50px">(yyyy-mm-dd)</span></span></td>
        <td><input name="dobb" type="password"></td>
    </tr>
	<tr>
	    <td><span style="padding-left:50px"><input name="validate_id" type="submit" value="Continue To View"></span></td>
		<td width="25"><input name="reset" type="reset" value="Reset Value"></td>
	</form>
	    <td><a href="Candidate.html"><h3 style="font-size:160%;font-family:times new roman;padding-left:400px;">Click Here to View Candidate Details</h3></a></td>
	</tr>
	</table>     		
<?php
     if(isset($_POST['validate_id']))
	 {
		 include 'mysql_conn.php';
		 $id=$_POST['voter_id'];
		 $pass=$_POST['dobb'];
		 mysql_select_db('project');
		 $i=0;
		 $j=0;
		 $sql='Select * from voter_id';
		 $retvalue=mysql_query($sql,$conn);
		 while($row=mysql_fetch_assoc($retvalue))
		 {
			 if($id==$row['e_no'])
			 {
				 if($pass==$row['dob'])
				 {
					 $i=1;
					 $j=1;
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
			<button onclick="Func()"><"back"></button>
			<script>
			function Func()
			{
				alert("Wrong Email ID");
			}
			</script>
			<?php
		 }
		 if($j==0)
		 {
			?>
			<button onclick="Func()"><"back"></button>
			<script>
			function Func()
			{
				alert("Wrong Email ID");
			}
			</script>
			<?php
		 }
	 }
 ?>
</body>

</html>	 