<?php 

include "./editor.php";

class Admin extends Editor {

    public function delete() {
        if ($this->id === null) {
            return;
    }

        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("DELETE FROM admin WHERE id_admin = :id"); /
        $stmt->execute(['id' => $this->id]);

        $this->id = null;
    }

    public function create() {
        $db = Database::getInstance()->getConnection();

        $sql = "INSERT INTO admin (nom, prenom, email, password, permission)
            VALUES (:nom, :prenom, :email, :password, :permission)";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'password' => password_hash($this->pwd, PASSWORD_DEFAULT),
            'permission' => $this->permission
        ]);

         $this->id = (int)$db->lastInsertId();
    }


}

?>