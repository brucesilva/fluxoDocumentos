<?php
session_start();

require('conexao.php');

// echo "Bem vindo " . $_SESSION['user'];

// $validationSession = $_SESSION['user'];

// echo "Imprimindo o valor de validationSession " . $validationSession;

// if ($_SESSION['user'] == 'bruce') {
//     echo "Bem vindo Bruce";
// } else {
//     echo "Você não é o bruce";
// }

if (!isset($_SESSION['user'])) {
    header("location:index.php?s=fail");
    echo "<br> Vc tem permisão";
}


$user = $_SESSION['user'];
$sqlUser = "SELECT * FROM fluxodocumentos WHERE solicitante = :user order by idsolicitante desc ";

$sql = $pdo->prepare($sqlUser);
$sql->bindValue(':user', $user);
$sql->execute();
unset($pdo);
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Fluxo Doc. Terceiro</title>
</head>

<body>
    <!-- <h1>Processo Solicitante</h1> -->

    <form action="solicitanteController.php?solicitante=<?= $_SESSION['user'] ?>" method="POST">

        <table class="table  table-secondary">
            <thead>
                <tr class="table-secondary">
                    <th scope="col">Solicitante</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Data Entregue Compras</th>
                    <th scope="col">P/ Usuário</th>
                    <th scope="col">Cadastrar</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row"><?= $_SESSION['user'] ?></th>
                    <td><input type="text" name="empresa"></td>
                    <td><input type="text" name="dataEntregueCompras"></td>
                    <td>
                        <select name="entUsuarioCompras">
                            <option value="Maria Luiza Mozer">Maria Luiza Mozer</option>
                        </select>
                    </td>

                    <th>
                        <button class="btn btn-danger  ">
                            Submeter
                        </button>
                    </th>
                </tr>
            </tbody>
        </table>

    </form><!-- fecha formulário -->


    <table class="table table-striped table-dark">
        <thead>



            <tr>
                <th scope="col">#</th>
                <th scope="col">Solicitante</th>
                <th scope="col">Empresa</th>
                <th scope="col">Ent. Dia</th>
                <th scope="col">Ent. Para</th>
                <th scope="col">CP Pronto</th>
                <th scope="col">Data</th>
                <!-- entregando para o RH -->
                <th scope="col">Ent. RH P/</th>
                <th scope="col">Data Ent.</th>

                <!-- Entregue para o RH  -->
                <th scope="col">RH Pronto</th>
                <th scope="col">Data</th>

                <!-- entregue para o sesmt -->
                <th scope="col">Ent. P/ Sesmt</th>


                <!-- SESMT PRONTO -->
                <th scope="col">Pronto </th>
                <th scope="col">Data</th>
                <th scope="col">Ent. Portaria</th>
                <th scope="col">Data</th>




                <!-- aqui se a data de compras estiver ok, abro um link para a pessoa cadastrar para quem ele levou 
                no rh -->


                <th class="editar" scope="col">Editar</th>

                <?php
                foreach ($result as $value => $documentos) {
                    // echo $documentos['solicitante'] . " " . $documentos['empresa'] . "<br>";  
                    if ($documentos['comprasProntoData'] != '') {

                ?>

                    <?php } ?>

            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row">
                    <?= $documentos['idSolicitante']; ?>
                </th>
                <td>
                    <?= $documentos['solicitante']; ?>
                </td>

                <td>
                    <?= $documentos['empresa']; ?>
                </td>

                <td>
                    <?= $documentos['dataEntSolicitante']; ?>
                </td>

                <td>
                    <?= $documentos['entParaCompras']; ?>
                </td>

                <td>
                    <?= $documentos['comprasPronto']; ?>
                </td>

                <td>
                    <?= $documentos['comprasProntoData']; ?>
                </td>

                <td>
                    <?= $documentos['rhEntreguePara']; ?>
                </td>

                <td>
                    <?= $documentos['rhDataEntrega']; ?>
                </td>

                <td>
                    <?= $documentos['rhPronto']; ?>
                </td>

                <td>
                    <?= $documentos['rhProntoData']; ?>
                </td>

                <td>
                    <?= $documentos['rhEntSesmtPara']; ?>
                </td>


                <td>
                    <?= $documentos['sesmtPronto']; ?>
                </td>

                <td>
                    <?= $documentos['sesmtProntoData']; ?>
                </td>

                <td>
                    <?= $documentos['sesmtEntPortaria']; ?>
                </td>

                <td>
                    <?= $documentos['sesmtEntPortariaData']; ?>
                </td>

                <!-- aqui se a data de compras estiver ok, abro um link para a pessoa cadastrar para quem ele levou 
                no rh -->

                <?php if ($documentos['comprasProntoData'] != '') {
                        if ($documentos['rhEntreguePara'] == '') { ?>
                        <td>
                            <a class="editar" href="editar.php?id=<?= $documentos['idSolicitante'] ?>">Editar</a>
                        </td>
                <?php }
                    } ?>
            </tr>
        <?php } ?>
        </tbody>
    </table>















    <!-- ************Estou escondendo essa parte para baixo -->
    <div class=" esconder">
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


    </div><!-- fecha div esconder -->
</body>

</html>