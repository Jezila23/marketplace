<?php if (!isset($sessionstart) || $sessionstart) { session_start(); } ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="title" content="<?php echo $titre ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css" />
    <?php if (isset($css) && $css) : ?>
        <link rel="stylesheet" href="<?php echo $css ?>" />
    <?php endif ?>
    <?php if (isset($flickity) && $flickity) : ?>
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <?php endif ?>

    <link rel="icon" type="image/png" sizes="32x32" href="./images/cart.png" />
    <title><?php echo $titre ?></title>
</head>

<body>
    <header>
        <div class="container-fluid p-0">
            <nav class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <div class="header-logo">
                    <a href="./index.php"><img src="images/logo.png" alt="logo" /></a>
                </div>

                <ul class="nav">
                    <li class="nav-item mx-3"><a href="./index.php" class="nav-link btn btn-primary rounded-pill">Accueil</a></li>
                    <li class="nav-item mx-3"><a href="toutParcourir.php" class="nav-link btn btn-primary rounded-pill">Tout Parcourir</a></li>
                    <?php if (isset($_SESSION["acheteur"])) : ?>
                        <li class="nav-item mx-3"><a href="enconstruction.html" class="nav-link btn btn-primary rounded-pill">Notifications</a></li>
                    <?php endif ?>
                </ul>

                <?php
                if (isset($_SESSION["acheteur"]) || isset($_SESSION["vendeur"]) || isset($_SESSION["administrateur"])) {
                    require_once("./elements/boutonsconnecte.php");
                } else {
                    require_once("./elements/boutonsdeconnecte.php");
                }
                ?>
            </nav>
        </div>
    </header>