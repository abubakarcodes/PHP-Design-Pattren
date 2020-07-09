<?php
require "vendor/autoload.php";

use Acme\Book;

class Person {
    public function read(\Acme\BookInterface $book){
        $book->open();
        $book->turnPage();
    }
}

echo (new Person)->read(new \Acme\KindleAdapter(new \Acme\Kindle()));

echo "<br>";

echo (new Person)->read(new Book());

echo  "<br>";


echo (new Person)->read(new \Acme\KindleAdapter(new \Acme\Nook()));
