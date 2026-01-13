<?php 

    // include "./php/database.php";
    // $article = Database::getInstance()->loadArticles();
    // echo $article[1]->titre pour afficher le premier de la liste;

include __DIR__ . '/publication.php';
class Article extends Publication {

    public $date;
    public $categorie;

    public function __construct($date, $titre, $texte, $image, $categorie) {
        $this->categorie = $categorie;
        $this->date = $date;
        $this->titre = $titre;
        $this->texte = $texte;
        $this->image = $image;
    }

    public function delete() {
        //requête sql pour delete
    }
}


?>