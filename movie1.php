<?php
class Movie
{
    private $id;
    public $title;
    public $rentalPrice;

    const DISCOUNT = 10;

    public function __construct($pId, $pTitle, $pRentalPrice)
    {
        $this->id = $pId;
        $this->title = $pTitle;
        $this->rentalPrice = $pRentalPrice;
    } 

    
}
?>