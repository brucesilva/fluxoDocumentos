<?php
session_start();
require('conexao.php');


// aqui estou verificando o usuário, e mostro só para a compradora
if ($_SESSION['user'] != 'maria') {
    if ($_SESSION['page']) {
        header('location:' . $_SESSION['page']);
    } else {
        header('location:index.php?s=fail');
    }
}

// if (!isset($_SESSION['user'])) {
//     header("location:index.php?s=fail");
//     echo "<br> Vc tem permisão";
// }

echo "O sessão e " . $_SESSION['user'];

$sql = $pdo->query("SELECT * FROM  fluxodocumentos");
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

    <h1>Processo Compras</h1>


    <form action="updateCompras.php" method="POST">

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
                            <select name="pronto">
                                <option value="Não">
                                    Não
                                </option>

                                <option value="Sim">
                                    Sim
                                </option>
                            </select>
                        </td>

                        <td>
                            <input type="text" name="prontoData" style="width: 105px;">
                        </td>

                        <td>
                            <button type="submit" class="btn btn-danger" style="height:30px; line-height:10px ;">
                                Enviar
                            </button>

                        </td>
                    </tr>
                <?php } ?>

    </form> <!-- fecha form -->
    </tbody>
    </table>

</body>

</html>