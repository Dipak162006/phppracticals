<?php
    $email=$pass="";
    $emailerr=$passerr="";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email=$_POST["email"];
        $pass=$_POST["pass"];

        if(empty($email))
        {
            $emailerr="email is required";
        }
        else
        {
            $email=filter_var($email,FILTER_SANITIZE_EMAIL);
            if(filter_var($email,FILTER_VALIDATE_EMAIL) == FALSE)
            {
                $emailerr="Invalid email formate";
            }
        }

        if(empty($pass))
        {
            $passerr="password is required";
        }
        else
        {
            $pass=filter_var($pass,FILTER_SANITIZE_STRING);
            if(strlen($pass)>6)
            {
                $passerr="Password must be at least 6 characters long";
            }
        }
    }
?>

<html>
    <head><title>Filter form</title>
            <style>
                 .error{ color:red;}
                 .success{ color:green;}
            </style>
    </head>
    <body>
        <h2>Form Validation</h2>
        <form method="POST">
            
          
            <b>Email :</b><input type="text" name="email">
            <p class="error"><?php echo $emailerr; ?></p>
            <br>
            <b>Password :</b><input type="password" name="pass">
            <p class="error"><?php echo $passerr; ?></p>
            <br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]== "POST" && empty($emailerr) && empty($passerr))
            {
                echo "<p class='success'>Form submitted successfully!</p>";
                echo "senitized email :".$email."<br>";
                echo "senitized password :".$pass."<br>";

            }
        ?>
        
    </body>
</html>