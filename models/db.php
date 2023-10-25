<?php

// ^ Toutes les pages qui nécessitent une connexion avec la base de données feront appelle à la fonction getConnection() et non plus à un require_once vers la page database.php. Cela permet d'avoir un code beaucoup plus court qu'auparavant

// ! A ne pas oublier - changer le nom de la base de données

// * Informations nécessaire à la connexion d'une base de données

// 1. data source name dsn - SQL
// 2. Hôte - localhost
// 3. Nom de la base de données
// 4.Charset - UTF8


/**
 * Permet de récupérer l'instance de la connexion à la base de données
 * @return PDO Instance de PDO
 */
function getConnection(): PDO
{
    // DSN = Data Source Name
    $server = "mysql";
    $host = "localhost";
    $dbname = "kimiaproject";
    $charset = "utf8";

    // Pour accéder à un serveur MySQL avec commme hôte le localhost d'une base de donnée du nom kimiaproject de charset utf8 dont l'username est root et le mot de passe null.
    $dsn = "$server:host=$host;dbname=$dbname;charset=$charset";
    $username = "root";
    $pwd = "";

    // * Si la tentative de connexion à la base de données réussi alors
    try {
        // L'accès à la base de données se fait en instanciant un objet de la classe PDO (new PDO)
        $database = new PDO($dsn, $username, $pwd);

        // Attribution du mode d'exception par défaut.
        // PDO::ATTR_ERRMODE : Le mode pour reporter les erreurs de PDO. qui prendra la forme d'une PDO::ERRMODE_EXCEPTION
        // PDO::ERRMODE_EXCEPTION : Représente une erreur émise par PDO.
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // On retourne la variable $database si la tentative de connexion est un succès
        return $database;

        // * Sinon PDO lancera une exception PDOException et y définit les propriétés afin de représenter le code d'erreur et les informations complémentaires.

        // $e contient le PDOException.
    } catch (PDOException $e) {
        // on utilise la fonction getMessage() pour retourner le message de l'exception, sous la forme d'une chaîne de caractères.
        die("Erreur lors de la tentative de connexion avec la base de données : " . $e->getMessage());
    }
}
