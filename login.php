<?php
  
session_start();
$msg = '';
  
// If user has given a captcha!
if (isset($_POST['input']) && sizeof($_POST['input']) > 0)
  
    // If the captcha is valid
    if ($_POST['input'] == $_SESSION['captcha'])
        $msg = '<span style="color:green">SUCCESSFUL!!!</span>';
    else
        $msg = '<span style="color:red">CAPTCHA FAILED!!!</span>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="frm">
    <div style='margin:15px'>
        <img src="captcha.php">
    </div>
        <form action= "process.php" method="POST">
            <p>
                <label>Username:</label>
                <Input type="text" id="user" name="user"  />
            </p>
            <p>
                <label>Password:</label>
                <Input type="password" id="pass" name="pass"  />
            </p>
            " <?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="input"/>
            <input type="hidden" name="flag" value="1"/>
            <p>
                <Input type="submit" id="btn" name="Login"  />
            </p>
        </form>
    </div>
</body>
</html>


