<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - Pet Shop Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Clientes</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Visão Geral</a></li>
            <li><a href="clients.php">Clientes</a></li>
            <li><a href="pets.php">Pets</a></li>
            <li><a href="#services">Serviços</a></li>
            <li><a href="#stock">Estoque</a></li>
            <li><a href="#sales">Vendas</a></li>
            <li><a href="#reports">Relatórios</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Cadastro de Clientes</h2>
            <section>
                <!-- Formulário para cadastrar clientes -->
                <form action="cadastro_cliente.php" method="post">
                    <label for="nome_cliente">Nome:</label>
                    <input type="text" id="nome_cliente" name="nome_cliente" required><br>
            
                    <label for="endereco_cliente">Endereço:</label>
                    <input type="text" id="endereco_cliente" name="endereco_cliente"><br>
            
                    <label for="telefone_cliente">Telefone:</label>
                    <input type="tel" id="telefone_cliente" name="telefone_cliente" pattern="[0-9]{10,11}"><br>
            
                    <label for="email_cliente">E-mail:</label>
                    <input type="email" id="email_cliente" name="email_cliente"><br>
            
                    <input type="submit" value="Salvar">
                    <input type="reset" value="Cancelar">
                </form>
            </section>

            <h2>Clientes Cadastrados</h2>
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

            // Consulta os clientes cadastrados
            $sql = "SELECT nome_cliente, endereco_cliente, telefone_cliente, email_cliente FROM clientes";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Exibe os dados de cada cliente
                echo "<ul>";
                while($row = $result->fetch_assoc()) {
                    echo "<li>";
                    echo "Nome: " . $row["nome_cliente"] . "<br>";
                    echo "Endereço: " . $row["endereco_cliente"] . "<br>";
                    echo "Telefone: " . $row["telefone_cliente"] . "<br>";
                    echo "Email: " . $row["email_cliente"];
                    echo "</li>";
                }
                echo "</ul>";
            } else {
                echo "Nenhum cliente cadastrado.";
            }

            // Fecha a conexão
            $conn->close();
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Pet Shop</p>
    </footer>
</body>
</html>
