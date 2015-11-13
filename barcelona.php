<html>
<head>
	
<style>

.players{
position:absolute;
left: 250px;
top: 270px;
font-family:verdana;
	font-size:20px;
	font-weight:400;
}

.sponsors{
position:absolute;
left: 750px;
top: 270px;
font-family:verdana;
	font-size:20px;
	font-weight:400;
}


.main{
position:absolute;
left: 130px;
top:100px;
}
.head{
position:absolute;
left: 200px;
top:90px;
}

.footer{
position:absolute;
left: 130px;
top:1100px;
}

.header {
	background:none black;
	height:70px;
	margin:0 px;
	padding:25px 0 0 33px;
	

}
.header a#logo {
	display:block;
	float:left;
	font-family:bevanregular;
	height:42px;
	width:320px;
}
.header ul {
	float:right;
	list-style:none;
	margin:0;
	overflow:hidden;
	padding:9px 33px 0 0;
}
.header ul li:first-child {
	margin:0;
}
.header ul li {
	float:left;
	margin:0 0 0 36px;
}
.header ul li a {
	color:#fbfbf4;
	font-family:verdana;
	font-size:14px;
	font-weight:400;
	letter-spacing:.015em;
	line-height:30px;
	text-decoration:none;
	text-transform:uppercase;
}
.header ul li.selected a, .header ul li a:hover {
	color:Red;
	
	}

a:link{

text-decoration: none;
color: red;
}

a:visited
{
text-decoration: none;
color: red;


}

a:hover
{

text-decoration: none;
color: blue;

}
a:active
{
text-decoration: none;
color: white;

}


#navbar li {
   list-style: none;
   float: left;
	
   }
#navbar li a {
   display: block;
   padding: 2px 4px;
   background-color: black;
   text-decoration: none; 
   text-align:center;
   }

#navbar li ul {
	display: none; 
	width: auto; /* Width to help Opera out */
	background-color: black;
	
	}
	
#navbar li:hover ul {
	display: block;
	position: absolute;
	margin: 0;
	padding: 5;
	
	margin:0 0 0 -30px;
	}
#navbar li:hover li {
	float: none; }

#navbar li:hover li a, #navbar li.hover li a {
   
   border-bottom: 1px solid #fff;
   }
   
   
	


</style>	


</head>
<body style="background-color : white ; background-image: url('images/bg-background.jpg');"   >

<div class="main" style=" background-color : white ; height: 1000px; width: 1100px;">

<!--<div class="head">
<font size="7" face="verdana" color="yellow	">Hero Indian Football League</font>
</div>-->


<div class="header">
				<a href="dbms.php" id="logo"><img src="images/logo.jpg" alt="logo"></a>
				<ul id="navbar">
					<li>
						<a href="dbms.php">Home</a>
					</li>
					<li>
						<a href="#">Leagues</a>
						
						
						<ul><br>
						<li><a href="commentsleague.php" >League Comments&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="championsleague.php" >Champions League &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="phirlaliga.php">La Liga &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="League3.php">Liga BBVA &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
						</ul>
						
						
					</li>
					<li>
						<a href="#">Clubs</a>
						<ul><br>
							<li><a href="realmadrid.php">Real Madrid &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="barcelona.php">Barcelona &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="manchesterunited.php">Manchester United &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="chelsea.php">Chelsea &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							
						</ul>
					</li>
					<li>
						<a href="schedule.php">Schedule</a>
					</li>
					<li>
						<a href="ranking.php">Rankings</a>
					</li>
					<li>
						<a href="players.php">Players</a>
					</li>
				</ul>
			</div>
			
			<br><br><br>
			<center><br>
		<font size="10" face="verdana" color="red">Barcelona</font>
			</center>
			<br><br>
			<font size="6" face="verdana" color="blue">&nbsp;&nbsp;&nbsp;&nbsp; Players - </font>
			
			
			
			<div class="players">
				
				
				<?php
				$conn = new mysqli("localhost","root","","football");
				if($conn->connect_error)
				{
					die("connection failed : " . $conn->connect_error);
				}
				$sql = "SELECT p.pid, p.firstname, p.lastname FROM player p,club c where p.clubid=c.cid and clubname='Barcelona'";
				$result = $conn->query($sql);
				if($result->num_rows > 0 )
				{
				// output data of each row
				while($row = $result->fetch_assoc())
				{
					echo  " --- ".$row["firstname"]." " . $row["lastname"]. "<br>";
				}
				}
				else
				{
					echo "0 results";
				}
				
				$conn->close();
				
				?>
				
			</div>
			
			
			<font size="6" face="verdana" color="blue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sponsors - </font>
			
			<div class="sponsors">
				
				
				<?php
				$conn = new mysqli("localhost","root","","football");
				if($conn->connect_error)
				{
					die("connection failed : " . $conn->connect_error);
				}
				$sql = "select cs.sponsorName,c.clubName from clubsponsors cs,club c where cs.cid=c.cid group by cs.sponsorName having  cs.sponsorName not in(select cs1.sponsorName from clubsponsors cs1,club c1 where cs1.cid=c1.cid and c1.clubName<>'Barcelona')";
				$result = $conn->query($sql);
				if($result->num_rows > 0 )
				{
				// output data of each row
				while($row = $result->fetch_assoc())
				{
					echo  " --- ".$row["sponsorName"]." " .  "<br>";
				}
				}
				else
				{
					echo "0 results";
				}
				
				$conn->close();
				
				?>
				
			</div>
			
			
			
			
</div>












<center>
<div class="footer" style="background-color : #2E2E2E; height: auto; width:1100px;">
<br>
<font face="helvetica" size="2" color="white" >Copyright &copy; <a href="dbms.php" target="_blank">SoccBuzz</a>. Designed and Developed by <a href="https://www.facebook.com/vaibhav23" target="_blank">Vaibhav Bansal</a> and <a href="https://www.facebook.com/umangandrew.francis" target="_blank">Umang Andrew Francis</a></font>
<br><br>
</div>
</center>

</body>

</html>