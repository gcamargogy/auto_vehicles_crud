<?php
// Inclua o controller que irá buscar os carros
require_once __DIR__ . '/../../controller/motoController.php';

$motoController = new MotoController();
$motos = $motoController->listarMotos() ?? []; // Garante que seja um array

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Motos</title>
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
            <h1>Lista de Motos Cadastradas</h1>

            <?php if (!empty($motos)): ?> <!-- Alterado para evitar erro -->
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
                                <th>Numero de Chassi</th>
                                <th>Preço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($motos as $moto): ?>
                                <tr>
                                    <td><?= htmlspecialchars($moto['id_moto']) ?></td>
                                    <td><?= htmlspecialchars($moto['marca']) ?></td>
                                    <td><?= htmlspecialchars($moto['modelo']) ?></td>
                                    <td><?= htmlspecialchars($moto['paisFabricacao']) ?></td>
                                    <td><?= htmlspecialchars($moto['anoProducao']) ?></td>
                                    <td><?= htmlspecialchars($moto['cor']) ?></td>
                                    <td><?= htmlspecialchars($moto['numeroChassi']) ?></td>
                                    <td><?= htmlspecialchars($moto['precoVeiculo']) ?></td>
                                    <td>
                                        <a href="editar.php?id=<?= $moto['id_moto']; ?>" class="btn btn-edit">Editar</a>
                                        <a href="deletar.php?id=<?= $moto['id_moto']; ?>" class="btn btn-delete">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p>Não há motos cadastradas.</p>
                <a href="../moto/cadastrar.php">Cadastre aqui!</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
