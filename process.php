<?php
    $db = parse_url(getenv("DATABASE_URL"));
    
    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
    echo "Hello DB user";
    echo db["user"];
    
    $sql = "Insert INTO Users (username, passwords) VALUES (HI, HI)"
    
    if($pdo->query($sql)==TRUE)
    {
        echo "ADDED";
    }else{
        echo "UNSUCCESS";
    }
