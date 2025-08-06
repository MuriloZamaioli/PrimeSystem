<?php
$nome = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$token = $_POST['token'];

 
$sql = "insert into login(nome,email,senha,token) values ('$nome', '$email', '$senha', '$token')";
 
include 'conexao.php';
 
$resultado = mysqli_query($conexao,$sql);
 
mysqli_close($conexao);
 
header('location:../inicio.php')
 
?>