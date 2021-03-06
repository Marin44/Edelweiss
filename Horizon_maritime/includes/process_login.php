<?php
/**
 * Created by PhpStorm.
 * User: mariedadomo
 * Date: 13/11/2017
 * Time: 10:18
 */

include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start(); // Notre façon personnalisée de démarrer la session PHP

if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // Le mot de passe hashé.

    if (login($email, $password, $mysqli) == true) {
        // Connecté
        header('Location: ../protected_page.php');
    } else {
        // Pas connecté
        header('Location: ../index.php?error=1');
    }
} else {
    // Les variables POST correctes n’ont pas été envoyées à cette page
    echo 'Invalid Request';
}