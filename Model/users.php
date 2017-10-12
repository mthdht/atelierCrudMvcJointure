<?php

//======================================================================
// Model Users, communicate with the bdd
//======================================================================


/**
 * Add an user into bdd
 *
 * @param {string} $nom
 * @param {string} $password
 * @param {int} $age
 * @returns {string} 
 */
function addUser($nom, $password, $age)
{
    global $bdd;

    $request = $bdd->prepare('INSERT INTO users (nom, password, age) VALUES(:nom, :password, :age)');
    $request->execute(array(
	"nom" => $nom,
	"password" => $password,
	"age" => $age
    ));
    // bonus: we return an value indicate the user is added
    return "users Add";
}

/**
 * get the user identified by the id
 * @param {int} id
 * @returns {array} user
 */
function getUser($id)
{
    global $bdd;
    $request = $bdd->prepare('SELECT * FROM users WHERE id = :id');
    $request->execute(array(
	"id" => $id
    ));
    $user = $request->fetch();
    return $user;
}

/**
 * get all user in database
 *
 * @param {int} id
 * @returns {array} users 
 */
function getUsers()
{
    global $bdd;
    $request = $bdd->query('SELECT * FROM users');
    $users = $request->fetchAll();
    return $users;   
}

/**
 * get all user in database
 *
 * @param {int} id
 * @returns {array} users 
 */
function getUsersAndArticle()
{
    global $bdd;
    $request = $bdd->query('SELECT * FROM users INNER JOIN articles ON users.id = articles.user_id');
    $users = $request->fetchAll();
    return $users;   
}

/**
 * delete the user of database.
 *
 * @param {int} id.
 */
function deleteUser($id)
{
    global $bdd;
    $request = $bdd->prepare('DELETE FROM users WHERE id = :id');
    $request->execute(array(
	'id' => $id
    ));
}

function updateUser($id, $nom, $password, $age)
{
    global $bdd;

    $request = $bdd->prepare('UPDATE users SET nom = :nom, password = :password, age = :age WHERE id = :id');
    $request->execute(array(
	'nom' => $nom,
	'password' => $password,
	'age' => $age,
	'id' => $id
    ));
    //bonus return value indicate the user is update
    return 'user updated';
}
