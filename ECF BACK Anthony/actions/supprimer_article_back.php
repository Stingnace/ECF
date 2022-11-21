<?php
require("co_bdd.php");
$delete_article = $bdd->prepare('DELETE FROM articles WHERE id = ?');
$delete_article->execute([$_GET['id']]);
header("location: ../profil.php?success=delete");