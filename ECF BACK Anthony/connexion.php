<?php require("includes/head.php");
require("includes/navbar.php"); ?>
<br><br>

<?php if (isset($_GET['success']) && $_GET['success'] == "inscrit") { ?>
    <p class="success">Vous êtes bien inscrit, vous pouvez vous connecter !</p>
<?php } ?>
<div class="container">
    <form action="actions/connexion_back.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mail</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="validate">Connection</button> <br>
        <a href="inscription.php">Vous n'avez pas de comtpe? Vous inscrire</a>
    </form>
</div>

<?php require("includes/footer.php"); ?>