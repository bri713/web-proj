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
        $sql = " SELECT * FROM Users WHERE username = '$userhi' AND passwords = '$pwhi'";
        
        $result= $pdo->query($sql);
        
        if ($result->columnCount() == 0) {
            echo "none";
        }else{
            echo "hv";
            $redirect= 'https://young-wildwood-42922.herokuapp.com/index.php';
            header(Location: $redirect);
        }
        echo "end";
    }
?>


