<?php

    $allowtype=["image/png","image/jpg","image/jpeg"];
    $maxsize=2*1024*1024;
   
    $targetdir="upload/";
    $message="";

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"]))
    {
          $filename=basename($_FILES["file"]["name"]);
          $filesize=$_FILES["file"]["size"];
          $filetype = $_FILES["file"]["type"];

          $targetpath=$targetdir.$filename;

          if(!in_array($filetype,$allowtype))
          {
            echo "invalid file type. Only png, jpg , jpeg allowed.";
          }
          elseif($filesize>$maxsize)
          {
            echo "File is too large. Max size: 2MB.";
          }
          else
          {
           
            if(move_uploaded_file($_FILES["file"]["tmp_name"],$targetpath))
            {
                $message= "file uploaded successfully.";
            }
            else
            {
                $message="file upload failed.";
            }

          }

    }
?>

<html>
    <head><title>File Upload</title>
            
    </head>
    <body>
        <h2>Secure Form Validation</h2>
        <form method="POST" enctype="multipart/form-data">
            
          
            <b>File :</b><input type="file" name="file">
            <br>
            <br>
            <input type="submit" value="Upload">
        </form>

        <?php echo $message;?>
    </body>
</html>
