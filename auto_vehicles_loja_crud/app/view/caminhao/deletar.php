<?php
require_once __DIR__ . '/../../controller/caminhaoController.php';

if (isset($_GET['id'])) {
    $idCaminhao = $_GET['id'];
    $caminhaoController = new CaminhaoController();
    $caminhaoController->excluirCaminhao($idCaminhao);

    header('Location: /loja.crud/app/view/caminhao/listar.php');
    exit();
} else {
    die('ID do caminhão não encontrado.');
}
