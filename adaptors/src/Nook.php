<?php


namespace Acme;


class Nook implements EbookInterface
{
    public function turnOn(){
        var_dump("Nook has been turned on");
    }
    public function clickNextButton(){
        var_dump("next button clicked Nook");
    }
}