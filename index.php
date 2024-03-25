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
$om = new Club("Olympique de Marseille", "31-08-1899", $france);

$ribery = new Joueur("Ribery", "Franck", "07-04-1983", $france);
$zidane = new Joueur("Zinédine", "Zidane", "23-06-1972", $france);
$ramos = new Joueur("Sergio", "Ramos", "30-03-1986", $espagne);

$riberyBayern = new Contrat("2007", $bayern, $ribery);
$riberyOm = new Contrat("2005", $om, $ribery);
$zidaneReal = new Contrat("2001", $real, $zidane);
$ramosReal = new Contrat("2005", $real, $ramos);
$ramosPsg = new Contrat("2021", $psg, $ramos);


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
            <?= $bayern->getInfos(); ?>

        </div>
        <div class="card card-club">
            <?= $psg->getInfos(); ?>

        </div>
        <div class="card card-club">
            <?= $real->getInfos(); ?>
        </div>
    </div>

    <div class="wrapper-joueur">
        <div class="card card-joueur">
            <?= $ribery->getInfos(); ?>

        </div>
        <div class="card card-joueur">
            <?= $zidane->getInfos(); ?>

        </div>
        <div class="card card-joueur">
            <?= $ramos->getInfos(); ?>

        </div>
    </div>

</body>

</html>