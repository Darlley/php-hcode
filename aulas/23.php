<?php

$meses = array(
    "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", 
    "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
);

foreach($meses as $index => $mes) {
    $index++;
    echo "mês $index - $mes" . '<br>';
}

?>

<form action="">
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="Enviar">
</form>
<?php

if(isset($_GET)){
    foreach($_GET as $key => $value) {
        echo "<strong>$key</strong>: $value <br>";
        if($key=="nascimento") echo '<hr>';
    }
}
