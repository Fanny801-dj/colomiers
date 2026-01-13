<?php
include __DIR__ . "/configuration/config.php";
include __DIR__ . "/php/database.php";
$database = Database::getInstance()->getConnection();
$query = $database->query("SELECT * FROM equipe");
$equipes = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autres équipes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include './php/components/header.php' ?>
    <div class="container">
        <aside>
            <h1 class="autres-equipes">Autres équipes</h1>
        </aside>
        <main>
            <section class="section-feminine">
                <h2>Section féminine</h2>
                <?php
                $feminines = [];
                foreach ($equipes as $equipe) {
                    if (stripos($equipe['nom'], 'Féminine') !== false) {
                        $feminines[] = $equipe;
                    }
                }
                ?>
                <div class="block-row">
                <?php foreach ($feminines as $feminine): ?>
                    <div class="block block-tall">
                        <img src="image.jpg" alt="image équipe féminine">
                        <div class="equipe-info">
                            <strong><?= $feminine['nom'] ?></strong><br>
                            <a href="<?= $feminine['lien_calendrier'] ?>" target="_blank">Calendrier</a> |
                            <a href="<?= $feminine['lien_classement'] ?>" target="_blank">Classement</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </section>
            <section class="section-jeunes">
                <h2>Sections jeunes</h2>
                <?php
                $jeunes = [];
                foreach ($equipes as $equipe) {
                    if (stripos($equipe['nom'], 'U') === 0) {
                        $jeunes[] = $equipe;
                    }
                }
                ?>
                <div class="block-row">
                <?php foreach ($jeunes as $jeune): ?>
                    <div class="block block-tall">
                        <img src="image.jpg" alt="image équipe jeune">
                        <div class="equipe-info">
                            <strong><?= $jeune['nom'] ?></strong><br>
                            <a href="<?= $jeune['lien_calendrier'] ?>" target="_blank">Calendrier</a> |
                            <a href="<?= $jeune['lien_classement'] ?>" target="_blank">Classement</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </section>
        </main>
    </div>
    <?php include './php/components/footer.php' ?>
</body>
</html>