<?php
require("co_bdd.php");

if ($_FILES['image']['size'] <= 3000000) {
    $imageFileName = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . $imageFileName);
    $modif_article = $bdd->prepare('UPDATE articles SET image=?,  titre=?, contenu=? WHERE id= ?');
    $modif_article->execute([$imageFileName, $_POST['titre'], $_POST['contenu'], $_POST['id']]);
    header("location: ../profil.php?success=modif");
}