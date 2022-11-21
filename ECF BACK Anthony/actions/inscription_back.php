<?php
require("co_bdd.php");
if (isset($_POST['validate'])) {
    if (!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password']) && !empty($_POST['password_c'])) {
        $email = $_POST['email'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $password = $_POST['password'];
        $password_c = $_POST['password_c'];

        if ($password == $password_c) {
            $check_if_user_exists = $bdd->prepare('SELECT * FROM users WHERE email = ?');
            $check_if_user_exists->execute([$email]);
            $user = $check_if_user_exists->fetch();
            if (!$user) {
                $insert_user = $bdd->prepare('INSERT INTO users (email, nom, prenom, password) VALUES (?,?,?,?)');
                $insert_user->execute([$email, $nom, $prenom, password_hash($password, PASSWORD_DEFAULT)]);
                header("location: ../connexion.php?success=inscrit");
            } else {
                header("location: ../inscription.php?error=present");
            }
        } else {
            header("location:../inscription.php?error=mdp");
        }
    } else {
        header("location:../inscription.php?error=champs");
    }
}