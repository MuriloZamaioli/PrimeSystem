<?php
session_start();
include 'conexao.php';
if (!isset($_SESSION['email'])) {
    echo "Sessão expirada. Por favor, refaça o processo de recuperação.";
    exit();
}
$email = $_SESSION['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];
if ($senha !== $confirmaSenha) {
    echo "<script>alert('As senhas não coincidem.'); window.history.back();</script>";
    exit();
}

$sql = "UPDATE `login` SET `senha` = ? WHERE email = ?";
$stmt = mysqli_prepare($conexao, $sql);
if (!$stmt) {
    die("Erro na preparação da consulta: " . mysqli_error($conexao));
}
mysqli_stmt_bind_param($stmt, "ss", $senha, $email);
if (mysqli_stmt_execute($stmt)) {
    session_destroy();
    header("Location: ../inicio.html");
    exit();
} else {
    echo "Erro ao atualizar a senha: " . mysqli_error($conexao);
}
mysqli_stmt_close($stmt);
mysqli_close($conexao);
?>
