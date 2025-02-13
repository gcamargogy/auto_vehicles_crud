<?php
// Carregar o controller
require_once __DIR__ . '/../../controller/carroController.php';

// Verificar se o ID do carro foi passado
if (isset($_GET['id'])) {
    $idCarro = $_GET['id'];
    $carroController = new CarroController();
    $carro = $carroController->buscarPorId($idCarro);  // Buscar os dados do carro
} else {
    die('ID do carro não encontrado.');
}

// Verificar se o formulário foi enviado para atualizar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dados = [
        'marca' => $_POST['marca'],
        'modelo' => $_POST['modelo'],
        'paisFabricacao' => $_POST['paisFabricacao'],
        'anoProducao' => $_POST['anoProducao'],
        'cor' => $_POST['cor'],
        'totalPortas' => $_POST['totalPortas'],
        'precoVeiculo' => $_POST['precoVeiculo']
    ];

    $carroController->atualizarCarro($idCarro, $dados); // Atualizar no banco
    header('Location: listar.php'); // Redirecionar de volta para a lista
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carro</title>
    <link rel="stylesheet" href="../../../public/css/formulario-de-cadastro.css">
</head>
<body>

    <div class="botao-sair">
        <a href="../carro/listar.php"><button>&times;</button></a>
    </div>

    <div class="index-container">

        <div class="index-imagem">
            <!-- <img src="public/imgs/backIndex.jpg" alt=""> -->
        </div>

        <div class="formulario-container">
            <h1>Editar Carro</h1>
            <form action="editar.php?id=<?php echo $idCarro; ?>" method="POST" class="formulario">
                <label>Marca</label>
                <input type="text" name="marca" value="<?php echo $carro['marca']; ?>" required>
                
                <label>Modelo</label>
                <input type="text" name="modelo" value="<?php echo $carro['modelo']; ?>" required>
        
                <label>Pais de Fabricação</label>
                <input type="text" name="paisFabricacao" value="<?php echo $carro['paisFabricacao']; ?>" required>
                
                <label>Ano de Produção</label>
                <input type="text" name="anoProducao" value="<?php echo $carro['anoProducao']; ?>" required>
                
                <label>Cor</label>
                <input type="text" name="cor" value="<?php echo $carro['cor']; ?>" required>
                
                <label>Total de Portas</label>
                <input type="text" name="totalPortas" value="<?php echo $carro['totalPortas']; ?>" required>

                <label>Preço do Veículo</label>
                <input type="text" name="precoVeiculo" value="<?php echo $carro['precoVeiculo']; ?>" required>
                
                <input type="submit" value="Atualizar Carro" class="botao-cadastrar">
            </form>
        </div>
    </div>
</body>
</html>
