<?php 

    $conn = new PDO('mysql:host=localhost;dbname=dev_php7','root','123@ldz');
    $stmt = $conn->prepare("UPDATE tb_usuarios set des_login = :LOGIN ,des_senha = :PASSWORD where id_usuario = :ID");

    $login = 'user_2';
    $password = 'password_123';
    $id = '3';
    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->bindParam(":ID",$id);

    $stmt->execute();
