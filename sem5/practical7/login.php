<?php
   session_start();

   $username="admin";
   $password="admin123";
   
   if(isset($_POST['submit']))
   {
            if($_POST['user'] === $username && $_POST['pass'] === $password)
            {
                $_SESSION['user']=$username;
                header("Location: dashboard.php");
                //echo "<a href='dashboard.php'>go to dashboard</a>";
            }
            else
            {
                echo "Login faild .";
            }
   }

?>
<html>
    <body>
        <h2>LOGIN</h2>
        <form action="login.php" method="POST">

             <label for="">username : </label>
             <input type="text" name="user">

             <label for="">password : </label>
             <input type="password" name="pass">

             <input type="submit" name="submit" value="Login">

            </form>
    </body>
</html>
