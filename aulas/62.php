<?php 

    $conn = new PDO('mysql:host=localhost;dbname=dev_php7','root','123@ldz');
    $stmt = $conn->prepare("DELETE FROM tb_usuarios where id_usuario = :ID");

    $id = '1';
    $stmt->bindParam(":ID",$id);

    $stmt->execute();
