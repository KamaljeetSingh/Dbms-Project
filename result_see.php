<!Doctype html>
<html>
<head>
<body background="back/yup.jpg">
<br>
<br>
<br>
<br>

<h1 align="center"><u><?php
include 'mysql_conn.php';
mysql_select_db('project');
 $cno=$_POST['const'];
 $sql="Select con_name from constituency where con_no='$cno'";
 $ret=mysql_query($sql);
 $row=mysql_fetch_assoc($ret);
 echo "Results Of ". '<span style="font-family:Georgia;font-size:40px;color:Red;">'.$row['con_name'].'</span>'." Constituency";
 ?>
 </u></h1>
 </head>




<table border="6" cellspacing="20" cellpadding="20" align="center" color="Balck">
<tr>
<td><h2>Candidate Name</td>
<td><h2>Party Name</td>
<td><h2>No Of Votes</td>
</tr>
<tr>
<td><?php
include 'mysql_conn.php';
				  
				  mysql_select_db('project');
				  $cno=$_POST['const'];
				  $i=101;
				  
				  $qry="Select UPPER(name) from voter_id where e_no in (Select cand_eno from candidate where p_no='$i' and con_no='$cno')"; 
					  $retval=mysql_query( $qry, $conn );
					$rowww = mysql_fetch_assoc($retval);
					  $candidate[0]=$rowww['UPPER(name)'];
				  
				   echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$candidate[0].'</span>';
				   ?>
				   </td>
<td><?php
 mysql_select_db('project');
$qry="Select UPPER(p_name) from party where p_no=101"; 
 $retval=mysql_query( $qry, $conn );
					$rowww = mysql_fetch_assoc($retval);
					  $party=$rowww['UPPER(p_name)'];
				  
				   echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$party.'</span>';
				   ?>
			</td>
<td><?php
mysql_select_db('project');
  $cno=$_POST['const'];
$i=101;
$v=0;

$qry="Select no_of_votes from result where can_no in (Select cand_no from candidate where p_no='$i' and con_no='$cno')";
$retval=mysql_query( $qry, $conn );
if($retval)
{	//echo "hi";
	$rowww = mysql_fetch_assoc($retval);
	$votes=$rowww['no_of_votes'];
	if($votes!=NULL)
	echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$votes.'</span>';
	else 
	echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$v.'</span>';
}
					?>
					</td>
					</tr>
					
<tr>
<td><?php
include 'mysql_conn.php';
				  
				  mysql_select_db('project');
				  $cno=$_POST['const'];
				  $i=102;
				  
				  $qry="Select UPPER(name) from voter_id where e_no in (Select cand_eno from candidate where p_no='$i' and con_no='$cno')"; 
					  $retval=mysql_query( $qry, $conn );
					$rowww = mysql_fetch_assoc($retval);
					  $candidate[0]=$rowww['UPPER(name)'];
				  
				   echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$candidate[0].'</span>';
				   ?>
				   </td>
<td><?php
 mysql_select_db('project');
$qry="Select UPPER(p_name) from party where p_no=102"; 
 $retval=mysql_query( $qry, $conn );
					$rowww = mysql_fetch_assoc($retval);
					  $party=$rowww['UPPER(p_name)'];
				  
				   echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$party.'</span>';
				   ?>
			</td>
<td><?php
mysql_select_db('project');
  $cno=$_POST['const'];
$i=102;
$v=0;

$qry="Select no_of_votes from result where can_no in (Select cand_no from candidate where p_no='$i' and con_no='$cno')";
$retval=mysql_query( $qry, $conn );
if($retval)
{	//echo "hi";
	$rowww = mysql_fetch_assoc($retval);
	$votes=$rowww['no_of_votes'];
	if($votes!=NULL)
	echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$votes.'</span>';
	else 
	echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$v.'</span>';
}
					?>
					</td>
					</tr>
					
<tr>
<td><?php
include 'mysql_conn.php';
				  
				  mysql_select_db('project');
				  $cno=$_POST['const'];
				  $i=103;
				  
				  $qry="Select UPPER(name) from voter_id where e_no in (Select cand_eno from candidate where p_no='$i' and con_no='$cno')"; 
					  $retval=mysql_query( $qry, $conn );
					$rowww = mysql_fetch_assoc($retval);
					  $candidate[0]=$rowww['UPPER(name)'];
				  
				   echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$candidate[0].'</span>';
				   ?>
				   </td>
<td><?php
 mysql_select_db('project');
$qry="Select UPPER(p_name) from party where p_no=103"; 
 $retval=mysql_query( $qry, $conn );
					$rowww = mysql_fetch_assoc($retval);
					  $party=$rowww['UPPER(p_name)'];
				  
				   echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$party.'</span>';
				   ?>
			</td>
<td><?php
mysql_select_db('project');
  $cno=$_POST['const'];
$i=103;
$v=0;

$qry="Select no_of_votes from result where can_no in (Select cand_no from candidate where p_no='$i' and con_no='$cno')";
$retval=mysql_query( $qry, $conn );
if($retval)
{	//echo "hi";
	$rowww = mysql_fetch_assoc($retval);
	$votes=$rowww['no_of_votes'];
	if($votes!=NULL)
	echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$votes.'</span>';
	else 
	echo '<span style="font-family:Georgia;font-size:30px;color:Black;">'.$v.'</span>';
}
					?>
					</td>
					</tr>
</table>

<p><?php
mysql_select_db('project');
$cno=$_POST['const'];
$qry="Select can_no,no_of_votes from result where con_no='$cno' and no_of_votes in(Select max(r.no_of_votes) from result r where r.con_no='$cno')"; 
 
 $retval=mysql_query( $qry, $conn );
					while($rowww = mysql_fetch_assoc($retval))
					{
						if($rowww['no_of_votes']==0)
						{
							die("No One Has Got Any Vote From This Constituency");
						}
						else
						{
						$sql="Select UPPER(name) from voter_id where e_no in (Select cand_eno from candidate where cand_no=".$rowww['can_no'].")";
						$take=mysql_query( $sql, $conn );
						$r=mysql_fetch_assoc($take);
						echo '<span style="padding-left:600px;font-family:Georgia;font-size:30px;color:Green;">'.$r['UPPER(name)'].' Has Won'.'</span>';	
						?>
						<br>
						<?php
						}
						
					}
					  
?>
  
</body>  
</html>