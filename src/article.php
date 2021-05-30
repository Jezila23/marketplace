<?php
$titre = "Inscription";
$css = "article.css";
$id = isset($_GET["id"]) ? $_GET["id"] : "";
if (!$id) {
	header('Location:./toutParcourir.php');
}
$titre = "Fiche produit";
require_once("./include/header.inc.php");
?>

<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

$database = "ecemarketplace";

$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

$sql = "SELECT * FROM image_art, articles WHERE image_art.ID_Art = articles.ID_Art AND articles.ID_Art =" . $id . ";";

$resultat = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_array($resultat)) {
	$nom = $data['Nom'];
	$prix = $data['Prix'];
	$des = $data['Description'];
	$img = $data['Img'];
}

?>
<div class="conteneur">
	<h3><?php echo $nom; ?></h3><br />
	<img src="<?php echo $img; ?>" class="rounded" alt="Logo HTML w3" width="400" height="200" /><br />
	<?php echo "Prix : " . $prix . "€"; ?><br>

	<?php echo "Description du produit : " . $des; ?>

	<form action="./ajoutpanier.php" method="GET">
		<div class="d-flex justify-content-center align-items-center">
			<input type="hidden" id="id" name="id" value="<?php echo $id ?>" />
			<input type="hidden" id="nom" name="nom" value="<?php echo $nom ?>" />
			<input type="hidden" id="desc" name="desc" value="<?php echo $des ?>" />
			<input type="hidden" id="prix" name="prix" value="<?php echo $prix ?>" />
			<label class="mt-3 me-2" for="quantite">Quantité :</label>
			<input class="mt-3 me-2" type="number" id="quantite" name="quantite" min="1" max="5" />
			<input class="mt-3 btn btn-primary rounded-pill" type="submit" style="padding: 5px 60px;" value="Ajouter au panier" />
		</div>
	</form>
</div>

<?php require_once("./include/footer.inc.php"); ?>