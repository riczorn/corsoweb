<html>
<h1>Corso di Cybersecurity</h1>

<h2>Lezione 11: App di Login</h2>
<p>
  Costruisci una semplice e funzionale pagina di login.
</p>
<ol>
<li><a href="login_v1.html">Form di Login</a></li>
<li><a href="login_v2.php">PHP: Funzione di login(); prova a cambiare il valore restituito dalla funzione login a riga 19</a></li>
<li><a href="login_v3.php">Connessione al DB (imposta le tue credenziali in login_v3.php)</a></li>
<li><a href="login_v4.php">Interrogazione DB (imposta le tue credenziali in config.php)</a></li>
<li><a href="login_v5.php">Lettura DB e confronto con input</a></li>
<li><a href="login_v6.php">Messaggio di login e foglio di stile CSS</a></li>
<li><a href="login_v7.php">Login più bello</a></li>
<li><a href="login_v8.php"></a></li>
</ol>

<h2>Utenti registrati</h2>
<ul>
<?php
include (__DIR__ . '/config.php');
$mysqli = connect();
  if (empty($_GET)) {
    $sql = "SELECT DISTINCT category FROM `products`";
  }
  $result = $mysqli->query($sql);
  if (!$result) {
      die("Query Error " . $sql . "; "  . $mysqli->error);
  }
  while ($row = $result->fetch_row()) {
    echo "<li>" . json_encode($row) . "</li>";
  }

  $mysqli->close();
?>  
</ul>