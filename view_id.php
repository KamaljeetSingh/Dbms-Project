<html>
<body>
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
	       mysql_close($conn);
		   ?>
		   <h1>Id Doesnt Exist</h1>
		   <a href="view.html"><h3 style="font-size:160%;font-family:times new roman;padding-left:400px;">Back</h3></a>
		 <?php
		 die();
		 }
		 if($j==0)
		 {
			 mysql_close($conn);
			 ?>
		  
			<h2>Wrong Password</h2>
		  <a href="view.html"><h3 style="font-size:160%;font-family:times new roman;padding-left:400px;">Back</h3></a>
		 <?php
		 die();
		 }
	 }
 ?>
</body>
<h3 style="font-size:300%;font-family:times new roman;text-align:center;"><font color="white"><b><u>Voter Card</u></b></font></h3>


</html>	 