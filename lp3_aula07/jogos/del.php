<?php 

$id = $_GET['id'];

$sql = "delete from jogos where id='$id'";

include '../includes/conexao.php';

$conexao->query($sql);

header("location: index.php");

    