<?php
$titre = "Accueil";
require_once("./include/header.inc.php");
?>

<?php	
	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS','');

	$database = "ecemarketplace";

	$db_handle=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	$db_found=mysqli_select_db($db_handle, $database);
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			background-color: #EDF6F9;
		}
		ul li{
			color: #F28F3B;
		}
 	#nav {
 		line-height: 30px;
 		background-color: #FFFFFF;
 		height: 400px;
 		color: #F28F3B;
 		width: 20%;
 		float: left;
 		padding: 5px;
	}


 	#section {
 		background-color: #FFFFFF;
 		width: auto;
 		padding: 5px;
 		height: 600px;
 		line-height: 2em;
 	}
 	.conteneur{
		position: absolute;
		left: 55.62%;
		right: 29.59%;
		top: 21.88%;
		bottom: 65.43%;

		background: #EDF6F9;
		}
	#col{
		column-count: 5;
	}
 
 	</style>
</head>
<body>
 	<div id="nav">
 		<ul>
 			<li><a href="meubles.php">Meubles et objets d'art</a></li>
 			<li><a href="materielscolaire.php">Matériel scolaire</a></li>
 			<li><a href="accessoirevip.php">Accessoire VIP</a></li>
 			<li><a href="meilleuroffre.php">Meilleur offre</a></li>
 			<li><a href="achatimmediat.php">Achat immédiat</a></li>
 			<li><a href="transaction.php">Transaction client-vendeur</a></li>
 		</ul>
 	</div>

 	<div id="section">
 		<div id="col">
 		<?php
		$requete="SELECT*FROM image_art, articles WHERE image_art.ID_Art=articles.ID_Art";
		$resultat=mysqli_query($db_handle, $requete);
		while($ligne=mysqli_fetch_array($resultat)) {
            $id = $ligne['ID_Art'];
			?>
			<div class="col-6">
			<a href="<?php echo "article.php?id=".$id."\"";?>"><img src="<?php echo $ligne['Img'];?>" class="rounded" alt="Logo HTML w3" width="110" height="110"/>
			<br/>
			<span><?php echo $ligne['Nom'];?></span>
			</a>

			</div>
			<?php
		}
		?>
		</div>
 	</div>
</body>
</html>


<?php require_once("./include/footer.inc.php"); ?>