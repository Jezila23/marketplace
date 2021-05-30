<?php
$titre = "Mon Panier";
require_once("./include/header.inc.php");
?>


<div class="container">
    <main>
        <div class="row pt-3 g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-start align-items-center mb-3">
                    <img class="d-block" src="/images/cart.png" alt="Mon Panier" width="40" height="40" />
                    <span class="ms-2 text-primary">Mon panier</span>
                    <span class="ms-auto badge bg-primary rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product name</h6>
                        </div>
                        <span class="text-muted">€12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Second product</h6>
                        </div>
                        <span class="text-muted">€8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Third item</h6>
                        </div>
                        <span class="text-muted">€5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Code promo</h6>
                            <small>EXEMPLECODE</small>
                        </div>
                        <span class="text-success">−€0</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (EUR)</span>
                        <strong>€20</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Code promo">
                        <button type="submit" class="btn btn-secondary">Appliquer</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Adresse</h4>
                <form class="needs-validation" novalidate>
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