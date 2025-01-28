<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "login";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        throw new Excepcion("Falha na conexão: " . $conn->connect_error);
    }
    echo "";
} catch (Excepcion $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>