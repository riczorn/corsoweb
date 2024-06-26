<?php
ini_set('display_errors', 1);
function connect() {
    $databasename = "ce";
    $db_login = "faster";
    $db_password = "(oldLlama55";

// Create connection
    $mysqli = new mysqli('localhost', $db_login, $db_password, $databasename);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    return $mysqli;
}
