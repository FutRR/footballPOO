<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$allemagne = new Pays("Allemagne");
$france = new Pays("France");
$espagne = new Pays("Espagne");

$bayern = new Club("Bayern Munich", "27-02-1900", $allemagne);
$psg = new Club("Paris Saint-Germain", "12-08-1970", $france);
$real = new Club("Real Madrid", "06-03-1902", $espagne);

$ribery = new Joueur("Ribery", "Franck", "07-04-1983", $france);

$riberyBayern = new Contrat("2007", $bayern, $ribery);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football POO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="wrapper-pays">
        <div class="card card-pays">
            <?= $france->getInfos() ?>
        </div>
        <div class="card card-pays">
            <?= $allemagne->getInfos() ?>
        </div>
        <div class="card card-pays">
            <?= $espagne->getInfos() ?>
        </div>
    </div>

    <div class="wrapper-club">
        <div class="card card-club">
            <?= $bayern->getInfos();
            echo $bayern->afficherJoueurs();
            ?>

        </div>
        <div class="card card-club">
            <?= $psg->getInfos() ?>

        </div>
        <div class="card card-club">
            <?= $real->getInfos() ?>
        </div>
    </div>

    <div class="wrapper-joueur">
        <div class="card card-joueur"></div>
        <div class="card card-joueur"></div>
        <div class="card card-joueur"></div>
    </div>

</body>

</html>