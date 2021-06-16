<?php
// Classe représetant les livres stockés en base de données
class Book {
    protected int $id;
    protected string $title;
    protected string $author;
    protected string $category;
    protected string $date_of_onset;
    protected string $abstract;
    protected int $user_id;

    // seters
    public function setId(int $id) {
        $this->id = $id;
    }

    public function setTitle(int $title) {
        $this->id = $title;
    }

    public function setAuthor(int $author) {
        $this->author = $author;
    }

    public function setCategory(int $category) {
        $this->category = $category;
    }

    public function setDate_of_onset(int $date_of_onset) {
        $this->date_of_onset = $date_of_onset;
    }

    public function setAbstract(int $abstract) {
        $this->abstract = $abstract;user_id
    }

    public function setUser_id(int $user_id) {
        $this->user_id = $user_id;
    }

    // getters
    public function ():int {
        return $this->id;
    }
    
    public function ():string {
        return $this->title;
    }

    public function ():string {
        return $this->author;
    }

    public function ():string {
        return $this->category;
    }

    public function ():string {
        return $this->date_of_onset;
    }

    public function ():string {
        return $this->abstract;
    }
    
    public function ():int {
        return $this->user_id;
    }
    



}
