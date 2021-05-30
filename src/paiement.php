<?php
$titre = "Paiement";
require_once ("./include/header.inc.php");

?>
<style type="text/css">
body{
    background-color: #EDF6F9;
}
</style>
<body>
    <center>
    <h1>Paiement</h1>
    <form action="traitement.php" method="post">
        <table border="2">
            <tr>
                <td>Nom du propriétaire :</td>
                <td>
                    <input type="text" name="nom_prop">
                </td>
            </tr>

            <tr>
                <td>Numéro de carte :</td>
                <td>
                    <input type="text" name="numero_carte">
                </td>
            </tr>

            <tr>
                <td>Date d'expiration :</td>
                <td>
                    <input type="date" name="date_exp">
                </td>
            </tr>

            <tr>
                <td>Code de sécurité :</td>
                <td>
                    <input type="text" name="code">
                </td>
            </tr>
        </table>
        <br/>
        <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="paiement" value="PAYER" class="monBouton">
                </td>
        </tr>
    </form>
    </center>
</body>

<?php

require_once ("./include/footer.inc.php");

?>