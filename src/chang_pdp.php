<!DOCTYPE html>
<html>
<head>
	<title>changement pdp</title>
</head>
<body>
	<?php
		$url = isset($_POST["pdp"])? $_POST["pdp"] : "";
		$pseudo = isset($_GET["pseudo"])? $_GET["pseudo"] : "";
	?>
	<form method="post">
		Entrez l'url de votre nouvelle photo de profil
		<input type="text" name="pdp"><input type="submit" name="Choisir">
	</form>

	<?php
		if (!$url==""){
			$database = "ecemarketplace";
			$db_handle = mysqli_connect('localhost','root','');
			$db_found = mysqli_select_db($db_handle, $database);
			$sql = "UPDATE vendeur SET Img_Vendeur = '$url' WHERE Pseudo ='$pseudo' ";
			mysqli_query($db_handle, $sql);
		}else{
		}
	?>
</body>
</html>