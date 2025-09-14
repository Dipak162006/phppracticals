<?php
     session_start();

     $message="";

     if($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $secretkey="6LfkCrorAAAAAG-6a0h7QnT3f0cpHd8-N33MOSlD";
        $captcha=$_POST["g-recaptcha-response"];
        if (!$captcha)
        {
            $message = "Please complete the CAPTCHA.";
        }
        else
        {
            $verifyurl="https://www.google.com/recaptcha/api/siteverify";
            $response=file_get_contents($verifyurl."?secret=".$secretkey."&response=".$captcha);
            $responsekey=json_decode($response);

            if ($responsekey->success) 
            {
                $message="✔️Login successful. You are verified as human.";
           
            } 
            else 
            {
                $message="❌ CAPTCHA verification failed. Please try again.";
            }
        } 
     }
?>
<html>
    <head>
        <title>form validation</title>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <h2>Form Validation</h2>
        <form action="" method="POST">
            <b>Name :</b><input type="text" name="name">
            
            <br>
            <b>Email :</b><input type="email" name="email">
           
            <br>
            <div class="g-recaptcha" data-sitekey="6LfkCrorAAAAAPHqpvxN4hzo7Yog0tDj9eT93i_b"></div>
            <br>
            <input type="submit" value="Submit">
        </form>

         <p style="color:red;"><?php echo $message; ?></p>
    </body>
</html>