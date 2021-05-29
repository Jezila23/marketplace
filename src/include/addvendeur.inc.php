<?php
	
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
	$pseudo = isset($_POST["nom"])? $_POST["nom"] : "";
	$email = isset($_POST["email"])? $_POST["email"] : "";
	$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";

	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS','');

	$database = "ecemarketplace";

	$db_handle=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	$db_found=mysqli_select_db($db_handle, $database);

	

	if (isset($_POST["add"])) {
		if ($db_found) {
			$sql = "SELECT * FROM vendeur";
			if ($nom != "") {

				$sql .= " WHERE Nom LIKE '%$nom%'";
				if ($prenom != "") {
						$sql .= " AND Prenom LIKE '%$prenom%'";
				}
			}
			$result = mysqli_query($db_handle, $sql);

			if (mysqli_num_rows($result) != 0) {
				echo "Le compte existe déja.";
			}else{
				$sql = "INSERT INTO vendeur(Nom, Prenom, Pseudo, Email, Mdp_Vend)
 					VALUES('$nom', '$prenom', '$pseudo', '$email', '$mdp')";
				$result = mysqli_query($db_handle, $sql);

				echo "Ajout du vendeur réussi" . "<br>";
 
				$sql = "SELECT * FROM vendeur";
				if ($nom != "") {

					$sql .= " WHERE Nom LIKE '%$nom%'";
					if ($prenom != "") {
						$sql .= " AND Prenom LIKE '%$prenom%'";
					}
				}
				$result = mysqli_query($db_handle, $sql);

				while ($data = mysqli_fetch_assoc($result)) {
					echo "Informations que vous avez saisi:" . "<br>";
					echo "Nom: " . $data['Nom'] . "<br>";
					echo "Prénom: " . $data['Prenom'] . "<br>";
					echo "Pseudo: " . $data['Pseudo'] . "<br>";
					echo "Email: " . $data['Email'] . "<br>";
					echo "<br>"."<br>";
				}
			}
		}else {
			echo "Database not found";
		}
	}
	mysqli_close($db_handle);
?>