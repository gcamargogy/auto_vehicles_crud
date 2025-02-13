<?php
require_once __DIR__ . '/../model/caminhaoModel.php';

class CaminhaoController {
    private $model;

    public function __construct() {
        $this->model = new CaminhaoModel();
    }

    public function criarCaminhao($dados) {
        return $this->model->criarCaminhao(
            $dados['marca'],
            $dados['paisFabricacao'],
            $dados['anoProducao'],
            $dados['cor'],
            $dados['totalEixos'],
            $dados['emplacamento'],
            $dados['precoVeiculo']
        );
    }

    public function listarCaminhoes() {
        return $this->model->listarCaminhoes();
    }

    public function buscarPorId($id) {
        return $this->model->buscarPorId($id);
    }

    public function atualizarCaminhao($id, $dados) {
        return $this->model->atualizarCaminhao(
            $id,
            $dados['marca'],
            $dados['paisFabricacao'],
            $dados['anoProducao'],
            $dados['cor'],
            $dados['totalEixos'],
            $dados['emplacamento'],
            $dados['precoVeiculo']
        );
    }

    public function excluirCaminhao($id) {
        return $this->model->excluirCaminhao($id);
    }
}

if (isset($_POST['cadastrarCaminhao'])) {
    $dados = [
        'marca' => $_POST['marca'],
        'paisFabricacao' => $_POST['paisFabricacao'],
        'anoProducao' => $_POST['anoProducao'],
        'cor' => $_POST['cor'],
        'totalEixos' => $_POST['totalEixos'],
        'emplacamento' => $_POST['emplacamento'],
        'precoVeiculo' => $_POST['precoVeiculo']
    ];

    $controller = new CaminhaoController();
    $controller->criarCaminhao($dados);

    header('Location: ../view/caminhao/listar.php');
    exit;
}
?>
