<?php
// Carregar o controller
require_once __DIR__ . '/../../controller/motoController.php';

// Verificar se o ID do moto foi passado
if (isset($_GET['id'])) {
    $idMoto = $_GET['id'];
    $motoController = new motoController();
    $moto = $motoController->buscarPorId($idMoto);  // Buscar os dados do moto
} else {
    die('ID do moto não encontrado.');
}

// Verificar se o formulário foi enviado para atualizar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dados = [
        'marca' => $_POST['marca'],
        'modelo' => $_POST['modelo'],
        'paisFabricacao' => $_POST['paisFabricacao'],
        'anoProducao' => $_POST['anoProducao'],
        'cor' => $_POST['cor'],
        'numeroChassi' => $_POST['numeroChassi'],
        'precoVeiculo' => $_POST['precoVeiculo']
    ];

    $motoController->atualizarmoto($idMoto, $dados); // Atualizar no banco
    header('Location: listar.php'); // Redirecionar de volta para a lista
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar moto</title>
    <link rel="stylesheet" href="../../../public/css/formulario-de-cadastro.css">
</head>
<body>

    <div class="botao-sair">
        <a href="../moto/listar.php"><button>&times;</button></a>
    </div>

    <div class="index-container">

        <div class="index-imagem">
            <!-- <img src="public/imgs/backIndex.jpg" alt=""> -->
        </div>

        <div class="formulario-container">
            <h1>Editar Moto</h1>
            <form action="editar.php?id=<?php echo $idMoto; ?>" method="POST" class="formulario">
                <label>Marca</label>
                <input type="text" name="marca" value="<?php echo $moto['marca']; ?>" required>
                
                <label>Modelo</label>
                <input type="text" name="modelo" value="<?php echo $moto['modelo']; ?>" required>
        
                <label>Pais de Fabricação</label>
                <input type="text" name="paisFabricacao" value="<?php echo $moto['paisFabricacao']; ?>" required>
                
                <label>Ano de Produção</label>
                <input type="text" name="anoProducao" value="<?php echo $moto['anoProducao']; ?>" required>
                
                <label>Cor</label>
                <input type="text" name="cor" value="<?php echo $moto['cor']; ?>" required>
                
                <label>Numero de Chassi</label>
                <input type="text" name="numeroChassi" value="<?php echo $moto['numeroChassi']; ?>" required>

                <label>Preço do Veículo</label>
                <input type="text" name="precoVeiculo" value="<?php echo $moto['precoVeiculo']; ?>" required>
                
                <input type="submit" value="Atualizar Moto" class="botao-cadastrar">
            </form>
        </div>
    </div>
</body>
</html>
