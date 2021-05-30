<?php
require_once("./include/mysql.conf.inc.php");

/**
 * Affiche une sélection d'articles sous forme d'un carousel.
 * Utilise la syntaxe Heredoc pour simplifier l'écriture des chaines de caractères 
 * cf. https://www.php.net/manual/fr/language.types.string.php#language.types.string.syntax.heredoc
 *
 * @param integer $nb_art nombre d'articles à afficher au maximum
 * @return void
 */
function afficher_selection_articles(int $nb_art_max = 8): void
{

    $sql = "SELECT a.ID_Art, a.Nom, a.Prix, i.Img FROM articles a ";
    $sql .= "INNER JOIN image_art i ";
    $sql .= "ON i.ID_Art = a.ID_Art ";
    $sql .= "ORDER BY a.ID_Art ";
    $sql .= "LIMIT " . $nb_art_max . ";";

    $res = query_bdd($sql);

    $html = <<< EOT
<!-- https://flickity.metafizzy.co/options.html -->
<div class="main-carousel js-flickity" data-flickity-options='{ "cellAlign": "center", "contain": true, "groupCells": true}'>
EOT;

    while ($ligne = mysqli_fetch_array($res)) {
        $html .= cell_carousel($ligne["ID_Art"], $ligne["Img"], $ligne["Nom"], $ligne["Prix"]);
    }

    $html .= "</div>\n";
    echo $html;
}

//Paramêtres URL => Une seule page article.php, mais son contenu est généré en fonction de l'article article.php?id=1


/**
 * Fonction utilitaire : afficher une cellule du carousel
 *
 * @param integer $id de l'article
 * @param string $img
 * @param string $titre
 * @param integer $prix
 * @return string
 */
function cell_carousel(int $id, string $img = "https://source.unsplash.com/random/120x120", string $titre = "Article génial", float $prix = 100): string
{
    $cell = <<< EOT
<div class="carousel-cell">
    <div class="card mx-3 rounded-3">
        <figure class=" mt-3 card-img-top d-flex align-items-center justify-content-center">
            <img class="border border-light rounded-3" src="$img" alt="Article">
        </figure>
        <div class="card-body p-0">
            <p class="card-title text-center mb-1"><a href="article.php?id=$id">$titre</a></p>
            <p class="card-text text-center"> $prix €</p>
        </div>
    </div>
</div>
EOT;
    return $cell;
}
