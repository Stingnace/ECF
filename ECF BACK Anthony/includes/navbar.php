<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ECF2</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>

                <?php if (isset($_SESSION) && !empty($_SESSION)) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="actions/deconnexion.php">deconnexion</a>
                </li>

                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="connexion.php">Connexion/inscription</a>
                </li>
                <?php } ?>

            </ul>

        </div>
    </div>
</nav>