<html>
<body background="back/voted.jpg">
<?php
session_start();
	if(isset($_POST['castcong']))
         {
			 include 'mysql_conn.php';
			 mysql_select_db('project');
			 $found=0;
            $sql="Select * from result";
			$ret=mysql_query($sql,$conn);
			if($ret)
			{
			while($row=mysql_fetch_assoc($ret))
			{
				if($row['can_no']==$_SESSION["candicong"])
				{
				$qry="Update result set no_of_votes=no_of_votes+1 where can_no=".$_SESSION["candicong"];
				$retrieve=mysql_query($qry,$conn);
				$found=1;
				
				break;
				}
			}
			}
			if($found==1)
			{//echo "Yes We Found The Candidate".$row['can_no'];
			}
			else 
			{
				$can=$_SESSION["candicong"];
				$con=$_SESSION["consicong"];
				$qry="Insert into result values(1,$con,$can)";
				$retrieve=mysql_query($qry,$conn);
				//echo "new inserted";
				
				
		 }
		 //echo $_SESSION["reg_voter_id"];
		 $qry="Update voter_list set status=1 where e_no=".$_SESSION["reg_voter_id"];
		 $retrieve=mysql_query($qry,$conn);
		 
//session_destroy();
		 }
		 
		 if(isset($_POST['castbjp']))
         {
			 include 'mysql_conn.php';
			 mysql_select_db('project');
			 $found=0;
            $sql="Select * from result";
			$ret=mysql_query($sql,$conn);
			if($ret)
			{
			while($row=mysql_fetch_assoc($ret))
			{
				if($row['can_no']==$_SESSION["candibjp"])
				{
				$qry="Update result set no_of_votes=no_of_votes+1 where can_no=".$_SESSION["candibjp"];
				$retrieve=mysql_query($qry,$conn);
				$found=1;
				
				break;
				}
			}
			}
			if($found==1)
			{//echo "Yes We Found The Candidate".$row['can_no'];
			}
			else 
			{
				$can=$_SESSION["candibjp"];
				$con=$_SESSION["consibjp"];
				$qry="Insert into result values(1,$con,$can)";
				$retrieve=mysql_query($qry,$conn);
				//echo "new inserted";
				
				
		 }
		// echo $_SESSION["reg_voter_id"];
		 $qry="Update voter_list set status=1 where e_no=".$_SESSION["reg_voter_id"];
		 $retrieve=mysql_query($qry,$conn);
		 
//session_destroy();
		 }
		 
		 if(isset($_POST['castaap']))
         {
			 include 'mysql_conn.php';
			 mysql_select_db('project');
			 $found=0;
            $sql="Select * from result";
			$ret=mysql_query($sql,$conn);
			if($ret)
			{
			while($row=mysql_fetch_assoc($ret))
			{
				if($row['can_no']==$_SESSION["candiaap"])
				{
				$qry="Update result set no_of_votes=no_of_votes+1 where can_no=".$_SESSION["candiaap"];
				$retrieve=mysql_query($qry,$conn);
				$found=1;
				
				break;
				}
			}
			}
			if($found==1)
			{//echo "Yes We Found The Candidate".$row['can_no'];
			}
			else 
			{
				$can=$_SESSION["candiaap"];
				$con=$_SESSION["consiaap"];
				$qry="Insert into result values(1,$con,$can)";
				$retrieve=mysql_query($qry,$conn);
				//echo "new inserted";
				
				
		 }
		 $qry="Update voter_list set status=1 where e_no=".$_SESSION["reg_voter_id"];
		 $retrieve=mysql_query($qry,$conn);
		 
//session_destroy();

		 }
					        unset($_SESSION['root']);
										session_destroy();
							        //header("Location: frst.html");
							        //exit();
					 ?>
					 <table>
					 <tr>
					 <td><h1>Thanku For Voting!</h1></td>
					 
					 <td><a href="main.html"><span style="padding-left:1050px;color:red;font-size:130%"><b>Log Out</b></span></a>
					</td>
					</table>
	 
</body>
</html>