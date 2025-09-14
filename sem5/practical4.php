<?php

    try
    {
        $pdo = new PDO("mysql:host=localhost;dbname=mydatabase","root","");
    
        $stmt= $pdo->prepare("SELECT * FROM tbl_practice");
        $stmt->execute();
        
        
        while($row=$stmt->fetch())
        {
            echo $row['name']."<br>";
        }
    }
    catch(PDOException $e)
    {
       echo "database error :".$e->getMessage();
    }


?>