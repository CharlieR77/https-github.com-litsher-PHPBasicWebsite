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
				<h1>Nieuws</h1>
				
					<div class= "article">	
				<?php
					include_once 'includes/connect.php';
					
					$query = "select * from news";
					$result = mysql_query($query);
					$i = 1;
					while ($row = mysql_fetch_assoc($result))
					{
						$id = $row["id"];
						$text = $row["Text"];
						if(strlen($text) > 200)
						{
							$textdisplaylist = '<div>'.substr($text,0,200) . "</div>\r\n";
							$textfull = substr($text,200,15000) ;
							echo $textdisplaylist;
							echo '<div style="display : none;" id="demo'.$i.'">' .$textfull. "</div>\r\n";
							echo '<p><a id="click" onclick="myFunction(this,\'demo' . $i . '\');">Read More</a></p>'."\r\n";
							$i++;
							
						}
						else
						{
							$textdisplaylist = '<div>'.$text."</div>\r\n";
							echo $textdisplaylist;
						}
					} 
					
					
					?>
				</div>	
			</div> 
		<p class="Copyright"> Copyright 2013/2014 Nathan De Graaf & Abderrahim Abeddar. All rights reserved.</p>
			
		</div>		
		
			<script>
	
		function myFunction(me, id) {
			var el = document.getElementById(id);
			
			if (el.style.display === 'none') {
				el.style.display = 'block';
				me.innerHTML = 'Read Less';
			}  else
			{
				el.style.display = 'none';
				me.innerHTML = 'Read More';			
			}
		}
		</script>
		
		
	</body>
</html>