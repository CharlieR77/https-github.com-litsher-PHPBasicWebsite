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
		<h1>Merchandise</h1>
		<p class="Tekst">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
		 Vestibulum tortor quam, feugiat vitae, ultricies eget,
		 tempor sit amet, ante.
		 Donec eu libero sit amet quam egestas semper. 
		 Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
		 Quisque sit amet est et sapien ullamcorper pharetra.
		 Vestibulum erat wisi, condimentum sed, commodo vitae,
		 ornare sit amet, wisi. Aenean fermentum, 
		 elit eget tincidunt condimentum, eros ipsum rutrum orci,
		 sagittis tempus lacus enim ac dui. 
		 Donec non enim in turpis pulvinar facilisis. 
		 Ut felis. Praesent dapibus, neque id cursus faucibus, 
		 tortor neque egestas augue, 
		 vulputate magna eros eu erat. Aliquam erat volutpat. 
		 Nam dui mi, tincidunt quis, accumsan porttitor, 
		 facilisis luctus, metus</p>
	</div> 
	<p class="Copyright"> Copyright 2013/2014 Nathan De Graaf & Abderrahim Abeddar. All rights reserved.</p>
		

	</div>
	</body>
</html>