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
include (__DIR__ . '/config.php');

function login() {
    $mysqli = connect();
    $sql = "SELECT * from `test_users`";
    echo "$sql <br>";

    $result = $mysqli->query($sql);
    if (!$result) {
        die("DB Error " . $mysqli->error);
    }
    echo "Query $sql eseguita<br>";
    $row = $result->fetch_row();
    echo "<pre>";
    var_dump($row);
    echo "</pre>";


    $mysqli->close();
    return false;
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
