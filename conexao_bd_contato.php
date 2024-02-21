<?php
// Conectar ao banco de dados
$servername = "localhost";
$usuario = "root";
$password = "";
$bdname = "conta";

$conn = mysqli_connect($servername, $usuario, $password, $bdname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Receber dados do formulário
$tXtNomePais = $_POST['nomePais'];
$tXtNome = $_POST['nome'];
$tXtEmail = $_POST['email'];
$tXtIdade = $_POST['idade'];
$tXtMensagem = $_POST['mensagem'];

// Inserir dados no banco de dados
$sql = "INSERT INTO contato (nomePais, nome , email, idade, mensagem)
        VALUES ('$tXtNomePais ', '$tXtNome', $tXtEmail, '$tXtIdade', '$tXtMensagem')";

function exercutarComando($sql){
if (mysqli_query($sql) === TRUE) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar a mensagem " . $sql;
}

}

?>