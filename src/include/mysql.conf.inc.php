<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');

/**
 * Effectue la requête MySQL passée en paramêtre avec les informations de connexions fournies
 *
 * @param string $server Adresse ou nom de l'hôte
 * @param string $user
 * @param string $pass
 * @param string $query
 * @return mixed
 */
function query_bdd(string $query, string  $server = DB_SERVER, string $user = DB_USER, string $pass = DB_PASS): mysqli_result
{
    $link = mysqli_connect($server, $user, $pass, "ecemarketplace");
    if (mysqli_connect_errno()) {
        echo "Échec lors de la connexion à MySQL : " . mysqli_connect_error();
        exit(1);
    } else {
        $res = mysqli_query($link, $query);
        if (!$res) {
            echo "Échec lors de l'exécution de la requête MySQL";
            exit(1);
        }
        mysqli_close($link);
        return $res;
    }
}