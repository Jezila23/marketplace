<div class="d-flex flex-row ms-auto me-3 header-boutons-utilisateur">

    <div class="mx-3 header-bouton-utilisateur">
        <a class="d-flex flex-column align-items-center justify-content-center" href="<?php url_profil(); ?>">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 24.25V21.75C24 20.4239 23.4732 19.1521 22.5355 18.2145C21.5978 17.2768 20.3261 16.75 19 16.75H9C7.67392 16.75 6.40215 17.2768 5.46447 18.2145C4.52678 19.1521 4 20.4239 4 21.75V24.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M14 11.75C16.7614 11.75 19 9.51142 19 6.75C19 3.98858 16.7614 1.75 14 1.75C11.2386 1.75 9 3.98858 9 6.75C9 9.51142 11.2386 11.75 14 11.75Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <p class="mb-0">Profil</p>
        </a>
    </div>

    <?php if (isset($_SESSION["acheteur"])) : ?>
        <div class="mx-3 header-bouton-utilisateur">
            <a class="d-flex flex-column align-items-center justify-content-center" href="./panier.php">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.25 27.5C11.9404 27.5 12.5 26.9404 12.5 26.25C12.5 25.5596 11.9404 25 11.25 25C10.5596 25 10 25.5596 10 26.25C10 26.9404 10.5596 27.5 11.25 27.5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M25 28.5C25.6904 28.5 26.25 27.9404 26.25 27.25C26.25 26.5596 25.6904 26 25 26C24.3096 26 23.75 26.5596 23.75 27.25C23.75 27.9404 24.3096 28.5 25 28.5Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1.25 3.25H6.25L9.6 19.9875C9.7143 20.563 10.0274 21.0799 10.4844 21.4479C10.9415 21.8158 11.5134 22.0112 12.1 22H24.25C24.8366 22.0112 25.4085 21.8158 25.8656 21.4479C26.3226 21.0799 26.6357 20.563 26.75 19.9875L28.75 9.5H7.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="mb-0">Panier</p>
            </a>
        </div>
    <?php endif; ?>

    <div class="mx-3 header-bouton-utilisateur">
        <a class="d-flex flex-column align-items-center justify-content-center" href="./deconnexion.php">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.9499 8.29999C24.5229 9.87347 25.594 11.878 26.0278 14.0602C26.4615 16.2424 26.2385 18.5042 25.387 20.5597C24.5354 22.6151 23.0934 24.3719 21.2434 25.6079C19.3935 26.8439 17.2185 27.5036 14.9937 27.5036C12.7688 27.5036 10.5938 26.8439 8.74387 25.6079C6.8939 24.3719 5.45196 22.6151 4.60036 20.5597C3.74877 18.5042 3.52577 16.2424 3.95955 14.0602C4.39334 11.878 5.46443 9.87347 7.03741 8.29999" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15 2.5V15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <p class="mb-0">Se déconnecter</p>
        </a>
    </div>
</div>

<?php
/**
 * Affiche l'url de la page profil de l'utilisateur en fonction de son rôle (Acheteur, Vendeur ou Administrateur)
 *
 * @return void
 */
function url_profil(): void
{
    if(isset($_SESSION["acheteur"])){
        echo "./profilacheteur.php";
    }elseif (isset($_SESSION["vendeur"])) {
        echo "./profilvendeur.php";
    }elseif (isset($_SESSION["administrateur"])) {
        echo "./profiladministrateur.php";
    }
}
?>