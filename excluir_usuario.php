<?php
/**
 * Script de teste para excluir um usuário de um banco de dados MySQL usando PHP.
 *
 * Este script conecta-se a um banco de dados MySQL local usando as credenciais padrão do XAMPP
 * e exclui um registro da tabela 'usuarios' com base no ID fornecido.
 *
 * Antes de executar este script, verifique se o servidor MySQL está em execução e se as credenciais
 * de acesso estão corretas. Além disso, certifique-se de que o banco de dados 'crud_example' já foi criado.
 *
 * http://localhost/teste/excluir_usuario.php?id=1 digite numero do ID a ser excluido (exemplo 'id=1')
 *  
 * @author [Indiamara Alves Enes]
 * @version 1.0
 */

// Verifica se o ID do usuário a ser excluído foi fornecido
if (!isset($_GET['id'])) {
    echo "ID do usuário não fornecido.";
    exit;
}

// Obtém o ID do usuário a ser excluído
$id_usuario = $_GET['id'];

// Verifica se o ID do usuário é um número inteiro válido
if (!filter_var($id_usuario, FILTER_VALIDATE_INT)) {
    echo "ID do usuário inválido.";
    exit;
}

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

// SQL para excluir o usuário com base no ID fornecido
$sql = "DELETE FROM usuarios WHERE id = $id_usuario";

// Executa a consulta SQL e verifica se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Usuário excluído com sucesso.";
} else {
    echo "Erro ao excluir usuário: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
