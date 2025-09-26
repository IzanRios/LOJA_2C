<?php
require 'conexao.php';
$nome = $_POST['nome'] ?? '';
$preco = $_POST['preco'] ?? '';
$quantidade = $_POST['quantidade'] ?? '';

$sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':quantidade', $quantidade);

if ($stmt->execute()) {
  header('Location: listar.php');
  exit;
} else {
  
  include 'pedaco.php';
  echo "<div class='container'><div class='alert alert-danger'>Erro ao inserir produto.</div></div>";
  include 'footer.php';
}
