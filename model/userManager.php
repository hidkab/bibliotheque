<?php

class userManager {
  private PDO $db;

  // Récupère tous les utilisateurs
  public function getUsers() {

    
  }

  // Récupère un utilisateur par son id
  public function getUserById() {

  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }

  // construct
  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '');
  }
}
