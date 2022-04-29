<?php

$image = imagecreatefrompng("php.png");

$titleColor = imagecolorallocate($image, 0,0,0);
$gray = imagecolorallocate($image, 100,100,100);

imagestring($image, 5, 225, 50, "PHP Logo", $titleColor);
imagestring($image, 5, 220, 440, "Darlley Brito", $titleColor);
imagestring($image, 3, 200, 470, "Concluido em " . date("d/m/Y"), $titleColor);

header("Content-Type: image/png");

$date = date('Y-m-d');

imagepng($image,"php-$date.png");
imagedestroy($image);