<?php
require('conexao.php');

$sql = $pdo->query("SELECT * FROM  fluxodocumentos");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "<pre>";

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

    <h1>Processo Compras</h1>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Solicitante</th>
                <th scope="col">Empresa</th>
                <th scope="col">Entregue Dia</th>
                <th scope="col">Entregue Para</th>
                <th scope="col">Compras Pronto</th>
                <th scope="col">Data</th>
                <th scope="col">Enviar</th>

            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row">2</th>
                <td>Bruce</td>
                <td>XYZ</td>
                <td>@30/05/2022</td>
                <td>Juliana</td>
                <td>
                    <select>
                        <option value="1">
                            Sim
                        </option>

                        <option value="2">
                            Não
                        </option>
                    </select>
                </td>

                <td>
                    <input type="text" name="prontoData" style="width: 105px;">
                </td>

                <td>
                    <button class="btn btn-primary" style="height:30px; line-height:10px ;">Finalizar</button>
                </td>
            </tr>

        </tbody>
    </table>


</body>

</html>