<!DOCTYPE html>


<html>
	<head>
		<title>Login</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
	<div class="center">
		<div class="tops"> 
			<form class="loggie" action="login/check.php" method="post">
				<input class="lab" type="text" name="email" />
				<input class="lab" type="password" name="password" />
				<input type="submit" name="submit" />
			<ul class = "clicks">
				<li><a href="acc.php"> My Account</a></li>
				<li><a href="cart.php"> Shopping Cart</a></li>
				<li><a href="help.php"> Help</a></li>
			</ul>
			</form>
		</div>	
	<div class="header">
	</div>
	
	<?php	include_once 'includes/Menu.php'; ?>
	
	<div class="login">
	<?php
		include_once 'includes/connect.php';
		
		$query = "select * from agendahtml";
				$result = mysql_query($query);
				while ($row = mysql_fetch_assoc($result))
		{
				$H1 = $row["H1"];
		}
	?>
	
	<h1> Upcoming Shows</h1>	
		<table class="tab" border="1">
			<tr>
				<th>Date</th>
				<th>Location</th>
				<th>Tickets</th>
			</tr>	
	<?php
		$query2 = "select * from agenda";
				$result2 = mysql_query($query2);
				while ($row = mysql_fetch_assoc($result2))
		{
				$date = $row["date"];
				$location = $row["location"];
				$ticket = $row["tickets"];
			
			
				if( strtotime($date) > strtotime(date("Y/m/d")) ) 
				{
				echo "<tr><td>";
				echo $date;
				echo "</td><td>";
				echo $location; 
				echo '</td><td>';
				echo '<a href="'; echo $ticket; echo '">';
				echo '<img src="agenda/tick.jpg" width="60" height="30"></a>';
				echo '</td></tr>';
				}
		}
		echo "</table>" ;
	?>	
	
	<h1> Past Shows</h1>	
		<table class="tab" border="1">
			<tr>
				<th>Date</th>
				<th>Location</th>
				<th>Tickets</th>
			</tr>
	<?php
		$query1 = "select * from agenda";
				$result1 = mysql_query($query1);
				while ($row = mysql_fetch_assoc($result1))
		{
				$date = $row["date"];
				$location = $row["location"];
				$ticket = $row["tickets"];
			
			
				if( strtotime($date) < strtotime(date("Y/m/d")) ) 
				{
				echo "<tr><td>";
				echo $date;
				echo "</td><td>";
				echo $location; 
				echo '</td><td>';
				echo '<a href="'; echo $ticket; echo '">';
				echo '<img src="agenda/tick.jpg" width="60" height="30"></a>';
				echo '</td></tr>';
				}
		}
		echo "</table>" ;
	?>
		
			<form class="loggien" action="agenda/agenadd.php" method="POST">
				<input class="lab" type="text" name="date" />
				<input class="lab" type="text" name="location" />
				<input class="lab" type="text" name="ticket" />
				<input type="submit" name="submit" />
			</form>		
		
	</div> 
	<p class="Copyright"> Copyright 2013/2014 Nathan De Graaf & Abderrahim Abeddar. All rights reserved.</p>
		

	</div>	
	</body>
</html>