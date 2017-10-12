<?php

/**
 * This Controller Handle the user page which shows the users by id
 *
 */



// appel de connexion
require 'Model/connexion.php';

// apel du model user
require 'Model/users.php';

//require 'Model/articles.php';


if (isset($_POST['nom']) && isset($_POST['age']) && isset($_POST['password']) && isset($_GET['id'])) {
    // update an user
    updateUser($_GET['id'], $_POST['nom'], $_POST['password'], $_POST['age']);
    header("Location: user.php?id=".$_GET['id']);
} else if (isset($_POST['nom']) && isset($_POST['age']) && isset($_POST['password'])) {
    // create an user 
    addUser($_POST['nom'], $_POST['password'], $_POST['age']);
    header("Location: index.php");
} else if (isset($_POST['delete'])) {
    deleteUser($_POST['delete']);
    header("Location: index.php");
}



if (isset($_GET['id'])) {
    
    //utilisation du model
    $user = getUser($_GET['id']);

    //$articles = getArticlesByUser($user['id']);

    //affichage de la vue avec binding de users
    require 'View/user.php';
} else echo 'aucun user selectioné dans l url';
