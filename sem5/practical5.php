<?php

    try
    {
        $pdo = new PDO("mysql:host=localhost;dbname=mydatabase","root","");
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            
          
            $stmt= $pdo->prepare("INSERT INTO students (name,email) VALUES ( :name , :email )");
            $stmt->execute([':name'=>$name,':email'=>$email]);
            
        } 
    }
    catch(PDOException $e)
    {
       echo "database error :".$e->getMessage();
    }
?>

<html>
    <body>
        <h2>insert details</h2>
        <form action="" method="POST">

            <label for="">Name :</label>
            <input type="text" name="name" placeholder="enter name">

             <label for="">email :</label>
            <input type="email" name="email" placeholder="enter email">

            <input type="submit" value="insert" name="submit">

        </form>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM students");
            $stmt->execute();
            
            while($row=$stmt->fetch())
            {
                echo $row['name']." : ";
                echo $row['email']."<br>";
            }
        ?>
    </body>
</html>