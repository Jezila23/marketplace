<?php
$id = isset($_GET["id"])? $_GET["id"] : "";
if(!$id){
    header('Location:./toutParcourir.php');
}
$titre = "Fiche produit";
require_once("./include/header.inc.php");
?>


<!DOCTYPE html>
<html>

<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
			background-color: #EDF6F9;
		}

		.monBouton {
			text-decoration: none;
			background-color: #F28F3B;
			color: white;
			width: 300px;
			border-radius: 30px;
			margin: 0px 20px;
		}

		.monBouton:hover {
			background-color: #C8553D;
		}

		.conteneur {
			width: 600px;
			min-width: 400px;
			height: 480px;
			margin: 10px auto;
			background-color: #ffffff;
			color: #003300;
			text-align: center;
			line-height: 2;
			border: 1px solid;
		}

        h3{
            color : #F28F3B;
        }
        tr {
			text-align: left;
            margin: 10px auto;
	
		}
	</style>
</head>
<body>

<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');

$database = "ecemarketplace";

$db_handle=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found=mysqli_select_db($db_handle, $database);



    $sql="SELECT * FROM image_art, articles WHERE image_art.ID_Art = articles.ID_Art AND articles.ID_Art =".$id.";";

    $resultat=mysqli_query($db_handle, $sql);

    while($data = mysqli_fetch_array($resultat)){
        $nom = $data['Nom'];
	    $prix = $data['Prix'];
	    $des = $data['Description'];
        $img=$data['Img'];
	}

?>
<div class = "conteneur">
<h3><?php echo $nom; ?></h3><br/>
<img src="<?php echo $img;?>" class="rounded" alt="Logo HTML w3" width="400" height="200"/><br/>
<?php echo "Prix : ".$prix."€"; ?></h4><br>

<?php echo "Description du produit : ".$des; ?>

    <form action ="" methode="">
    <tr>
        <td>Quantité : </td>
		<td><input type="number" name="quantite"></td><br>
    </tr>
    <tr>
        <br>
    </tr>
    <tr>
        <td>
            <input type="submit" name="ajouter" class="monBouton" style="padding: 5px 60px;" value="Ajouter au panier">
        </td>
    </tr>
    </form>
</div>

</body>
</html>

<?php require_once("./include/footer.inc.php"); ?>