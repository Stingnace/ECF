<?php
session_start();
require("includes/head.php");
require("includes/navbar.php");
require("actions/co_bdd.php");
$get_all_articles = $bdd->query("SELECT * FROM articles");
$articles = $get_all_articles->fetchAll();
?>
<br><br>

<h1 class="section"> Tous les articles du site</h1>

<div class="container cards">
    <?php foreach ($articles as $article) { ?>
    <div class="card" style="width: 18rem;">
        <img src="uploads/<?= $article['image'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($article['titre']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($article['contenu']) ?></p>
            <p class="card-text auteur"> publier par : <?= htmlspecialchars($article['prenom_auteur']) ?> </p>
        </div>
    </div>
    <?php } ?>
</div>

<?php require("includes/footer.php"); ?>