<?php

    try
    {
        $pdo = new PDO("mysql:host=localhost;dbname=mydatabase","root","");
    
        $pdo->beginTransaction();

        $pdo->exec("INSERT INTO tbl_practice(name,email) VALUES ('alice','alice123@gmail.com')");
        $pdo->exec("INSERT INTO tbl_practice(name,email) VALUES ('john','john123@gmail.com')");
        $pdo->exec("INSERT INTO tbl_practice(name,email) VALUES ('sid','sid123@gmail.com')");

        $pdo->commit();
        echo "Transaction is successful.";
    }
    catch(Exception $e)
    {
       $pdo->rollBack();
       echo "Transaction failed: " . $e->getMessage();
    }


?>