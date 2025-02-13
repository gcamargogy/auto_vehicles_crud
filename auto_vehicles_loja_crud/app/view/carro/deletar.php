<?php
// Carregar o controller
require_once __DIR__ . '/../../controller/carroController.php';

// Verificar se o ID do carro foi passado
if (isset($_GET['id'])) {
    $idCarro = $_GET['id'];
    $carroController = new CarroController();
    
    // Excluir o carro
    $carroController->excluirCarro($idCarro);

    // Redirecionar para a lista de carros
    header('Location: /loja.crud/app/view/carro/listar.php');
    exit();
} else {
    die('ID do carro não encontrado.');
}
