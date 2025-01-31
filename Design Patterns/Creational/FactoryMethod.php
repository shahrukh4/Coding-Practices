<?php

class Book {
    private $name;
    private $author;
    
    public function __construct($name, $author) {
        $this->name = $name;
        $this->author = $author;
    }

    public function getNameAndAuthor() {
        echo $this->name . " by " . $this->author . PHP_EOL;
    }
}

// Concrete creators
class BookFactory {
    public static function create($name, $author) {
        return new Book($name, $author);
    }
}

$bookOne = BookFactory::create('GOT', 'Martin');
$bookTwo = BookFactory::create('Harry Potter', 'J.K. Rowling');

$bookOne->getNameAndAuthor();
$bookTwo->getNameAndAuthor();
