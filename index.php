<?php
session_start();
// echo "Bem vindo " . $_SESSION['user'];

// $validationSession = $_SESSION['user'];

// echo "Imprimindo o valor de validationSession " . $validationSession;

// if ($_SESSION['user'] == 'bruce') {
//     echo "Bem vindo Bruce";
// } else {
//     echo "Você não é o bruce";
// }

if (!isset($_SESSION['user'])) {
    header("location:login.php?s=fail");
    echo "<br> Vc tem permisão";
}


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
    <h1>Processo Solicitante</h1>

    <form action="solicitanteController.php" method="POST">

        <div class="row">
            <div class="col-md-2">
                Solicitante:
            </div>

            <div class="col-md-3">
                <input type="text" name="solicitante">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                Empresa
            </div>

            <div class="col-md-3">
                <input type="text" name="empresa">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                Data Entregue Compras:
            </div>

            <div class="col-md-3">
                <input type="text" name="dataEntregueCompras">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                P/ Usuário(a) compras:
            </div>

            <div class="col-md-3">
                <select name="entUsuarioCompras">
                    <option value="Maria Luiza Mozer">Maria Luiza Mozer</option>
                </select>
            </div>
        </div>


        <hr>
        <div class="row">
            <div class="col-md-3 ">
                <button class="btn btn-danger  ">
                    Submeter
                </button>
            </div>
        </div>
        <hr>

    </form><!-- fecha formulário -->


    <!-- Aqui vou fazer a parte de compras -->
    <h2>Processo Compras</h2>
    <div class="row">
        <div class="col-md-2" ">
        Compras Pronto:
    </div>

    <div class=" col-md-1">
            <select>
                <option value="1">Não</option>
                <option value="2">Sim</option>
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
    <!-- Aqui a parte do RH -->
    <h2>Processo RH</h2>
    <div class="row">
        <div class="col-md-2">
            Entregue para o RH:
        </div>

        <div class="col-md-1">
            <select>
                <option value="1">Laura</option>
                <option value="2">Marilsa</option>
                <option value="2">Gabriela</option>
            </select>
        </div>

        <div class="col-md-1">
            Data:
        </div>

        <div class="col-md-2">
            <input type="text" style="width:120px;"><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            RH Pronto:
        </div>

        <div class="col-md-1">
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

    <!-- Aqui a parte do SESMT -->
    <h2>Processo SESMT</h2>
    <div class="row">
        <div class="col-md-2">
            Entregue para o SESMT:
        </div>

        <div class="col-md-1">
            <select>
                <option value="1">Juliana</option>
                <option value="2">Marilsa</option>
                <option value="2">Gabriela</option>
            </select>
        </div>

        <div class="col-md-1">
            Data:
        </div>

        <div class="col-md-2">
            <input type="text" style="width:120px;"><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            SESMT Pronto:
        </div>

        <div class="col-md-1">
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

    <div class="row">
        <div class="col-md-2">
            Entregue na portaria:
        </div>

        <div class="col-md-1">
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
</body>

</html>