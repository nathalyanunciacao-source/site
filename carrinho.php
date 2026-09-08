<?php
// Obrigatório para salvar e ler os itens escolhidos pelo usuário
session_start();

// Conexão com seu banco de dados
// Ajuste para o nome do arquivo que você já usa no seu projeto (ex: banco_de_dados.php ou db.php)
require_once 'banco_de_dados.php';

// Inicializa o carrinho na sessão se ainda não existir
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

// -------------------------------------------------------------
// LÓGICA DO CARRINHO (Adicionar, Remover e Atualizar Quantidade)
// -------------------------------------------------------------
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];

    // 1. ADICIONAR ITEM
    if ($acao == 'add' && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        if (!isset($_SESSION['carrinho'][$id])) {
            $_SESSION['carrinho'][$id] = 1;
        } else {
            $_SESSION['carrinho'][$id] += 1;
        }
        header("Location: carrinho.php");
        exit();
    }

    // 2. REMOVER ITEM
    if ($acao == 'del' && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        if (isset($_SESSION['carrinho'][$id])) {
            unset($_SESSION['carrinho'][$id]);
        }
        header("Location: carrinho.php");
        exit();
    }

    // 3. ATUALIZAR QUANTIDADE
    if ($acao == 'up' && isset($_POST['qtd']) && is_array($_POST['qtd'])) {
        foreach ($_POST['qtd'] as $id => $qtd) {
            $id  = intval($id);
            $qtd = intval($qtd);
            if ($qtd > 0) {
                $_SESSION['carrinho'][$id] = $qtd;
            } else {
                unset($_SESSION['carrinho'][$id]);
            }
        }
        header("Location: carrinho.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f4f4f4; }
        .total { font-size: 1.2em; font-weight: bold; margin-top: 15px; }
        .btn { padding: 10px 15px; text-decoration: none; border-radius: 4px; display: inline-block; cursor: pointer; }
        .btn-comprar { background-color: #28a745; color: #fff; border: none; }
        .btn-continuar { background-color: #007bff; color: #fff; }
        .btn-remover { color: #dc3545; text-decoration: none; }
        input[type="number"] { width: 60px; padding: 5px; }
    </style>
</head>
<body>

    <h1>Seu Carrinho de Compras</h1>

    <?php if (empty($_SESSION['carrinho'])): ?>
        <p>O seu carrinho está vazio no momento.</p>
        <p><a href="servico.php" class="btn btn-continuar">Ver Serviços/Produtos</a></p>
    <?php else: ?>

        <form action="carrinho.php?acao=up" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Produto / Serviço</th>
                        <th>Preço Unitário</th>
                        <th>Quantidade</th>
                        <th>Subtotal</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totalGeral = 0;

                    foreach ($_SESSION['carrinho'] as $id => $qtd):
                        // Busca os dados do produto direto no banco
                        // Certifique-se de que sua variável de conexão no banco_de_dados.php se chama $pdo ou $conn
                        $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
                        $stmt->execute([$id]);
                        $produto = $stmt->fetch(PDO::FETCH_ASSOC);

                        if ($produto):
                            $subtotal = $produto['preco'] * $qtd;
                            $totalGeral += $subtotal;
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($produto['nome']); ?></td>
                            <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
                            <td>
                                <input type="number" name="qtd[<?php echo $id; ?>]" value="<?php echo $qtd; ?>" min="1">
                            </td>
                            <td>R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></td>
                            <td>
                                <a href="carrinho.php?acao=del&id=<?php echo $id; ?>" class="btn-remover">Remover</a>
                            </td>
                        </tr>
                    <?php 
                        endif;
                    endforeach; 
                    ?>
                </tbody>
            </table>

            <div style="margin-top: 15px;">
                <button type="submit" class="btn">Atualizar Quantidades</button>
            </div>
        </form>

        <div class="total">
            Total a Pagar: R$ <?php echo number_format($totalGeral, 2, ',', '.'); ?>
        </div>

        <div style="margin-top: 20px;">
            <a href="servico.php" class="btn btn-continuar">Continuar Comprando</a>
            <a href="checkout.php" class="btn btn-comprar">Ir para o Pagamento</a>
        </div>

    <?php endif; ?>

</body>
</html>
