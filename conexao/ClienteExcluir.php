<?php
include "conexao.php";

$idexcluir = $_GET['idexcluir'];

$sql = "delete from login where id=$idexcluir";

$resultado = mysqli_query($conexao,$sql);

mysqli_close($conexao);

header('location:ClienteListar.php')
?>