<?php

    $images = scandir("images");
    $data = array();

    foreach ($images as $image){
        if(!in_array($image, array('.','..'))){
            $filename = "images". DIRECTORY_SEPARATOR . $image;
            $info = pathinfo($filename);
            $info['size'] = filesize($filename);
            $info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
            $info['url'] = "http://localhost/$filename";

            array_push($data, $info);

            echo "<img href='http://localhost/$filename'>";
        }
    }

    // echo json_encode($data);