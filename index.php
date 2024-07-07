<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
<body>
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
<li><a href="login_v8.php">Login sicuro</a></li>
<li><a href="login_v8.php">Imposta i cookies login e authcode</a></li>
</ol>

<?php
include (__DIR__ . '/config.php');
$mysqli = connect();
  if (empty($_GET['category'])) {
    $sql = "SELECT DISTINCT category FROM `products`";
    $result = $mysqli->query($sql);
    if (!$result) {
        die("Query Error " . $sql . "; "  . $mysqli->error);
    }
    echo "<h2>Categorie</h2> <ul class='cats'>";
    while ($row = $result->fetch_row()) {
      $a = "<a href='?category=" . trim($row[0]) . "'>$row[0]</a>";
      echo "<li>$a</li>";
    }
    echo "</ul>";
  } else {

    $cat = $_GET['category'];
    $sql = "SELECT * FROM `products` where category='$cat'";
    $result = $mysqli->query($sql);
    if (!$result) {
        die("Query2 Error " . $sql . "; "  . $mysqli->error);
    }
    
    echo "<h2>Prodotti</h2>
          <pre>$sql</pre>
          <p><a href='?'>View all</a></p> <ul class='products'>";
    

    while ($obj = $result->fetch_object()) {
      
      echo "<li>
        <div class='prod_main'>
          <h3 class='name'>$obj->name</h3>  
          <p class='cat'>$obj->category</p>
          <p>$obj->description</p>
        </div>  
        <img class='detail' src='$obj->image'>        
      </li>";
      // echo "<li>" . json_encode($obj) . "</li>";
      //echo "<div>";
    }
    
    echo "</ul>";
  }
  
  $mysqli->close();
?>  
</body>