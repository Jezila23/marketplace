<?php

session_start();

$vendeur = $_SESSION["vendeur"];

$id = $vendeur["ID_Vend"];

$nom = $vendeur["Nom"];

	
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$prix = isset($_POST["prix"])? $_POST["prix"] : "";
	$pseudo = isset($_POST["nom"])? $_POST["nom"] : "";
	$categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
	$des = isset($_POST["description"])? $_POST["description"] : "";
	$mode = isset($_POST["mode"])? $_POST["mode"] : "";
	$quantite = isset($_POST["quantite"])? $_POST["quantite"] : "";

	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS','');

	$database = "ecemarketplace";

	$db_handle=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	$db_found=mysqli_select_db($db_handle, $database);

	

	if (isset($_POST["ajouter"])) {
		if ($db_found) {
			$sql = "SELECT * FROM articles";
			if ($nom != "") {
				$sql .= " WHERE Nom LIKE '%$nom%'";
			}
			$result = mysqli_query($db_handle, $sql);

			if (mysqli_num_rows($result) != 0) {

				echo "L'article est déjà disponible.";
			}else{
				$sql2 ="INSERT INTO articles(Nom, Description, Categorie, Prix, Type, Quantite, ID_Vend)
 					VALUES('$nom', '$des', '$categorie', '$prix', '$mode', '$quantite', '$id')";
				$result2 = mysqli_query($db_handle, $sql2);

				echo "Vous avez ajouté un nouvel article." . "<br>";

			}
		}else {
			echo "Database not found";
		}
	}

	mysqli_close($db_handle);
?>