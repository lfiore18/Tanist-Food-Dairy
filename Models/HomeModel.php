<?php

require_once "CardModel.php";

class HomeModel 
{
    // Properties in here
    public $PageTitle = "Homey-home";
    public $Heading = "What can be better dan dis?";

    public Card $thing;

    public $cardArray;

    public function __construct()
    {
        $this->cardArray = array(
            new Card("Butter", "Butter is the best, no doubt can't deny, tastes better than water but don't ask me why!", "RoddasButter.jpg"),
            new Card("Cheese", "Cheese is the best, no doubt can't deny, tastes better than water but don't ask me why!", "CurdsCroust.jpg"),
            new Card("Cream", "Cream is the best, no doubt can't deny, tastes better than water but don't ask me why!", "Timsdairy.jpg")
        );
    }    
}