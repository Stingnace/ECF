<?php
session_start();
require("includes/head.php");
require("includes/navbar.php");
require("actions/co_bdd.php");
$get_article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
$get_article->execute([$_GET['id']]);
$article = $get_article->fetch();
?>
<br><br>
<form action="actions/modif_article_back.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="card">
            <div class="card_body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Titre</span>
                    <input type="text" class="form-control" name="titre"
                        value="<?= htmlspecialchars($article['titre']) ?>">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="contenu"
                        id="floatingTextarea"><?= htmlspecialchars($article['titre']) ?></textarea>
                    <label for="floatingTextarea">Contenu</label>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Choisir une image</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>
                <input type="hidden" name="id" value="<?= $article['id'] ?>">
                <button type="submit" class="btn btn-success">Modifier</button>

            </div>
        </div>
    </div>
</form>


<?php require("includes/footer.php"); ?>