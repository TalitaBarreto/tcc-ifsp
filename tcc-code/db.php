<?php

// 1. Configurações do Banco de Dados
// ATENÇÃO: Substitua 'localhost', 'root', '', e 'seu_banco_de_dados' com as suas credenciais reais.
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "conectando-ideias";

// 2. Conectar ao Banco de Dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>