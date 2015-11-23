<?php
session_start();
	echo "Welocome...";

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
				echo "Yes We Found The Candidate".$row['can_no'];
			
			else 
			{
				$can=$_SESSION["candicong"];
				$con=$_SESSION["consicong"];
				$qry="Insert into result values($can,$con,1)";
				$retrieve=mysql_query($qry,$conn);
				echo "new inserted";
		 }
		 
		 
		 }
		 
?>		 