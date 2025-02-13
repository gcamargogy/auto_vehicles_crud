<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Veiculos | Moto</title>
    <link rel="stylesheet" href="../../../public/css/formulario-de-cadastro.css">
</head>
<body>

    <div class="botao-sair">
    <a href="../../../index.php"><button>&times;</button></a>
    </div>

    <div class="index-container">
        <div class="index-imagem">
            <!-- <img src="../../../public/imgs/backgroundMelhor.svg" alt=""> -->
        </div>

        <div class="formulario-container">
            <h1>Cadastro de Motos</h1>
            <form action="../../controller/motoController.php" method="POST" class="formulario">
                <label>Marca</label>

                <input type="text" name="marca" id="campo-1" placeholder="Informe a marca do veículo." required>
                <label>Modelo</label>
                <input type="text" name="modelo" id="campo-2" placeholder="Informe o modelo do veículo." required>

                <label>Pais de Fabricação</label>
                <input type="text" name="paisFabricacao" id="campo-3" placeholder="Informe o pais de fabricação do veículo." required>

                <label>Ano de Produção</label>
                <input type="text" name="anoProducao" id="campo-4" placeholder="Informe o ano do veículo." required>

                <label>Cor</label>
                <input type="text" name="cor" id="campo-5" placeholder="Informe a cor do veículo." required>

                <label>Número de Chassi</label>
                <input type="text" name="numeroChassi" id="campo-6" placeholder="Informe a numeração do veículo." required>

                <label>Preço do Veículo</label>
                <input type="text" name="precoVeiculo" id="campo-7" placeholder="Informe o preço do veículo." required>

                <input type="submit" name="cadastrarMoto" class="botao-cadastrar">
            </form>
        </div>
    </div>
</body>
</html>