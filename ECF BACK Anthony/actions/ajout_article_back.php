<?php
session_start();
require("co_bdd.php");


if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {
    if (array_key_exists('image', $_FILES)) {
        if ($_FILES['image']['error'] == 0) {
            if (in_array(mime_content_type($_FILES['image']['tmp_name']), ['image/png', 'image/jpeg'])) {
                if ($_FILES['image']['size'] <= 3000000) {
                    $imageFileName = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . $imageFileName);
                }
            }
        }
    }
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $ajouter_article_user = $bdd->prepare('INSERT INTO articles (id_auteur, nom_auteur, prenom_auteur, image, titre, contenu) VALUES (?,?,?,?,?,?)');
    $ajouter_article_user->execute([
        $_SESSION['id'],
        $_SESSION['Nom'],
        $_SESSION['Prenom'],
        $imageFileName,
        $titre,
        $contenu
    ]);
    header("location: ../profil.php?success=ajout");
}
