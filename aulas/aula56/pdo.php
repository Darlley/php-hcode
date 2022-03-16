<?php

    $pdo_connection = new PDO('mysql:host=localhost;dbname=dev_php7;','root','123@ldz',array());
    $stmt = $pdo_connection->prepare("SELECT * FROM tb_usuarios");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($results as $row){

        echo "<br> ==================== <br> ";
        
        foreach($row as $key => $result){
            echo "<strong>$key</strong>: $result <br>";
        }
    }