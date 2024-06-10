<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário
$dbname = "petshop";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome_cliente = $_POST["nome_cliente"];
    $endereco_cliente = $_POST["endereco_cliente"];
    $telefone_cliente = $_POST["telefone_cliente"];
    $email_cliente = $_POST["email_cliente"];

    // Prepara e executa a inserção dos dados
    $sql = "INSERT INTO clientes (nome_cliente, endereco_cliente, telefone_cliente, email_cliente)
            VALUES ('$nome_cliente', '$endereco_cliente', '$telefone_cliente', '$email_cliente')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo cliente cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fecha a conexão
$conn->close();
?>