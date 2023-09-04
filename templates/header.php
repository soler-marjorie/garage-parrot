<?php
    $mainMenu = [
        [
            "page" => "index.php", 
            "title" => "Services et occasions", 
            "meta_description" => "Expérience dans la mécanique depuis 15 ans, nous saurons mettre nos compétences en oeuvre pour régler vos problèmes!"
        ],

        [
            "page" => "témoignages.php", 
            "title" => "Les témoignages", 
            "meta_description" => "Nos fidèles clients nous laisse leur meilleures témoignages. Besoin d'un avis sur notre garage? Regardez notre section témoignages."
        ],

        [
            "page" => "contact.php", 
            "title" => "Contactez-nous", 
            "meta_description" => "Vous souhaitez contacter le garage V. Parrot? Une question sur nos services ? Sur nos Occasions? Ou simplement un renseignement? Nous vous répondons dans les plus brefs délais afin de répondre à vos interrogations."
        ]
    ];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <!-- Boostrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- google font -->
    
    
    <!-- feuille de style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Garage V. Parrot <?= $menuItem["title"];?></title>
</head>
<body>


<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="assets/img/Logo.png" alt="Logo">
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <?php foreach ($mainMenu as $key => $menuItem) { ?>
                <li><a href="<?= $menuItem["page"];?>" class="nav-link px-2"><?= $menuItem["title"];?></a></li>
            <?php } ?>
        </ul>

        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">S'inscrire</button>
            <button type="button" class="btn btn-primary">Se connecter</button>
        </div>
    </header>
</div>
