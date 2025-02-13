<?php
// Inclua o controller que irá buscar os carros
require_once __DIR__ . '/../../controller/carroController.php';

$carroController = new CarroController();
$carros = $carroController->listarCarros() ?? []; // Garante que seja um array

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
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
            <h1>Lista de Carros Cadastrados</h1>

            <?php if (!empty($carros)): ?> <!-- Alterado para evitar erro -->
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>País de Fabricação</th>
                                <th>Ano de Produção</th>
                                <th>Cor</th>
                                <th>Total de Portas</th>
                                <th>Preço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($carros as $carro): ?>
                                <tr>
                                    <td><?= htmlspecialchars($carro['id_carro']) ?></td>
                                    <td><?= htmlspecialchars($carro['marca']) ?></td>
                                    <td><?= htmlspecialchars($carro['modelo']) ?></td>
                                    <td><?= htmlspecialchars($carro['paisFabricacao']) ?></td>
                                    <td><?= htmlspecialchars($carro['anoProducao']) ?></td>
                                    <td><?= htmlspecialchars($carro['cor']) ?></td>
                                    <td><?= htmlspecialchars($carro['totalPortas']) ?></td>
                                    <td><?= htmlspecialchars($carro['precoVeiculo']) ?></td>
                                    <td>
                                        <a href="editar.php?id=<?= $carro['id_carro']; ?>" class="btn btn-edit">Editar</a>
                                        <a href="deletar.php?id=<?= $carro['id_carro']; ?>" class="btn btn-delete">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p>Não há carros cadastrados.</p>
                <a href="../carro/cadastrar.php">Cadastre aqui!</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
