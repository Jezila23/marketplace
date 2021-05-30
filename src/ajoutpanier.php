<?php
require_once("./include/fonctions.inc.php");
require_once("./include/mysql.conf.inc.php");
session_start();
verifier_session("acheteur");

$id = isset($_GET["id"]) ? $_GET["id"] : "";
$qte = isset($_GET["quantite"]) ? $_GET["quantite"] : 0;
$nom =  isset($_GET["nom"]) ? $_GET["nom"] : "";
$desc =  isset($_GET["desc"]) ? $_GET["desc"] : "";
$prix =  isset($_GET["prix"]) ? $_GET["prix"] : 0;

if (!(((($id && $qte) && ($nom && $desc)) && ($prix)))) {
    //Si les informations nécessaires au traitement ne sont pas fournies
    //Rédirection vers la page d'accueil.
    header('Location:./index.php');
} else {
    //On stocke l'article sélectionné et sa qte dans la session
    if (!isset($_SESSION["acheteur"]["panier"])) {
        $_SESSION["acheteur"]["panier"] = array();
    }
    if (isset($_SESSION["acheteur"]["panier"][$id])) {
        //Mettre à jour la quantité si l'article est déjà dans le panier
        $_SESSION["acheteur"]["panier"][$id]["qte"] = $_SESSION["acheteur"]["panier"][$id]["qte"] + $qte;
    } else {
        //Insérer les informations sur l'article ajouté au panier sinon
        $_SESSION["acheteur"]["panier"][$id] = array("id" => $id, "nom" => $nom, "prix" => $prix, "desc" => $desc, "qte" => $qte);
    }
    header('Location:./toutparcourir.php');
}
