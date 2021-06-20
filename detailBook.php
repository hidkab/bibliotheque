<?php
require "model/entity/book.php";
require "model/bookManager.php";

$id = $_GET["id"];
// Controlleur qui gérer l'affichage de tous les livres
$bookManager = new BookManager();
$book = $bookManager->getBook($id);
// var_dump($book);

require "view/livreView.php";