<?php 

class Equipe {
    public $id;
    public $lien_calendrier;
    public $lien_classement;
    public $nom;
    public $trainers; //array de l'objet Staff

    public function __construct($nom, $lien_calendrier, $lien_classement) {
        $this->nom = $nom;
        $this->lien_calendrier = $lien_calendrier;
        $this->lien_classement = $lien_classement;
        $this->trainers = [];

    }


    public function delete() {
        if ($this->id === null) {
            return;
        }

        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("DELETE FROM equipe WHERE id_equipe = :id"); 
        $stmt->execute(['id' => $this->id]);

        $this->id = null;
    }


    public function create() {
        $db = Database::getInstance()->getConnection();

        $sql = "INSERT INTO equipe (nom, lien_calendrier, lien_classement)
            VALUES (:nom, :lien_calendrier, :lien_classement)";
        $stmt = $db->prepare($sql);
        $stmt->execute([
        'nom' => $this->nom,
        'lien_calendrier' => $this->lien_calendrier,
        'lien_classement' => $this->lien_classement
        ]);
        
        $this->id = (int)$db->lastInsertId();
    }

}


?>