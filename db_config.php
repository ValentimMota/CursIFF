<?php
// db_config.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meu_projeto";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Criar tabela usuarios se não existir
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    login VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {

} else {
    echo "Erro ao criar a tabela: " . $conn->error . "<br>";
}

// Inserir usuário de teste, se necessário
$cpf = '12345678900';
$senha = password_hash('senha123', PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, cpf, email, login, senha) SELECT * FROM (SELECT 'Teste', '$cpf', 'teste@example.com', 'teste', '$senha') AS tmp
WHERE NOT EXISTS (
    SELECT cpf FROM usuarios WHERE cpf = '$cpf'
) LIMIT 1";


// Não fechar a conexão aqui para que ela possa ser usada nos outros scripts
?>