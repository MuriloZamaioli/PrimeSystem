<?php
$nome = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$hash = md5($senha);

$sql = "insert into login(nome,email,senha) values ('$nome', '$email', '$hash')";

include 'conexao.php';

$resultado = mysqli_query($conexao,$sql);

mysqli_close($conexao);

header('location:../inicio.html')

?>

<script>
    alert("Sucesso!")
    window.location.href = "index.php"
</script>