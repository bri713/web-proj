<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        if(isset($_POST['user'], $_POST['pass'])){
            
            $userhi=$_POST['user'];
            $pwhi=$_POST['pass'];
            
            $db = parse_url(getenv("DATABASE_URL"));

            $pdo = new PDO("pgsql:" . sprintf(
                "host=%s;port=%s;user=%s;password=%s;dbname=%s",
                $db["host"],
                $db["port"],
                $db["user"],
                $db["pass"],
                ltrim($db["path"], "/")
            ));
            echo $userhi;
            echo $pwhi;
            $sql = " SELECT * FROM Users WHERE username='$userhi' AND passwords='$pwhi'";
            
            
            echo "1";
            $result= $pdo->query($sql);
            echo "2";
            
            if ($result->columnCount() === 0) {
                echo "none";
            }else{
                echo "hv";
            }
            echo "end";
        }
    ?>

    <div id="frm">
        <form action= "login.php" method="POST">
            <p>
                <label>Username:</label>
                <Input type="text" id="user" name="user"  />
            </p>
            <p>
                <label>Password:</label>
                <Input type="password" id="pass" name="pass"  />
            </p>
            <p>
                <Input type="submit" id="btn" name="Login"  />
            </p>
        </form>
    </div>
</body>
</html>


