
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["Rollnumber"] = "12";
$_SESSION["Name"] = "ajay";
echo "Session variables are set.";
?>

</body>
</html>

