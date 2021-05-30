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

/**
 * Fonction utilitaire : afficher une cellule du carousel
 * Les cellules on un lien vers la page article.php, l'id de l'article est passé en paramêtre URL
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
    <div class="card card-produit mx-3 rounded-3">
        <figure class=" mt-3 card-img-top d-flex align-items-center justify-content-center">
            <img class="border border-light rounded-3" src="$img" alt="Article"/>
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


/**
 * Vérifie si la session est active et redirige l'utilisateur vers l'url en paramêtre si elle ne l'est pas
 *
 * @param string $role
 * @return boolean
 */
function verifier_session(string $role, string $url = "./index.php"): void
{
    if (!isset($_SESSION[$role])) {
        header('Location:' . $url);
        exit(1);
    }
}

/**
 * Zfficher le panier
 *
 * @return void
 */
function afficher_panier(): void
{

    $nb_art = isset($_SESSION["acheteur"]["panier"]) ? sizeof($_SESSION["acheteur"]["panier"]) : 0;
    $total = 0;
    echo <<< EOT
<h4 class="d-flex justify-content-start align-items-center mb-3">
    <img class="d-block" src="/images/cart.png" alt="Mon Panier" width="40" height="40" />
    <span class="ms-2 text-primary">Mon panier</span>
    <span class="ms-auto badge bg-primary rounded-pill">$nb_art</span>
</h4>
<ul class="list-group mb-3">
EOT;

    if ($nb_art > 0) {
        $panier =  $_SESSION["acheteur"]["panier"];
        foreach ($panier as $article) {
            $nom = $article["nom"];
            $desc = $article["desc"];
            $prix = $article["prix"];
            $qte = $article["qte"];
            $total_article = $prix * $qte;
            $total += $total_article;
            afficher_article($nom, $desc, $total_article);
        }

        //TODO implémenter les codes promos.
        afficher_code_promo("EXEMPLECODE", 0);

        //Fin de la section panier

        echo <<< EOT
                    <li class="list-group-item d-flex justify-content-between">
                    <span>Total (EUR)</span>
                    <strong>€$total</strong>
                </li>
            </ul>
       
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Code promo">
                    <button type="submit" class="btn btn-secondary">Appliquer</button>
                </div>
            </form>
       EOT;
    } else {
        //Afficher message panier vide
        echo <<< EOT
    <li class="list-group-item d-flex justify-content-between lh-sm">
        <div>
            <h6 class="my-0">Votre panier est vide :(</h6>
        </div>
    </li>
</ul>
EOT;
    }
}

/**
 * Affiche le composant html représentant un article dans le panier
 *
 * @param string $nom
 * @param string $desc
 * @param float $prix
 * @return void
 */
function afficher_article(string $nom, string $desc, float $prix): void
{
    $article = <<< EOT
<li class="list-group-item d-flex justify-content-between lh-sm">
    <div>
        <h6 class="my-0">$nom</h6>
        <small class="text-muted">$desc</small>
    </div>
    <span class="text-muted">€$prix</span>
</li>
EOT;
    echo $article;
}

/**
 * Affiche le composant html représentant le code promo appliqué dans le panier
 *
 * @param string $code
 * @param integer $rabais
 * @return void
 */
function afficher_code_promo(string $code, int $rabais): void
{
    $code = <<< EOT
<li class="list-group-item d-flex justify-content-between bg-light">
    <div class="text-success">
        <h6 class="my-0">Code promo</h6>
        <small>$code</small>
    </div>
    <span class="text-success">−€$rabais</span>
</li>
EOT;
    echo $code;
}
