<?php
    
    abstract class animal
    {

        public $name;

        function __construct($name)
        {
            $this->name=$name;
        }

        abstract function makesound(); 
    }

    class dog extends animal
    {

        function makesound()
        {
            echo $this->name."  says woof.";
        }
    }

    $dog= new dog("buddy");
    $dog->makesound();
?>