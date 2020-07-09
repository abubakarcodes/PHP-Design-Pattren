<?php


namespace Acme;


class Kindle implements EbookInterface
{
    public function turnOn(){
        var_dump("kindle has been turned on");
    }
    public function clickNextButton(){
        var_dump("next button clicked");
    }
}