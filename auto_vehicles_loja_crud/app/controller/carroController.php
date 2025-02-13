<?php

require_once __DIR__ . '/../model/carroModel.php';

class CarroController {
    private $model;

    public function __construct() {
        $this->model = new CarroModel();
    }

    public function criarCarro($dados) {
        return $this->model->criarCarro(
            $dados['marca'], $dados['modelo'], $dados['paisFabricacao'],
            $dados['anoProducao'], $dados['cor'], $dados['totalPortas'], $dados['precoVeiculo']
        );
    }

    public function listarCarros() {
        return $this->model->listarCarros();
    }

    public function buscarPorId($id) {
        return $this->model->buscarPorId($id);
    }

    public function atualizarCarro($id, $dados) {
        return $this->model->atualizarCarro(
            $id, $dados['marca'], $dados['modelo'], $dados['paisFabricacao'],
            $dados['anoProducao'], $dados['cor'], $dados['totalPortas'], $dados['precoVeiculo']
        );
    }

    public function excluirCarro($id) {
        return $this->model->excluirCarro($id);
    }
}

if (isset($_POST['cadastrarCarro'])) {
    $dados = [
        'marca' => $_POST['marca'],
        'modelo' => $_POST['modelo'],
        'paisFabricacao' => $_POST['paisFabricacao'],
        'anoProducao' => $_POST['anoProducao'],
        'cor' => $_POST['cor'],
        'totalPortas' => $_POST['totalPortas'],
        'precoVeiculo' => $_POST['precoVeiculo']
    ];

    $controller = new CarroController();
    $controller->criarCarro($dados);

    header('Location: ../view/carro/listar.php');
    exit;
}
?>
