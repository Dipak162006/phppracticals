<?php
    
    class customexception extends Exception
    {}

    try
    {
        $number=0;

        if($number == 0)
        {
            throw new customexception("number can not be zero . ");
        }

        echo 10/$number;
    }

    catch(customexception $e)
    {
        echo "caught custom error :".$e->getMessage();
    }
    catch(Exception $e)
    {
        echo "caught general error :".$e->getMessage();
    }
?>