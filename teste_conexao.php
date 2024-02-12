<?php
/**
 * Script de teste para inserir dados em um banco de dados MySQL usando PHP.
 *
 * Este script conecta-se a um banco de dados MySQL local usando as credenciais padrão do XAMPP
 * e insere um novo registro na tabela 'usuarios'.
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

// Dados a serem inseridos
$nome = "João";
$email = "joao@example.com";
$telefone = "123456789";

// SQL para inserir dados
$sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

// Executa a consulta SQL e verifica se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Novo registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>