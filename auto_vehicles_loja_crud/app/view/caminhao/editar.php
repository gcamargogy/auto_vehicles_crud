<?php
require_once __DIR__ . '/../../controller/caminhaoController.php';

if (isset($_GET['id'])) {
    $idCaminhao = $_GET['id'];
    $caminhaoController = new CaminhaoController();
    $caminhao = $caminhaoController->buscarPorId($idCaminhao);
} else {
    die('ID do caminhão não encontrado.');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dados = [
        'marca' => $_POST['marca'],
        'paisFabricacao' => $_POST['paisFabricacao'],
        'anoProducao' => $_POST['anoProducao'],
        'cor' => $_POST['cor'],
        'totalEixos' => $_POST['totalEixos'],
        'emplacamento' => $_POST['emplacamento'],
        'precoVeiculo' => $_POST['precoVeiculo']
    ];

    $caminhaoController->atualizarCaminhao($idCaminhao, $dados);
    header('Location: listar.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Caminhao</title>
    <link rel="stylesheet" href="../../../public/css/formulario-de-cadastro.css">
</head>
<body>

    <div class="botao-sair">
        <a href="../caminhao/listar.php"><button>&times;</button></a>
    </div>

    <div class="index-container">

        <div class="index-imagem">
            <!-- <img src="public/imgs/backIndex.jpg" alt=""> -->
        </div>

        <div class="formulario-container">
            <h1>Editar Caminhao</h1>
            <form action="editar.php?id=<?php echo $idCaminhao; ?>" method="POST" class="formulario">
                <label>Marca</label>
                <input type="text" name="marca" value="<?php echo $caminhao['marca']; ?>" required>
                
                <label>Pais de Fabricação</label>
                <input type="text" name="paisFabricacao" value="<?php echo $caminhao['paisFabricacao']; ?>" required>
        
                <label>Ano de Produção</label>
                <input type="text" name="anoProducao" value="<?php echo $caminhao['anoProducao']; ?>" required>
                
                <label>Cor</label>
                <input type="text" name="cor" value="<?php echo $caminhao['cor']; ?>" required>
                
                <label>Total de Eixos</label>
                <input type="text" name="totalEixos" value="<?php echo $caminhao['totalEixos']; ?>" required>
                
                <label>Emplacamento do Veiculo</label>
                <input type="text" name="emplacamento" value="<?php echo $caminhao['emplacamento']; ?>" required>

                <label>Preço do Veículo</label>
                <input type="text" name="precoVeiculo" value="<?php echo $caminhao['precoVeiculo']; ?>" required>
                
                <input type="submit" value="Atualizar Caminhao" class="botao-cadastrar">
            </form>
        </div>
    </div>
</body>
</html>
