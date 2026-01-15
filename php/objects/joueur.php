<?php 

include_once __DIR__ . '/personnel.php';

class Joueur extends Personnel {

    public $poste;
    public $photo;

    public function __construct($id, $nom, $prenom, $poste, $photo) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = "joueur";
        $this->poste = $poste;
        $this->photo = $photo;
    }

    public function delete() {
        if ($this->id === null) {
        return;
        }

        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("DELETE FROM joueur WHERE id_joueur = :id"); 
         $stmt->execute(['id' => $this->id]);

        $this->id = null;
    }

    public function create() {
        $db = Database::getInstance()->getConnection();

        $sql = "INSERT INTO joueur (nom, prenom, role, photo)
            VALUES (:nom, :prenom, :role, :photo)";
        $stmt = $db->prepare($sql);
        $stmt->execute([
        'nom' => $this->nom,
        'prenom' => $this->prenom,
        'role' => $this->poste, 
        'photo' => $this->photo
        ]);

        $this->id = (int)$db->lastInsertId();
    }


}

?>