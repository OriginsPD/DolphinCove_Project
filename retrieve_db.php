<?php
include_once 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Retrieve Data From Database Using PHP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style_db1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >

<header>

</header>

<div class="container">
    <div class="logo">
        <a href="#"><img src="mircosoft.png" alt="logo"></a>
    </div>
<div class="navbar">

<ul id="nav-lists" >
    <li class="close"><span onclick="Hide()">×</span></li>
    <li><a href="#">Home</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
</ul>
	<ul class="navleft">
<li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
<li><a href="https://twitter.com/" class="fa fa-twitter"></a></li>
<li><a href="#" class="fa fa-google"></a></li>
<li><a href="#" class="fa fa-linkedin"></a></li>
<li><a href="#" class="fa fa-youtube"></a></li>
<li><a href="#" class="fa fa-instagram"></a></li>
</ul>

</div>
</div>
	<center>
		<br>
	<iframe width="480" height="308" src="db.gif">
    </iframe>	
	<h1><span style="color:#4285F4">E</span>
    <span style="color:#DB4437">M</span>
    <span style="color:green">P</span>
    <span style="color:#4285F4">L</span>
    <span style="color:green">O</span>
	<span style="color:#DB4437">Y</span>
    <span style="color:#4285F4">E</span>
    <span style="color:b#F4B400">E &nbsp </span>
    <span style="color:green">G</span>
    <span style="color:#DB4437">O</span>
	<span style="color:#F4B400">O</span>
    <span style="color:green">G</span>
    <span style="color:orangered">L</span>
    <span style="color:b#4285F4">E</span></h1>	
	
 		<form action="" method="POST" >
	 		<input type="text" name="query" placeholder="Type First name, last name,salary, designation, working hours or casual leave to search"><br>
	 		<button type="submit" name="search">Search</button>
		</form>
		<table class="table_format">
			<h2>Result:<h2>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Salary</th>
					<th>Designation</th>
					<th>Working_hrs_per_day</th>
					<th>Casual_Leave</th>
				</tr><br>


			<?php 
			
			if (isset($_POST['search']))//check if the key value is existing 
			{
				$userquery=$_POST['query'];// get the value from the search/ input box/

				$sql= "SELECT * from employee where FirstName='$userquery' or LastName='$userquery' or Salary='$userquery' or Designation='$userquery' or Working_hrs_per_day='$userquery' or Casual_Leave='$userquery'";//select records from the database where one of the field match user query
				$sql= "SELECT * from employee where FirstName like '%$userquery%' or LastName like '%$userquery%' or Salary like '%$userquery%' or Designation like '%$userquery%' or Working_hrs_per_day like '%$userquery%' or Casual_Leave like '%$userquery%'";
				$query_run = mysqli_query($DATABASECONNECTION,$sql);//executes query with given database connection

				while ($row = mysqli_fetch_array($query_run))//while result row are existing
				{//display the result row from database into the table
					?>
					
					<tr>
						<td><?php echo $row['FirstName'];?></td>
						<td><?php echo $row['LastName'];?></td>
						<td><?php echo $row['Salary'];?></td>
						<td><?php echo $row['Designation'];?></td>
						<td><?php echo $row['Working_hrs_per_day'];?></td>
						<td><?php echo $row['Casual_Leave'];?></td>
					</tr>
					<?php

				}
			}
			?>
		</table>
	</center>
	<footer>
  		<p><b><a href="retrieve.php">Copyright 1999-2021 by Angella Enterpise Data.<br> All Rights Reserved.</b></a></p>
	</footer>	
</body>
</html>

