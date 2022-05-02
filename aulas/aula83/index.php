<?php

$image = imagecreatefromjpeg("image".DIRECTORY_SEPARATOR."certificado.jpg");
$titleColor = imagecolorallocate($image, 0,0,0);
$gray = imagecolorallocate($image, 100,100,100);
imagettftext($image, 32, 0, 120, 150, $titleColor, "fonts". DIRECTORY_SEPARATOR ."Bevan-Regular.ttf", "CERTIFICADO DE CONCLUSÃO");
imagettftext($image, 32, 0, 440, 350, $titleColor, "fonts". DIRECTORY_SEPARATOR ."Playball-Regular.ttf", "Darlley Brito", );
imagestring($image, 3, 440, 370, utf8_decode("Concluido em ") . date("d/m/Y"), $titleColor);
header("Content-Type: image/jpeg");
$date = date('Y-m-d');
imagejpeg($image,"image".DIRECTORY_SEPARATOR."cartificado-darlley.jpeg");
imagedestroy($image);

?>

<p>teste</p>