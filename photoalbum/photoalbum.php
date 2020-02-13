<!DOCTYPE html>


<html>
	<head>
		<title>Login</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css" />
	
	</head>
	<body onLoad="javascript:changeImage()">
	
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
	<div id="navbar">
	  <ul> 
		<li><a href="../index.php">Home</a></li> 
		<li><a href="../news.php">News</a></li> 
		<li><a href="../agenda.php">Agenda</a></li> 
		<li><a href="photoalbum.php">Photos</a></li> 
		<li><a href="../videos.php">Videos</a></li> 
		<li><a href="../about.php">About</a></li> 
		<li><a href="../merch.php">Merch</a></li> 
		<li><a href="../contact.php">Contact</a></li>	
	  </ul>	
	</div>
	<div class="loginis">
		<script>


function changeImage()
{
	var list = document.getElementById('optionlist');
	document.mainimage.src = list.options[list.selectedIndex].value;
}

function prevImage()
{
	var list = document.getElementById('optionlist');
	if(list.selectedIndex == 0)
	{
		list.selectedIndex = list.options.length-1;
	}
	else
	{
		list.selectedIndex--;
	}
	changeImage();
}

function nextImage()
{
	var list = document.getElementById('optionlist');
	if(list.selectedIndex == list.options.length-1)
	{
		list.selectedIndex = 0;
	}
	else
	{
		list.selectedIndex++;
	}
	changeImage();
}
</script>
	<div class="h12">	
	<center><h1>Foto's</h1></center>
	</div>
	<table class= "tafel" align="center" border="0">
	<tr>
	<td colspan="3" align="center"><img name="mainimage" border="1"></td>
	</tr>
	<tr>
		<td align="left"><input type="button" value="Terug" onClick="javascript:prevImage()"></td>
		<td align="center">
		<select id="optionlist" onChange="javascript:changeImage()">
		<?php
		include_once '../includes/connect.php';
		
		$query = "select * from image";
				$result = mysql_query($query);
				while ($row = mysql_fetch_assoc($result))
		{
				$Images = $row["Images"];
				$imagename = $row["imagename"];
				echo '<option value="'.$Images .'">'.$imagename.'</option>';
		} ?>
		</select>	
		</td>
		<td align="right"><input type="button" value="Volgende" onClick="javascript:nextImage()"></td>
	</tr>
	</table>
	</div>
	<p class="Copyright"> Copyright 2013/2014 Nathan De Graaf & Abderrahim Abeddar. All rights reserved.</p>
		

	</div>
	
	</body>
</html>