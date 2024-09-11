<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

// Contoh penggunaan:
$author = new Author("Tere Liye", "A prolific Indonesian author known for his novels.");
$publisher = new Publisher("Republika", "Jl. Warung Buncit Raya No.37, Jakarta Selatan", 987654321);
$book = new Book(9786024025544, "Hujan", "A novel about love, friendship, and the future.", "Fiction", "Indonesian", 320, $author->name, $publisher->name);

print_r($author->show('name'));
print_r($book->showAll());
echo "Phone: " . $publisher->getPhone();

?>
