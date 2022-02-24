<?php

// session_id('3ggdpajrvoh9v5rk50b7fk015h'); // Recuperar sessão

require_once('config.php');

session_regenerate_id();
// É recomendado a página de login chame um arquivo de validação.php
// o session_regenerate_id() ficara em um arquivo de validação próprio

echo session_id();

// Cuidade com o Session Hijacking
var_dump($_SESSION);
// Com o ID da sessão do usuário é capaz de ver os valares da variavel de sessão
// O HTTPS encripta o ID da Sessão
