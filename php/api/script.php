<?php

include_once __DIR__ . "/../database.php";

// Lire les données JSON envoyées par fetch
$input = json_decode(file_get_contents('php://input'), true);

$action = $input['action'] ?? null;
$idStaff = $input['id_staff'] ?? null;
$idEquipe = $input['id_equipe'] ?? null;

// Vérifier que les données sont passées en POST

if(isset($_GET["action"])) {
    
    switch($_GET["action"]) {

        case "get-link": {

            $staffByEquipe = Database::getInstance()->loadStaffsByEquipe($_GET["id_equipe"]);
            $allstaff = Database::getInstance()->loadStaffs();

            foreach ($allstaff as $staff) {
                # code...
                $staff->state = false;
                foreach($staffByEquipe as $testvar) {
                    if ($testvar == $staff) {$staff->state = true;}
                }

            }
            // Crée un tableau final
            $donnee = [
                "staffs" => $allstaff,
                "idteam" => $_GET["id_equipe"]
            ];
            echo json_encode($donnee);
        }
    }
}


if (isset($action)) {

    switch ($input["action"]) {

        case "create-link": {
            $link = new StaffEquipe($idEquipe, $idStaff);
            $link->save();
            echo json_encode(["success" => true]);
            exit;
        }

        case "delete-link": {
            $link = new StaffEquipe($idEquipe, $idStaff);
            $link->delete();
            echo json_encode(["success" => true]);
            exit;
        }

        /* case "create-link": {

        }
        case "create-link": {

        } */ // on peut rajouter d'autres cases ici (ceux dans backoffice.php)
    }

}

?>