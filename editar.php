<?php
require('conexao.php');

$id = $_GET['id'];
// echo "O id passado foi " . $id; 
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
    <form action="updateSolicitanteController.php?id=<?= $id ?>" method="post">
        Entregue para a(o) do RH <input type="text" name="entRhPara" id=""> <br>
        Data Entregue para o RH <input type="text" name="dataEntRh" id=""> <br>
        <button class="btn btn-primary">Atualizar</button>
    </form>


</body>

</html>