<?php

class bookManager {
  private PDO $db;

  // Récupère tous les livres
  public function getBooks() {
      require = $this->;
  }

  // Récupère un livre
  public function getBook() {

  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

  // construct to connecte bookmanager to db
  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '');
  }

}
