<?php
require "model/entity/book.php";
require "model/bookManager.php";
// Controlleur qui gérer l'affichage de tous les livres
$bookManager = new BookManager();

$books = $bookManager->getBooks();
// var_dump($books);

require "view/indexView.php";