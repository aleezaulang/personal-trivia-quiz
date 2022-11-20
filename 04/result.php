<?php 
	if (isset ($_POST['submit']))
	{
		$iPoints = 0;
		$sMessage = "";
		
		if ($_POST['q1'] == "b")
		{
			$iPoints+=1;
		}	
		if ($_POST['q2'] == "c")
		{
			$iPoints+=1;
		}	
		if ($_POST['q3'] == "b")
		{
			$iPoints+=1;
		}	
		if ($_POST['q4'] == "a")
		{
			$iPoints+=1;
		}		
		if ($_POST['q5'] == "c")
		{
			$iPoints+=1;
		}
		if ($_POST['q6'] == "b")
		{
			$iPoints+=1;
		}	
		if ($_POST['q7'] == "b")
		{
			$iPoints+=1;
		}		
		if ($_POST['q8'] == "b")
		{
			$iPoints+=1;
		}
		if ($_POST['q9'] == "d")
		{
			$iPoints+=1;
		}
		if ($_POST['q10'] == "b")
		{
			$iPoints+=1;
		}	
		if ($_POST['q11'] == "c")
		{
			$iPoints+=1;
		}			
		if ($_POST['q12'] == "b")
		{
			$iPoints+=1;
		}	
		if ($_POST['q13'] == "a")
		{
			$iPoints+=1;
		}	
		
		
		if ($iPoints >= 16 && $iPoints <= 20)
		{
			$sMessage = "You are one of my precious potatoes.";
		}
		else if ($iPoints >= 12 && $iPoints <= 15)
		{
			$sMessage = "You are a good friend.";
		}
		else if ($iPoints >= 8 && $iPoints <= 11)
		{
			$sMessage = "I guess we're not close enough.";
		}
		else if ($iPoints >= 3 && $iPoints <= 7)
		{
			$sMessage = "Bruh, I prolly don't know you.";
		}
		else if ($iPoints >= 0 && $iPoints <= 2)
		{
			$sMessage = "Big sad.";
		}
	}
	else
	{
		header('location: index.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Trivia Game - Aleeza Ulang</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css" />
	</head>
	
	<body>
			<div class="container">
				<div class="row">
					<h1>Total Points: <?php echo $iPoints; ?></h1><br/>
					<h3><?php echo $sMessage; ?></h3>
					<br/>
					<a href="index.php" class="btn btn-info">
						Try Again
					</a>
					
				</div>
				
			</div>
	</body>
</html>