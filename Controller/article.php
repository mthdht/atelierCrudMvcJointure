<?php

/**
 * This Controller Handle the article page which shows the articles by id
 *
 */



// appel de connexion
require 'Model/connexion.php';

// apel du model user
require 'Model/articles.php';


if (isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['date']) && isset($_GET['id'])) {
    // update an article
    updateArticle($_GET['id'], $_POST['titre'], $_POST['description'], $_POST['date']);
    header("Location: article.php?id=".$_GET['id']);
} else if (isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['date'])) {
    // create an article
    addArticle($_POST['titre'], $_POST['description'], $_POST['date'], $_POST['user_id']);
    header("Location: index.php");
} else if ($_POST['delete']) {
    deleteArticle($_POST['delete']);
    header("Location: index.php");
}

if (isset($_GET['id'])) {
    
    //utilisation du model
    $article = getArticle($_GET['id']);

    //affichage de la vue avec binding de users
    require 'View/article.php';
} else echo 'aucun article selectioné dans l url';
