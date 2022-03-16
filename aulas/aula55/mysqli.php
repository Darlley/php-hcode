<?php // MYSQLi
    
    $mysqli_connection = new mysqli("localhost","root","123@ldz","dev_php7");
    
    // if($mysqli_connection->connect_error) echo "Banco de dados " . $mysqli_connection->connect_error;
    // $stmt = $mysqli_connection->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES(?,?)");
    // $mysqli_login = "developer";
    // $mysqli_password = "12345";
    // $stmt->bind_param("ss", $mysqli_login, $mysqli_password);
    // $stmt->execute();
    // var_dump($stmt);

    $result = $mysqli_connection->query("SELECT * FROM tb_usuarios ORDER BY des_login");
    $dados_result = array();
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        array_push($dados_result,$row);
    }
    echo json_encode($dados_result);