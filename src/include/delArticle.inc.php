<?php 
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');

$database = "ecemarketplace";

$db_handle=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found=mysqli_select_db($db_handle, $database);

$nom = isset($_POST["nom"])? $_POST["nom"] : "";

if (isset($_POST["supprimer"])) {
    if ($db_found) {
        $sql = "SELECT * FROM articles";
        if ($nom != "") {
            $sql .= " WHERE Nom LIKE '%$nom%'";
        }
        $result = mysqli_query($db_handle, $sql);

        if (mysqli_num_rows($result) != 0) {

            echo "L'article n'exite pas.";
        }else{
            $sql ="DELETE FROM articles WHERE Nom LIKE '%$nom%";
            $result = mysqli_query($db_handle, $sql);

            echo "Vous avez supprimé l'article." . "<br>";

        }
    }else {
        echo "Database not found";
    }
}

mysqli_close($db_handle);
?>