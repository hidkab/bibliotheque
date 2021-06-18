<?php

class BookManager {
  private PDO $db;

  // Récupère tous les livres
  public function getBooks() {
      $query= $this->db->query('SELECT * FROM book');
      $result = $query->fetchAll(PDO::FETCH_ASSOC);
      // var_dump($result);
      foreach($result as $key => $book ) {
        $result[$key] = new Book($book);
      }
      return $result;
  }
  // Récupère un livre
  public function getBook() {
    
  }

  // Ajoute un nouveau livre
  public function addBook(Book $book) {
    $query = $this->db->prepare('INSERT INTO book("title", "author", "category", "date_of_onset", "abstract", "user_id" ) 
    VALUES(:title,author, :category, :date_of_onset, :abstract, :user_id )
    ');
    $result = $query->execute([
      "title" => $book-> getTitle(),
      "author" => $book-> getAuthor(),
      "category" => $book-> getCategory(),
      "date_of_onset" => $book-> getDate_of_onset(),
      "abstract" => $book-> getAbstract(),
      "user_id" => $book-> getUser_id()
    ]);
    return $result;

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

  // construct to connecte bookmanager to db
  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '');
  }

}
