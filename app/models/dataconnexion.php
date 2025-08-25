<?php
require "../config/database.php";
// echo DB_NAME;
function connection_db(){
    $db_name = DB_NAME;
    $db_host = DB_HOST;
    $db_username = DB_USERNAME;
    $db_password = DB_PASSWORD;

    try {
        $db = new PDO("mysql:host=$db_host;dbname=$db_name", "$db_username", "$db_password");
        $db->exec("SET NAMES utf8mb4");
    } catch (PDOException $e) {
        die("connexio failed: " . $e->getMessage());
    }
    return $db;
}
?>