<?php
    class car
    {
        public $brand;
        public  $color;

        function setdetail($brand,$color)
        {
            $this->brand=$brand;
            $this->color=$color;

        }

        function getdetail()
        {
            echo "Brand :".$this->brand."<br> Color : ".$this->color;
        }
    }

    $car= new car();
    $car->setdetail("BMW","Red");
    $car->getdetail();
?>