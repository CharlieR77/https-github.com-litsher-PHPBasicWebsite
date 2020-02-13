<!DOCTYPE html>


<html>
	<head>
		<title>The Great Hurricane Escape</title>
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
			
			$query = "select * from home";
					$result = mysql_query($query);
					while ($row = mysql_fetch_assoc($result))
			{
					$H1 = $row["H1"];
					$Tekst = $row["Tekst"];
			} ?>
			<h1><?php echo $H1 ?></h1>
		
			<div class="stylish"><img src="photos/christ.jpg" ></img></div>
		</div> 
		<p class="Copyright"> Copyright 2013/2014 Nathan De Graaf & Abderrahim Abeddar. All rights reserved.</p>
			

		</div>
		
	
	</body>
</html>