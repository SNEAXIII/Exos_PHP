<?php
const DB_HOST = "localhost:3306";
const DB_NAME = "aerisbtp";
const DB_USER = "root";
const DB_PASSWORD = "";

function createConnection() : PDO {
    $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
    try {
        $connection = new PDO($dsn,DB_USER,DB_PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $erreur) {
        die("Error : ".$erreur->getMessage());
    }
}