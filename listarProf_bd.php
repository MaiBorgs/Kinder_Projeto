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

$sql = "SELECT nome FROM professores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row["nome"] . '</h5>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Nenhum professor cadastrado.";
}
