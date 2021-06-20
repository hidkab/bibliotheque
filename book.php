<?php
// Controleur qui gère l'affichage du détail d'un livre

require "model/entity/book.php";
require "model/bookManager.php";

if(isset($_GET["id"]) && !empty($_GET["id"])) {
    
    $id = $_GET["id"];
    
    $bookManager = new BookManager();
    $book = $bookManager->getBook($id);
}
else {
    $error = "L'identifiant inexistant";
}
// var_dump($book);

require "view/livreView.php";