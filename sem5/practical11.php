<?php

   header("Content-Type: application/json");

   $data = [

        "name"=>"dipak",
        "class"=>"A",
        "time"=> date("H:i:s")
   ];

   echo json_encode($data);
?>