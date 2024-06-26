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
    if (empty($_GET['login'])) {
      return false;
    }
    
    $mysqli = connect();

    // Prendo il parametro login inviato dalla form html:
    $login = $_GET['login'];
    
    // Prendo la password; grazie al "@" non scriverà una notice se non c'è la password.
    $password = @$_GET['password'];
    
    $sql = "
        SELECT * FROM `test_users`
        WHERE login='$login' AND password='$password'";
    // echo scrive sulla pagina;
    // <pre> significa preformatted ed è un tag per il codice.
    echo "<pre>$sql</pre>";
    $result = $mysqli->query($sql);
    if (!$result) {
        die("DB Error " . $mysqli->error);
    }
    $row = $result->fetch_row();
    $mysqli->close();

    if ($row) {
        echo "<h3>Welcome, $login </h3>";
        echo "<img class='right' src='img/user.webp'>";
        return true;
    } else {
        echo "<h3 class='error'>$login not found or wrong password</h3>";
        echo "<img class='right' src='img/lock.webp'>";
        return true;
    }

    
}

if (login()) {
    var_dump( $_GET );
} 
?>

<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <form>
      <input type="text" name="login" placeholder="login" value="<?php echo @$_GET['login']; ?>">
      <input type="password" name="password" placeholder="password" value="<?php echo @$_GET['password']; ?>">
      <input type="submit" value="accedi">
    </form>
  </body>
</html>

