<!DOCTYPE html>
<html>
<head>
	<title>MoneyConvert</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<form action="convert.php" method="post">
<input type="number" name="startnmbr" placeholder="Amount of money" required>
<input type="number" name="year" maxlength="4" placeholder="Year" required>	
<input type="submit" name="calc">
</form>

<?php

if(isset($_POST['startnmbr'])) {
	$money = $_POST['startnmbr'];}

if(isset($_POST['year'])) {
	$year = $_POST['year'];

	if($year < 999) {
		$multiplier =2.5;
	}
		elseif ($year < 1499) {
			$multiplier = 2;
		}
		elseif ($year < 2000) {
			$multiplier = 1.5;
	}
}
if(isset($_POST['calc'])) {
	$sum = $money*$multiplier;

	echo "År ",$year, " så var ", $money, " ungefär samma som ", $sum, " är idag. Alltså ",  $multiplier ," gånger mer.";
}

?>

</body>
</html>