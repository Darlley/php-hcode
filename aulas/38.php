<?php // Date() e Time()

echo date("d/m/Y - H:i:s") . '<br>';
echo time() . '<br>';

// $ts = strtotime("2023-02-03");
$ts = strtotime("+1 week");
echo date("l: d/m/Y", $ts);