<?php
include "conexao.php";

$email = $_POST['email'];
$usuario = $_POST['usuario'];
$token = $_POST['token'];

$stmt = $conexao->prepare("SELECT * FROM login WHERE nome = ? AND email = ? AND token = ?");
$stmt->bind_param("sss", $usuario, $email, $token);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    header("Location: ../redefineSenha.php");
    exit;
} else {
    echo "<script>alert('Senha ou usuário incorreto.');</script>";
}

$stmt->close();
$conexao->close();
?>
