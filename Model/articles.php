<?php

//======================================================================
// Model Article, communicate with the bdd
//======================================================================


/**
 * Add an article into bdd
 *
 * @param {string} $nom
 * @param {string} $password
 * @param {int} $age
 * @returns {string} 
 */
function addArticle($titre, $description, $date, $user)
{
    global $bdd;

    $request = $bdd->prepare('INSERT INTO articles (titre, description, date, user_id) VALUES(:titre, :description, :date, :user_id)');
    $request->execute(array(
	"titre" => $titre,
	"description" => $description,
	"date" => $date,
	"user_id" => $user
    ));
    // bonus: we return an value indicate the user is added
    return "article Added";
}

/**
 * get the user identified by the id
 * @param {int} id
 * @returns {array} user
 */
function getArticle($id)
{
    global $bdd;
    $request = $bdd->prepare('SELECT * FROM articles WHERE id = :id');
    $request->execute(array(
	"id" => $id
    ));
    $article = $request->fetch();
    return $article;
}

/**
 * get the articles belong to the user
 * @param {int} user
 * @returns {array} articles
 */
function getArticlesByUser($user)
{
    global $bdd;
    $request = $bdd->prepare('SELECT * FROM articles WHERE user_id = :user_id');
    $request->execute(array(
	"user_id" => $user
    ));
    $article = $request->fetchAll();
    return $article;
}

/**
 * get all user in database
 *
 * @param {int} id
 * @returns {array} users 
 */
function getArticles()
{
    global $bdd;
    $request = $bdd->query('SELECT * FROM articles');
    $articles = $request->fetchAll();
    return $articles;   
}

/**
 * delete the user of database.
 *
 * @param {int} id.
 */
function deleteArticle($id)
{
    global $bdd;
    $request = $bdd->prepare('DELETE FROM articles WHERE id = :id');
    $request->execute(array(
	'id' => $id
    ));
}

function updateArticle($id, $titre, $description, $date)
{
    global $bdd;

    $request = $bdd->prepare('UPDATE articles SET titre = :titre, description = :description, date = :date WHERE id = :id');
    $request->execute(array(
	'titre' => $titre,
	'description' => $description,
	'date' => $date,
	'id' => $id
    ));
    //bonus return value indicate the user is update
    return 'user updated';
}
