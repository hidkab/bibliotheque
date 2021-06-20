<?php
// Classe représetant les livres stockés en base de données
class Book {
    protected int $id;
    protected string $title;
    protected string $author;
    protected string $category;
    protected string $date_of_onset;
    protected string $abstract;
    protected ?string $user_id;

    // construct
    public function __construct(?array $data=NULL) {
        if($data) {
            foreach($data as $key => $value) {
                $method = "set". ucfirst($key);
                if(method_exists($this, $method)) {
                    $value = htmlspecialchars($value);
                    $this->$method($value);
                }
            }
        }
    }

    // seters
    public function setId(int $id) {
        $this->id = $id;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function setAuthor(string $author) {
        $this->author = $author;
    }

    public function setCategory(string $category) {
        $this->category = $category;
    }

    public function setDate_of_onset(string $date_of_onset) {
        $this->date_of_onset = $date_of_onset;
    }

    public function setAbstract(string $abstract) {
        $this->abstract = $abstract;
    }

    public function setUser_id(?string $user_id=NULL) {
        $this->user_id = $user_id;
    }

    // getters
    public function getId():int {
        return $this->id;
    }
    
    public function getTitle():string {
        return $this->title;
    }

    public function getAuthor():string {
        return $this->author;
    }

    public function getCategory():string {
        return $this->category;
    }

    public function getDate_of_onset():string {
        return $this->date_of_onset;
    }

    public function getAbstract():string {
        return $this->abstract;
    }
    
    public function getUser_id():string {
        return $this->user_id;
    }
    
}
