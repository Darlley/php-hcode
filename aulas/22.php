<?php // For (Laços de repetição)

for($i = 0; $i < 100; $i+=5){
    if($i >= 20 & $i <= 80){
        echo $i . '<br>';
        continue;
    }

    if($if >= 90) break;
}

echo "<select>";

for($i=date("Y"); $i > date("Y")-100; $i--){
    echo "<option value='$i'>$i<option>";
}

echo "</select>";