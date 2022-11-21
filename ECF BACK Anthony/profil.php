<?php
session_start();
require("includes/head.php");
require("includes/navbar.php");
require("actions/co_bdd.php");
$get_articles_user = $bdd->prepare('SELECT * FROM articles WHERE id_auteur = ?');
$get_articles_user->execute([$_SESSION['id']]);
$articles = $get_articles_user->fetchAll();
?>

<?php if (isset($_GET['success']) && $_GET['success'] == "co") { ?>
<p class="success">Vous êtes bien connecté ! </p>
<?php } ?>

<br><br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Ajouter un article
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="actions/ajout_article_back.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Titre</span>
                        <input type="text" class="form-control" name="titre">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="contenu"></textarea>
                        <label for="floatingTextarea">Contenu</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Choisir une image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Publier</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<br><br>
<h1 class="section">Mes Articles</h1>

<?php if (isset($_GET['success']) && $_GET['success'] == "ajout") { ?>
<p class="success">Article publié ! </p>
<?php } ?>
<?php if (isset($_GET['success']) && $_GET['success'] == "modif") { ?>
<p class="success">Article modifié ! </p>
<?php } ?>
<?php if (isset($_GET['success']) && $_GET['success'] == "delete") { ?>
<p class="success">Article supprimé ! </p>
<?php } ?>


<div class="container cards">
    <?php foreach ($articles as $article) { ?>
    <div class="card" style="width: 18rem;">
        <img src="uploads/<?= $article['image'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($article['titre']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($article['contenu']) ?></p>
            <a href="modif_article.php?id=<?= $article['id'] ?>" class="btn btn-warning">Modifier l'article</a> <br>
            <br>
            <a href="actions/supprimer_article_back.php?id=<?= $article['id'] ?>" class="btn btn-danger">Supprimer
                l'article</a>
        </div>
    </div>
    <?php } ?>
</div>



<?php require("includes/footer.php"); ?>