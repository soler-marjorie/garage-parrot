<?php 
    $currentPage = basename($_SERVER["SCRIPT_NAME"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $mainMenu[$currentPage]["meta_description"];?>">

    <!-- Boostrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <!-- google font -->

    
    <!-- feuille de style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Le quai antique <?= $mainMenu[$currentPage]["head_title"];?></title>
</head>

<body>  

    <!-- header -->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <?php foreach ($mainMenu as $key => $menuItem) { ?>
                    <li class="nav-item"><a href="<?= $key;?>" class="nav-link px-2
                        <?php
                            if ($key === $currentPage) { 
                                echo "active"; 
                            }
                            //echo ($key === $currentPage) ? "active" : "";
                        ?>
                    "><?= $menuItem["menu_title"];?></a></li>
                <?php } ?>
            </ul>

            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="assets/img/logo.png" alt="Logo" width="200" height="200">
                </a>
            </div>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">S'inscrire</button>
                <button type="button" class="btn btn-primary">Se connecter</button>
            </div>
        </header>
    </div> 

<main>