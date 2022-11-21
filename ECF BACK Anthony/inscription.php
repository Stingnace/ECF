<?php require("includes/head.php");
require("includes/navbar.php"); ?>
<br><br>


<?php if (isset($_GET['error']) && $_GET['error'] == "champs") { ?>
    <p class="error">Veuillez remplir tous les champs</p>
<?php } ?>
<?php if (isset($_GET['error']) && $_GET['error'] == "mdp") { ?>
    <p class="error">Veuillez vérifier votre mot de passe</p>
<?php } ?>
<?php if (isset($_GET['error']) && $_GET['error'] == "present") { ?>
    <p class="error">Vous êtes déjà inscrit</p>
<?php } ?>
<div class="container">
    <form action="actions/inscription_back.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mail</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Vérifier votre mot de passe</label>
            <input type="password" class="form-control" name="password_c">
        </div>

        <button type="submit" class="btn btn-primary" name="validate">Inscription</button> <br>

    </form>
</div>

<?php require("includes/footer.php"); ?>