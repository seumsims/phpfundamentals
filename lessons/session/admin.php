<?php 
session_start();
if ( !isset($_SESSION['username']) ) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
    </head>
    <body>
        <h1><?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php">Logout</a>
    </body>
</html>