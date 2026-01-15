<?php 


class Editor {

    private $nom;
    private $prenom;
    private $pwd;
    private $email;

    public function login () {
        // fonction qui vérifie que le mot de passe et le login donnés sont les bons et return true + session
    }

    public function __construct(Admin $admin, $email, $pwd, $prenom, $nom) {
        $this->email = $email;
        $this->pwd = $pwd;
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function delete() {
         // pas de table dans la base de donnée donc suppression logique
        $this->id = null;
        $this->nom = null;
        $this->prenom = null;
        $this->email = null;
        $this->pwd = null;
    }

}

?>