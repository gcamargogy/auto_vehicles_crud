<?php

require_once __DIR__ . '/../../config/database.php';

class CarroModel {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function criarCarro($marca, $modelo, $paisFabricacao, $anoProducao, $cor, $totalPortas, $precoVeiculo) {
        $sql = "INSERT INTO Carro (marca, modelo, paisFabricacao, anoProducao, cor, totalPortas, precoVeiculo) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$marca, $modelo, $paisFabricacao, $anoProducao, $cor, $totalPortas, $precoVeiculo]);
    }

    public function listarCarros() {
        $sql = "SELECT * FROM Carro";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM Carro WHERE id_carro = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizarCarro($id, $marca, $modelo, $paisFabricacao, $anoProducao, $cor, $totalPortas, $precoVeiculo) {
        $sql = "UPDATE Carro SET marca = ?, modelo = ?, paisFabricacao = ?, anoProducao = ?, cor = ?, totalPortas = ?, precoVeiculo = ? WHERE id_carro = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$marca, $modelo, $paisFabricacao, $anoProducao, $cor, $totalPortas, $precoVeiculo, $id]);
    }

    public function excluirCarro($id) {
        $sql = "DELETE FROM Carro WHERE id_carro = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}

?>
