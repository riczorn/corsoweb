<?php
/**
 * Corso di Cybersecurity
 * Lezione 11
 * Realizzazione di una pagina di login
 * in php e sql
 * 
 * @version	25/3/2024
 * @package Cybersecurity drills
 *
 * @author Riccardo Zorn code@fasterweb.net
 * @copyright (C) 2024 https://fasterweb.net
 * @license GNU/GPL v2 or greater http://www.gnu.org/licenses/gpl-2.0.html
 * 
 * @annotation Lesson 11 Build a login page
 */

 ini_set('display_errors', 1);
 function login() {
    $username = "username";
    $password = "password";
    $databaseName = $username;
// Create connection
    $conn = new mysqli('localhost', $username, $password, $databaseName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return true;
}

if (login()) {
    var_dump( $_GET );
} else {
?>

<html>
  <body>
    <form>
      <input type="text" name="login" placeholder="login">
      <input type="password" name="password" placeholder="password">
      <input type="submit" value="accedi">
    </form>
  </body>
</html>

<?php
}
?>
