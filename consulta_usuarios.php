<?php
/**
 * Script de teste para consultar dados em um banco de dados MySQL usando PHP.
 *
 * Este script conecta-se a um banco de dados MySQL local usando as credenciais padrão do XAMPP
 * e consulta os registros da tabela 'usuarios'.
 *
 * Antes de executar este script, verifique se o servidor MySQL está em execução e se as credenciais
 * de acesso estão corretas. Além disso, certifique-se de que o banco de dados 'crud_example' já foi criado.
 *
 * @author [Indiamara Alves Enes]
 * @version 1.0
 */

// Configurações do banco de dados
$servername = "localhost";
$username = "root"; // Usuário padrão do XAMPP
$password = ""; // Senha padrão do XAMPP é vazia
$database = "crud_example"; // Nome do banco de dados

// Cria conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// SQL para consultar dados
$sql = "SELECT id, nome, email, telefone, hora_de_inclusao FROM usuarios";

// Executa a consulta SQL
$result = $conn->query($sql);

// Verifica se a consulta retornou resultados
if ($result->num_rows > 0) {
    // Exibe os dados de cada linha
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nome: " . $row["nome"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Telefone: " . $row["telefone"] . "<br>";
        echo "Hora de Inclusão: " . $row["hora_de_inclusao"] . "<br><br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
