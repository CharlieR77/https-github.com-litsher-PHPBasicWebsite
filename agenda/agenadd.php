<?php
include_once '../includes/connect.php'
?>

<!DOCTYPE html>
<html>
	<head>
		<title>toevoegen</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
	<div class="center">
		<h1> Toevoegen </h1>
		<?php
		$date = $_POST['date'];
		$location = $_POST['location'];
		$ticket = $_POST['ticket'];
		$date_regex = '/^(19|20)\d\d[\-\/.](0[1-9]|1[012])[\-\/.](0[1-9]|[12][0-9]|3[01])$/';
		$error = array(); 
		if($date === ""){ $error[] = 'Geen datum ingevuld'; }
		if(!preg_match($date_regex, $date)){ $error[] = 'Your inserted date entry does not match the YYYY-MM-DD required format.'; } 
		if($location === ""){ $error[] = 'Geen locatie ingevuld'; }
		if($ticket === ""){ $error[] = 'Geen ticket URL ingevuld. (Als je geen URL hebt, zet dit teken neer / )'; }
		
		if(count($error) ==0) 
		{ 
			$query = "insert into agenda (date, location, tickets)
			values ('$date', '$location', '$ticket')";
			mysql_query($query);
			echo $query;
			echo "<p>Mission Completed Sir!</p>";
		}  
		
		else
		{
			echo "<p>Failed!!</p>";
			foreach($error as $error) 
			echo $error . '<br/>';
			header("Refresh:5; url=../agenda.php");
		}		
					
		?>
	<a href="../agenda.php" class="hom">Get Back!</a>
	</div>
	</body>
</html>