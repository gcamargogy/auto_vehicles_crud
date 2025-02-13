<?php

require_once __DIR__ . '/../../config/database.php';

class CaminhaoModel {
    private $conn;
    
    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function criarCaminhao($marca, $paisFabricacao, $anoProducao, $cor, $totalEixos, $emplacamento, $precoVeiculo) {
        $sql = "INSERT INTO Caminhao (marca, paisFabricacao, anoProducao, cor, totalEixos, emplacamento, precoVeiculo) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$marca, $paisFabricacao, $anoProducao, $cor, $totalEixos, $emplacamento, $precoVeiculo]);
    }

    public function listarCaminhoes() {
        $sql = "SELECT * FROM Caminhao";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM Caminhao WHERE id_caminhao = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizarCaminhao($id, $marca, $paisFabricacao, $anoProducao, $cor, $totalEixos, $emplacamento, $precoVeiculo) {
        $sql = "UPDATE Caminhao SET marca = ?, paisFabricacao = ?, anoProducao = ?, cor = ?, totalEixos = ?, emplacamento = ?, precoVeiculo = ? WHERE id_caminhao = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$marca, $paisFabricacao, $anoProducao, $cor, $totalEixos, $emplacamento, $precoVeiculo, $id]);
    }

    public function excluirCaminhao($id) {
        $sql = "DELETE FROM Caminhao WHERE id_caminhao = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>
