<?php
session_start();
//On détruit la variable de session de l'utilisateur
unset($_SESSION["acheteur"], $_SESSION["administrateur"], $_SESSION["vendeur"]);
session_destroy();
header('Location:./index.php');
