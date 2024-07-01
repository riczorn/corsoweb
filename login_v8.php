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

// Sposto l'html sopra, così l'HEAD è già inviato quando avviene il login
?>

<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body class="cols-2">
    <div class="login">
      <div class="header">
        <p>Login sicuro</p>
      </div>
      <div class="main">
        <form method="POST">
          <input type="text" name="login" placeholder="login" value="<?php echo @$_POST['login']; ?>">
          <input type="password" name="password" placeholder="password" value="<?php echo @$_POST['password']; ?>">
          <input type="submit" value="accedi">
        </form>
      </div>
    </div>
    <div class="result">
<?php

function login() {
    if (empty($_POST['login'])) {
      return false;
    }
    
    $mysqli = connect();

    $login = $_POST['login'];
    $login_safe = $mysqli->real_escape_string($login);
    $password = @$_POST['password'];
    $password_safe = $mysqli->real_escape_string($password);
    
    $sql = "
        SELECT * FROM `test_users`
        WHERE login='" .
        $login_safe .
        "' AND password='" .
        $password_safe .
        "'";
    // echo "<pre>$sql</pre>";
    $result = $mysqli->query($sql);
    if (!$result) {
        die("DB Error " . $sql . "; "  . $mysqli->error);
    }
    $row = $result->fetch_row();
    $mysqli->close();

    if ($row) {
        echo "<h3>Welcome, $login </h3>";
        echo "<img class='right' src='img/user.webp'>";
        echo "<pre class='code'>$sql</pre>";
        return true;
    } else {
        echo "<h3 class='error'>$login not found or wrong password</h3>";
        echo "<img class='right' src='img/lock.webp'><br>";
        echo "<pre class='code'>$sql</pre>";
        return false;
    }
}

login();
?>

    </div>
  </body>
</html>
