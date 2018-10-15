<?php
class Books{
    var $price;
    var $title;
    function __construct($par1, $par2){
        $this->title = $par1;
        $this->price = $par2;
    }
    function getTitle(){
        echo $this->title."<br>";
    }
    function getPrice(){
        echo $this->price."<br>";
    }
}

$b1 = new Books("Coreman", 559);
$b1->getTitle();
$b1->getPrice();




?>