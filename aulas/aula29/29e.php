<?php

require_once('config.php');

echo session_save_path() . '<br>';

echo session_status() . ' - ';

switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas." . "<br>";
        break;
    case PHP_SESSION_NONE:
        echo "As sessões estão habilitadas, mas nenhuma existe." . "<br>";
        break;
    case PHP_SESSION_ACTIVE:
        echo "As sessões estão habilitadas, e uma existe." . "<br>";
        break;
}