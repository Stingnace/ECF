<?php require("co_bdd.php");
session_start();
if (isset($_POST['validate'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $check_if_user_exists = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $check_if_user_exists->execute([$email]);
        $user = $check_if_user_exists->fetch();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['Prenom'] = $user['Prenom'];
                $_SESSION['Nom'] = $user['Nom'];
                $_SESSION['id'] = $user['id'];
                header("location: ../profil.php?success=co");
            } else {
                header("location: ../connexion.php?error=mdp");
            }
        } else {
            header("location: ../connexion.php?error=absent");
        }
    } else {
        header("location: ../connexion.php?error=champs");
    }
}
