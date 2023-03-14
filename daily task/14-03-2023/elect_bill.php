<!DOCTYPE html>
<html>
<head>
	<title>Calculate Electricity Bill</title>
</head>
<body>
	<h1>Calculate Electricity Bill</h1>
	<form method="POST">
		<label for="units">Enter number of units:</label>
		<input type="number" name="units" id="units">
		<input type="submit" name="submit" value="Calculate">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$units = $_POST['units'];
		if (!empty($units)) {
			$bill = calculate_bill($units);
			echo "<p>Total amount of $units units - $bill</p>";
		}
	}

	function calculate_bill($units) {
		if ($units <= 50) {
			return $units * 3.5;
		} elseif ($units <= 100) {
			return (50 * 3.5) + (($units - 50) * 4);
		} elseif ($units <= 200) {
			return (50 * 3.5) + (50 * 4) + (($units - 100) * 5.2);
		} else {
			return (50 * 3.5) + (50 * 4) + (100 * 5.2) + (($units - 200) * 6.5);
		}
	}
	?>
</body>
</html>
