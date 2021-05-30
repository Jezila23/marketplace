<?php 
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');

$database = "ecemarketplace";

$db_handle=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found=mysqli_select_db($db_handle, $database);

$nom = isset($_POST["nom"])? $_POST["nom"] : "";
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="3; index.php">
</head>
<body>
<?php
if (isset($_POST["supprimer"])) {
    if ($db_found) {
        $sql = "SELECT * FROM articles";
        if ($nom != "") {
            $sql .= " WHERE Nom LIKE '%$nom%'";
        }
        $result = mysqli_query($db_handle, $sql);

        if (mysqli_num_rows($result) != 0) {

            echo "L'article n'exite pas.";
            echo "Vous serez redirigé vers la page d'accueil dans 3 secondes";
        }else{
            $sql ="DELETE FROM articles WHERE Nom LIKE '%$nom%";
            $result = mysqli_query($db_handle, $sql);

            echo "Vous avez supprimé l'article." . "<br>";
            echo "Vous serez redirigé vers la page d'accueil dans 3 secondes";

        }
    }else {
        echo "Database not found";
    }
}

mysqli_close($db_handle);
?>
</body>
</html>