<!DOCTYPE html>


<html>
	<head>
		<title>The Great Hurricane Escape</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
	<div class="center">
	<div class="header">
	</div>
	<div id="navbar"> 
	  <ul> 
		<li><a href="index.php">Home</a></li> 
		<li><a href="news.php">Terug</a></li> 
		<li><a href="agenda.php">Agenda</a></li> 
		<li><a href="./photoalbum/photoalbum.php">Photos</a></li> 
		<li><a href="videos.php">Videos</a></li> 
		<li><a href="about.php">About</a></li> 
		<li><a href="merch.php">Merch</a></li> 
		<li><a href="contact.php">Contact</a></li> 	
	  </ul>	
	</div>
	<div class="login">
		<h1>Nieuws</h1>
		<div class= "article">	
		<?php
		include_once 'connect.php';
		
		$id = $_GET['id'];
		
		$query = "select * from news where id = '$id'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result))
		{
		$text = $row["Text"];
		echo $text;
		}
	?>
		</div>
	</div> 
	<p class="Copyright"> Copyright 2013/2014 Nathan De Graaf & Abderrahim Abeddar. All rights reserved.</p>
		

	</div>
	</body>
</html>