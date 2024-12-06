<?php
session_start();

// Array de produtos
$produtos = [
    ['id' => 1, 'nome' => 'Produto 1', 'descricao' => 'Descrição do Produto 1', 'preco' => 10.00],
    ['id' => 2, 'nome' => 'Produto 2', 'descricao' => 'Descrição do Produto 2', 'preco' => 20.00],
    ['id' => 3, 'nome' => 'Produto 3', 'descricao' => 'Descrição do Produto 3', 'preco' => 30.00],
];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Loja Simples</title>
</head>
<body>
    <h1>Bem-vindo à Loja Simples</h1>
    <h2>Produtos</h2>
    <ul>
        <?php foreach ($produtos as $produto): ?>
            <li>
                <h3><?php echo $produto['nome']; ?></h3>
                <p><?php echo $produto['descricao']; ?></p>
                <p>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                <a href="produto.php?id=<?php echo $produto['id']; ?>">Ver Detalhes</a>
                <a href="carrinho.php?action=add&id=<?php echo $produto['id']; ?>">Adicionar ao Carrinho</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="carrinho.php">Ver Carrinho</a>
</body>
</html>