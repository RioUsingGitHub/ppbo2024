<?php

require_once 'classgroup/Author.php';
require_once 'classgroup/Book.php';
require_once 'classgroup/Publisher.php';

$author = new Author("J.K. Rowling", "J.K. Rowling adalah penulis seri Harry Potter.");

$publisher = new Publisher("Rio", "Wonoyoso Kota Baru, Pontianak", "0896oke");

$book = new Book(
    1,
    "Harry Potter and the Philosopher's Stone",
    "Buku pertama dari seri Harry Potter.",
    "Fantasy",
    "English",
    123,
    $author,
    $publisher
);

print_r($author->show('summary'));
print_r($book->showAll());
print_r($book->detail(1));
var_dump($book->detail(1));

$publisher->setPhone("0896oke2");
echo "Nomor Telepon Penerbit: " . $publisher->getPhone() . "\n";

print_r($publisher->showDetails());
?>