<?php

require_once __DIR__ . '/../../config/database.php';

class MotoModel {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    public function criarMoto($marca, $modelo, $paisFabricacao, $anoProducao, $cor, $numeroChassi, $precoVeiculo) {
        $sql = "INSERT INTO Moto (marca, modelo, paisFabricacao, anoProducao, cor, numeroChassi, precoVeiculo) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$marca, $modelo, $paisFabricacao, $anoProducao, $cor, $numeroChassi, $precoVeiculo]);
    }

    public function listarMotos() {
        $sql = "SELECT * FROM Moto";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM Moto WHERE id_moto = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizarMoto($id, $marca, $modelo, $paisFabricacao, $anoProducao, $cor, $numeroChassi, $precoVeiculo) {
        $sql = "UPDATE Moto SET marca = ?, modelo = ?, paisFabricacao = ?, anoProducao = ?, cor = ?, numeroChassi = ?, precoVeiculo = ? WHERE id_moto = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$marca, $modelo, $paisFabricacao, $anoProducao, $cor, $numeroChassi, $precoVeiculo, $id]);
    }

    public function excluirMoto($id) {
        $sql = "DELETE FROM Moto WHERE id_moto = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}

?>
