<?php
require('conexao.php');
require('models/solicitanteModel.php');

$solicitante = $_POST['solicitante'];
$empresa = $_POST['empresa'];
$dataEntregueCompras = $_POST['dataEntregueCompras'];
$entUsuarioCompras = $_POST['entUsuarioCompras'];

// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

echo "Solicitante => " . $solicitante .  " <br> Empresa => " . $empresa . "<br> Data Entregue => " . $dataEntregueCompras . "<br> Entregue para " . $entUsuarioCompras;




$s = new solicitante();
$s->__set('solicitante', $solicitante);
$s->__set('empresa', $empresa);
$s->__set('data', $dataEntregueCompras);
$s->__set('entregueParaUsuario', $entUsuarioCompras);

$s->insert($pdo);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Fluxo Doc. Terceiro</title>
</head>

<body>
    <!-- Aqui vou fazer a parte de compras -->
    <h2>Processo Compras</h2>
    <div class="row">
        <div class="col-md-2" ">
        Compras Pronto:
    </div>

    <div class=" col-md-1">
            <select>
                <option value="1">Sim</option>
                <option value="2">Não</option>
            </select>
        </div>

        <div class="col-md-1">
            Data:
        </div>

        <div class="col-md-2">
            <input type="text" style="width:120px;">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3 ">
            <div class="btn btn-danger">
                Submeter
            </div>
        </div>
    </div>

    <hr>
</body>