<?php

require_once("vendor/autoload.php");

use Rain\Tpl;

$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );

$tpl = new Tpl;

$tpl->assign( "name", "Darlley" );
$tpl->assign( "sobrenome", "Brasil de Brito Furtado" );
$tpl->assign( "version", PHP_VERSION );

//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

$tpl->draw( "index" );