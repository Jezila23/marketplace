<style>
body{
    background-color: #EDF6F9;
}
</style>
<?php
$titre = "Traitement";
include('./include/header.inc.php');

// vérifions que le formulaire de paiement n'est pas vide

	// déclaration des variables 
	$nom_proprietaire = isset($_POST["nom_prop"])? $_POST["nom_prop"] : "";

	$numero_carte = isset($_POST["numero_carte"])? $_POST["numero_carte"] : "";

	$date_exp = isset($_POST["date_exp"])? $_POST["date_exp"] : "";

	$code = isset($_POST["code"])? $_POST["code"] : "";

	$erreur = "";

    // si le bouton payer est cliqué
    if(isset($_POST["paiement"])){

	if($nom_proprietaire == ""){
		$erreur .= "Le champ Nom du propriétaire est vide. <br>";
	}

	if($numero_carte == ""){
		$erreur .= "Le champ Numéro de carte est vide. <br>";
	}

	if($date_exp == ""){
		$erreur .= "Le champ Date d'expiration est vide. <br>";
	}

	if($code == ""){
		$erreur .= "Le champ code de sécurité est vide. <br>";
	}

	if ($erreur == "") {
		echo "Formulaire valide.";
	} else{
		echo "Erreur:<br>";
		echo "$erreur";
	}
    }

require_once("./include/footer.inc.php");
?>