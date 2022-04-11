<?php

    $link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
    $content = file_get_contents($link);
    $parse = parse_url($link);
    $basename = basename($parse["path"]);

    $file = fopen("google.png", "w+");
    fwrite($file, $content);
    var_dump($file);
    fclose($file);

?>

<img src="google.png" alt="">