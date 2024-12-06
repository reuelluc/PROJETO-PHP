<?php
session_start();

// Array de produtos
$produtos = [
    1 => ['nome' => 'Produto 1', 'descricao' => 'Descrição do Produto 1', 'preco' => 10.00],
    2 => ['nome' => 'Produto 2', 'descricao' => 'Descrição do Produto 2', 'preco' => 20.00],
    3 => ['nome' => 'Produto 3', 'descricao' => 'Descrição do Produto 3', 'preco' => 30.00],
];

$id = $_GET['id'];
$produto = $produtos[$id];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $produto['nome']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $produto['nome']; ?></h1>
    <p><?php echo $produto['descricao']; ?></p>
    <p>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
    <a href="carrinho.php?action=add&id=<?php echo $id; ?>">Adicionar ao Carrinho</a>
    <a href="index.php">Voltar</a>
</body>
</html>