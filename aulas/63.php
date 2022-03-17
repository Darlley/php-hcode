<?php

$conn = new PDO('mysql:host=localhost;dbname=dev_php7','root','123@ldz');

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios where id_usuario = ?");

$id = '3';

$stmt->execute(array($id));

$conn->rollback();
// $conn->commit();