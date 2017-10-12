<?php

/**
 * This Controller Handle the user page which shows the users by id
 *
 */



// appel de connexion
require 'Model/connexion.php';

// apel du model user
require 'Model/users.php';


if (isset($_POST['nom']) && isset($_POST['age']) && isset($_POST['password']) && isset($_GET['id'])) {
    updateUser($_GET['id'], $_POST['nom'], $_POST['password'], $_POST['age']);
}

if (isset($_GET['id'])) {
    
    //utilisation du model
    $user = getUser($_GET['id']);

    //affichage de la vue avec binding de users
    require 'View/user.php';
} else echo 'aucun user selectioné dans l url';
