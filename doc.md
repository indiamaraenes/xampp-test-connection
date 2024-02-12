# Script de Teste PHP

Script de teste PHP usado para testar a conexão com o banco de dados XAMPP  (Testar conexão, consulta usuario e excluir)

## Requisitos

Antes de usar os scripts, verifique se os seguintes requisitos são atendidos:

- Servidor web local (como XAMPP, WAMP, ou equivalente) configurado e em execução.
- PHP instalado e configurado corretamente.
- Servidor MySQL em execução.
- Banco de dados 'crud_example' criado no servidor MySQL.
- Credenciais de acesso ao banco de dados (nome de usuário e senha).

## Instruções de Uso

Siga estas etapas para utilizar os scripts:

1. **Preparação do Ambiente**:
   - Verifique se o servidor web, o PHP e o MySQL estão em execução.
   - Garanta que o banco de dados 'crud_example' tenha sido criado no servidor MySQL.

2. **Configuração do Banco de Dados**:
   - As configurações do banco de dados (nome do servidor, nome de usuário, senha e nome do banco de dados) devem ser atualizadas nos scripts conforme necessário.

3. **Execução dos Scripts**:
   - Coloque os scripts no diretório raiz do servidor web local.
   - Acesse os scripts através do navegador web para realizar as operações CRUD desejadas.

## Scripts Disponíveis

Aqui estão os scripts disponíveis para realizar operações CRUD:

### 1. Inserir Dados

Este script insere um novo registro na tabela 'usuarios'.

#### Arquivo: `inserir_usuario.php`

```php
// Instruções para inserir dados aqui
```

### 2. Consultar Dados

Este script consulta os registros na tabela 'usuarios' e os exibe na página.

#### Arquivo: `consultar_usuarios.php`

```php
// Instruções para consultar dados aqui
```

### 3. Excluir Usuário

Este script exclui um registro da tabela 'usuarios' com base no ID fornecido via parâmetro na URL.

#### Arquivo: `excluir_usuario.php`

Para excluir um usuário, acesse o script via navegador da seguinte forma:
`http://localhost/teste/excluir_usuario.php?id=1`
(Substitua '1' pelo ID do usuário que deseja excluir).

## Observações de Segurança

- Certifique-se de que os scripts estejam protegidos contra injeção de SQL.
- Faça backup do banco de dados antes de realizar operações de exclusão.
- Os scripts são fornecidos apenas para fins educacionais e de teste. Eles podem precisar de modificações para uso em um ambiente de produção.

## Autor

- Autor: Indiamara Alves Enes
- Versão: 1.0

## Conclusão

Estas são as instruções para usar os scripts PHP fornecidos para realizar operações CRUD básicas em um banco de dados MySQL. Certifique-se de seguir as instruções cuidadosamente e adaptar os scripts conforme necessário para atender às suas necessidades específicas.