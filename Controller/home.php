<?php

/**
 * This Controller Handle the home page which shows all the users
 *
 */
// appel de connexion
require 'Model/connexion.php';

// apel du model user
require 'Model/users.php';
require 'Model/articles.php';

//utilisation du model
$users = getUsers();
//$users = getUsersAndArticle();
$articles = getArticles();
//affichage de la vue avec binding de users
require 'View/homePage.php';
