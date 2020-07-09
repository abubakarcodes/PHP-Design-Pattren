<?php
namespace  Acme;
use Acme\BookInterface;
use Acme\Kindle;
use Acme\EbookInterface;

class KindleAdapter implements BookInterface{

    private $reader;
    public function __construct(EbookInterface $reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
       $this->reader->turnOn();
    }

    public function turnPage()
    {
        $this->reader->clickNextButton();
    }
}