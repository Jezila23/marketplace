<?php
require_once("./include/mysql.conf.inc.php"); // permet de se connecter à la BDD

//Vérification des données du formulaire de connexion
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$mdp = isset($_POST["mdp"]) ? $_POST["mdp"] : "";

if ($email && $mdp) {
    $sql = "SELECT * FROM vendeur";
    $sql .= " WHERE Email LIKE '%$email%'";
    $sql .= " AND Mdp_Vend LIKE '%$mdp%'";
    //La requête est effectuée à l'aide d'une fonction utilitaire
    $res = query_bdd($sql);
    //On s'attend à ce que la requête renvoie au maximun 1 ligne
    //Les données obtenues sont stockées dans un tableau associatif
    $infos = mysqli_fetch_assoc($res);

    if (!mysqli_num_rows($res)) {
        header('Location:./seconnecter.php?role=vendeur');
    } else {
        //On créée une session pour le vendeur
        session_start();
        //On y stocke les informations obtenues dans la session
        unset($_SESSION["vendeur"]);
        $_SESSION["vendeur"] = $infos;
        //On redirige le vendeur connecté vers la page d'accueil
        header('Location:./index.php');
    }
}else{
    header('Location:./seconnecter.php?role=vendeur');
}
