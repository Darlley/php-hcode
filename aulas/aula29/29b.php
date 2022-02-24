<?php sleep(2);

require_once('config.php'); 

echo $_SESSION['nome'];

// session_unset($_SESSION['nome']);
session_unset();
// session_destroy();

// o session_start() fica no arquivo configuration.php