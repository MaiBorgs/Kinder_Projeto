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
$tXtNomeProfessor = $_POST['nome'];
$tXtFormacao = $_POST['formacao'];
$tXtExperiencia = $_POST['tempo_experiencia'];
$tXtEscolaAnterior = $_POST['escola_anterior'];
$tXtTurnoo = $_POST['turno'];


// Inserir dados no banco de dados
$sql = "INSERT INTO professores (nome, formacao, tempo_experiencia, escola_anterior, turno)
        VALUES ('$nome', '$formacao', $tempo_experiencia, '$escola_anterior', '$turno')";

function exercutarComando($sql){
if (mysqli_query($sql) === TRUE) {
    echo "Cadastro de professor realizado com sucesso!";
} else {
    echo "Erro ao cadastrar o professor: " . $sql;
}

}

?>