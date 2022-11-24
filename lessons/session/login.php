<?php
session_start();
// just for now...
define ('USERNAME', 'seum');
define ('PASSWORD', '1234');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get their values
    $username = $_POST['username'];
    $password = $_POST['password'];
    // check if they are correct
    // validate against their records
    if ($username == USERNAME && $password == PASSWORD) {
        
        // credentials are correct
        $_SESSION['username'] = $username;
        // redirect to the home page
        // login + set session
        header('Location: admin.php');
    } else {
        $status = 'Incorrect Login credentials';
    }
} 
//  if (isset($_POST['loginForm'])) {
//      echo 'posted';
//  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    
    
</head>
<body>
    <h1>login</h1>
    
    <form action="login.php" method="POST">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="submit" value="Login" name="loginForm">

            </li>
        </ul>
    </form>
    <?php if (isset($status)) : ?>
        <p><?php echo $status; ?></p>
    <?php endif; ?>
    
    
</body>
</html>