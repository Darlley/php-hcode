<?php

    $conn = new PDO('mysql:host=localhost;dbname=dev_php7','root','123@ldz');
    $stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login,des_senha) VALUES(:LOGIN,:PASSWORD)");

    $login = 'user';
    $password = 'password_156';
    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);

    $stmt->execute();
