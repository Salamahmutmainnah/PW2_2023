<?php

class car{
    // property
    public $brand;
    public $color;

    function getBrand() {
        return $this->brand;
    }
    function getColor(){
        return $this->color;
    }
}


    // objek
    $rubicon = new Car();
    $tesla = new Car ();

    // Setter 
    $rubicon->brand = "Rubicon";
    $tesla->brand = "Tesla";
    $rubicon->color = "Silver";
    $tesla->color = "Hitam";


    // echo
echo $rubicon->getBrand();
echo '<br>';
echo $tesla->getBrand();

echo $rubicon->getColor();
echo '<br>';
echo $tesla->getColor();

?>