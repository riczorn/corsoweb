<?php
ini_set('display_errors', 1);
function connect() {
    // sostituisci qui sotto i tuoi dati
    $databasename = "nome_del_database";
    $db_login = "nome_utente_database";
    $db_password = "password_database";

    // Crea la connessione al db
    $mysqli = new mysqli('localhost', $db_login, $db_password, $databasename);
    if ($mysqli->connect_error) {
        // in caso di errore, lo mostro e termino il processo.
        die("Connection failed: " . $mysqli->connect_error);
    }
    // tutto ok, restituisco la connessione al db indietro
    return $mysqli;
}
