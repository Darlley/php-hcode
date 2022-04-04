<?php

    $filename = "logo.png";

    if(file_exists($filename)){
        $fileContent = file_get_contents($filename);
        $base64 = base64_encode($fileContent);

        $fileinfo = new finfo(FILEINFO_MIME_TYPE);
        $mimetype = $fileinfo->file($filename);

        $base64encode = ("data:". $mimetype .";base64" . $base64);
    }


?>

<img src="<?= $base64encode ?>" >
<a href="<?= $base64encode ?>" target="_blank">logo.png</a>