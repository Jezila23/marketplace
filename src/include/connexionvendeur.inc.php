<?php

	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS','');

	$email = isset($_POST["NomUtilisateur"])? $_POST["NomUtilisateur"] : "";
	$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

	$database ="ecemarketplace";

	$db_handle=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	$db_found=mysqli_select_db($db_handle, $database);

	if (isset($_POST["connexion"])) {
		if ($db_found) {
			$sql = "SELECT * FROM vendeur";
			if ($email != "") {
				$sql .= " WHERE Email LIKE '%$email%'";
				if ($mdp != "") {
					$sql .= " AND Mdp_Vend LIKE '%$mdp%'";
				}
			}
			$result=mysqli_query($db_handle, $sql);
			if (mysqli_num_rows($result) != 0) {

				echo "Succès conexion" . "<br>";
				header('Location: espaces.php');
			}else{
				header('Location: connex.php');
				echo "Votre compte ou mot de passe est incorrect."."<br>";
			}
		}
	}else{
		echo "Database not found";
	}
	mysqli_close($db_handle);
?>