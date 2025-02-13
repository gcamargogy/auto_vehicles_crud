<?php
// Carregar o controller
require_once __DIR__ . '/../../controller/motoController.php';

// Verificar se o ID do carro foi passado
if (isset($_GET['id'])) {
    $idMoto = $_GET['id'];
    $motoController = new MotoController();
    
    // Excluir o carro
    $motoController->excluirMoto($idMoto);

    // Redirecionar para a lista de carros
    header('Location: /loja.crud/app/view/moto/listar.php');
    exit();
} else {
    die('ID do carro não encontrado.');
}
