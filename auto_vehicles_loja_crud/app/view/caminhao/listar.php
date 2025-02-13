<?php
// Inclua o controller que irá buscar os carros
require_once __DIR__ . '/../../controller/caminhaoController.php';

$caminhaoController = new CaminhaoController();
$caminhoes = $caminhaoController->listarCaminhoes() ?? []; // Garante que seja um array

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Caminhões</title>
    <link rel="stylesheet" href="../../../public/css/tabela-listar.css">
</head>
<body>
    <div class="botao-sair">
        <a href="../../../index.php"><button>&times;</button></a>
    </div>

    <div class="index-container">
        <div class="index-imagem">
            <!-- <img src="../../../public/imgs/backgroundMelhor.svg" alt=""> -->
        </div>

        <div class="listar-container">
            <h1>Lista de Caminhões Cadastrados</h1>

            <?php if (!empty($caminhoes)): ?> <!-- Alterado para evitar erro -->
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Marca</th>
                                <th>País de Fabricação</th>
                                <th>Ano de Produção</th>
                                <th>Cor</th>
                                <th>Total de Eixos</th>
                                <th>Emplacamento</th>
                                <th>Preço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($caminhoes as $caminhao): ?>
                                <tr>
                                    <td><?= htmlspecialchars($caminhao['id_caminhao']) ?></td>
                                    <td><?= htmlspecialchars($caminhao['marca']) ?></td>
                                    <td><?= htmlspecialchars($caminhao['paisFabricacao']) ?></td>
                                    <td><?= htmlspecialchars($caminhao['anoProducao']) ?></td>
                                    <td><?= htmlspecialchars($caminhao['cor']) ?></td>
                                    <td><?= htmlspecialchars($caminhao['totalEixos']) ?></td>
                                    <td><?= htmlspecialchars($caminhao['emplacamento']) ?></td>
                                    <td><?= htmlspecialchars($caminhao['precoVeiculo']) ?></td>
                                    <td>
                                        <a href="editar.php?id=<?= $caminhao['id_caminhao']; ?>" class="btn btn-edit">Editar</a>
                                        <a href="deletar.php?id=<?= $caminhao['id_caminhao']; ?>" class="btn btn-delete">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p>Não há caminhões cadastrados.</p>
                <a href="../caminhao/cadastrar.php">Cadastre aqui!</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
