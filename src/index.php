<?php
$titre = "Accueil";
$flickity = true;
require_once("./include/fonctions.inc.php");
require_once("./include/header.inc.php");
?>

<main class="container w-75 h-75 d-flex flex-column justify-content-start">
    <h1 class="align-self-center">Notre Sélection d'articles</h1>
    <?php afficher_selection_articles(6)?>
</main>

<?php require_once("./include/footer.inc.php"); ?>