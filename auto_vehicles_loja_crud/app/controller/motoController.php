<?php

require_once __DIR__ . '/../model/motoModel.php';

class MotoController {
    private $model;

    public function __construct() {
        $this->model = new MotoModel();
    }

    public function criarMoto($dados) {
        return $this->model->criarMoto(
            $dados['marca'], $dados['modelo'], $dados['paisFabricacao'],
            $dados['anoProducao'], $dados['cor'], $dados['numeroChassi'], $dados['precoVeiculo']
        );
    }

    public function listarMotos() {
        return $this->model->listarMotos();
    }

    public function buscarPorId($id) {
        return $this->model->buscarPorId($id);
    }

    public function atualizarMoto($id, $dados) {
        return $this->model->atualizarMoto(
            $id, $dados['marca'], $dados['modelo'], $dados['paisFabricacao'],
            $dados['anoProducao'], $dados['cor'], $dados['numeroChassi'], $dados['precoVeiculo']
        );
    }

    public function excluirMoto($id) {
        return $this->model->excluirMoto($id);
    }
}

// Verificar se o formulário foi enviado
if (isset($_POST['cadastrarMoto'])) {
    $dados = [
        'marca' => $_POST['marca'],
        'modelo' => $_POST['modelo'],
        'paisFabricacao' => $_POST['paisFabricacao'],
        'anoProducao' => $_POST['anoProducao'],
        'cor' => $_POST['cor'],
        'numeroChassi' => $_POST['numeroChassi'],
        'precoVeiculo' => $_POST['precoVeiculo']
    ];

    // Criar o Moto
    $controller = new MotoController();
    $controller->criarMoto($dados);

    // Redirecionar ou exibir mensagem de sucesso
    header('Location: ../view/moto/listar.php'); // Ajuste conforme necessário
    exit;
}
?>
