<?php
session_start();
include 'conexao.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$token = $_POST['token'];

$sql = "SELECT * FROM login WHERE nome = ? AND email = ? AND token = ?";
$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sss", $usuario, $email, $token);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) === 1) {
        $_SESSION['email'] = $email;
        header("Location: ../redefineSenha.php");
        exit();
    } else {
        echo "<script>alert('Dados inválidos!'); window.history.back();</script>";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Erro na consulta.";
}
mysqli_close($conexao);
