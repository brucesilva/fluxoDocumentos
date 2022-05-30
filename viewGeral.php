<?php
require('conexao.php');

// aqui pego o usuário logado e trago só os documentos dele
$user = 'Bruce';

// Preparar a query de acordo com que usuário chegar aqui
$sqlCompras = "SELECT * FROM fluxodocumentos";
$sqlRh = "SELECT * FROM fluxodocumentos";
$sqlSesmt = "SELECT * FROM fluxodocumentos";
$sqlUser = "SELECT * FROM fluxodocumentos WHERE solicitante = :user";



$sql = $pdo->prepare($sqlUser);
$sql->bindValue(':user', $user);
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

// foreach ($result as $value => $documentos) {
//     echo $documentos['solicitante'] . " " . $documentos['empresa'] . "<br>";
// }

// echo "<pre>";
// print_r($result);
// echo "<pre>";

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

    <h1>Processo Geral</h1>

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


            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $value => $documentos) {
                // echo $documentos['solicitante'] . " " . $documentos['empresa'] . "<br>"; 
            ?>

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

                </tr>
            <?php } ?>
        </tbody>
    </table>


</body>

</html>