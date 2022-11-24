<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favflower"] = "rose";
echo "Session variables are set.";

print_r($_SESSION);
?>

</body>
</html>