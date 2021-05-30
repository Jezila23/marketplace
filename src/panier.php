<?php
require_once("./include/fonctions.inc.php");
session_start();
verifier_session("acheteur"); //Les utilisateurs non connectés n'accèdent pas au panier
$titre = "Mon Panier";
$bootstrap = true;
$sessionstart = false; //Pas besoin d'appeler session_start() une deuxième fois dans le fichier header.inc.php
require_once("./include/header.inc.php");
?>

<div class="container">
    <main>
        <div class="row pt-3 g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <?php afficher_panier() ?>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Adresse</h4>
                <form class="needs-validation" novalidate action="./paiement.php" method="POST">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Un prénom valide est requis.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Un nom valide est requis
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="address" placeholder="123 rue Michel" required>
                            <div class="invalid-feedback">
                                Merci de saisir votre adresse de livraison.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Adresse 2 <span class="text-muted">(Optionnel)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">Pays</label>
                            <select class="form-select" id="country" required>
                                <option value="">Choisissez...</option>
                                <option>France</option>
                            </select>
                            <div class="invalid-feedback">
                                Merci de sélectionner un pays valide.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">Code postal</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Un code postal est requis.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Paiement</h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="visa" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="visa">Visa</label>
                        </div>
                        <div class="form-check">
                            <input id="mastercard" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="mastercard">MasterCard</label>
                        </div>
                        <div class="form-check">
                            <input id="american" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="american">American Express</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="mb-3 w-100 btn btn-primary btn-lg" type="submit">Payer</button>
                </form>
            </div>
        </div>
    </main>
</div>

<?php require_once("./include/footer.inc.php"); ?>