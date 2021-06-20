<?php
require "model/entity/book.php";
require "model/bookManager.php";
// Controlleur qui gérer l'affichage de tous les livres
$bookManager = new BookManager();

if(isset($_POST) && !empty($_POST)) {
    $book = new Book($_POST);
    $bookManager->addBook($book);
}

$books = $bookManager->getBooks();

require "view/indexView.php";