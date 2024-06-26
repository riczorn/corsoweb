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

    $login = $_GET['login'];
    $password = $_GET['password'];

    $sql = "
        SELECT * FROM `test_users`
        WHERE login='" .
        $login .
        "' AND password='" .
        $password .
        "'";

    echo "<pre>";
    var_dump($sql);
    echo "</pre><hr>";

    $result = $mysqli->query($sql);
    if (!$result) {
        die("DB Error " . $mysqli->error);
    }
    $row = $result->fetch_row();

    if ($row) {
        echo "<h3>Welcome, $login </h3>";
        echo "<pre>";
        var_dump($row);
        echo "</pre><hr>";
    } else {
        echo "$login Not found";
    }
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
      <input type="text" name="login" placeholder="login" value="<?php echo $_GET['login']; ?>">
      <input type="password" name="password" placeholder="password" value="<?php echo $_GET['password']; ?>">
      <input type="submit" value="accedi">
    </form>
  </body>
</html>

<?php
}
?>
