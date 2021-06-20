<?php
// Controleur qui gère l'affichage du détail d'un livre

require "model/entity/book.php";
require "model/bookManager.php";

$id = $_GET["id"];

$bookManager = new BookManager();
$book = $bookManager->getBook($id);
// var_dump($book);

require "view/livreView.php";