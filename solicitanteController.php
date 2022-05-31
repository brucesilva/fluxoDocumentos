<?php
require('conexao.php');
require('models/solicitanteModel.php');



// $solicitante = $_POST['solicitante'];
$solicitante = $_GET['solicitante'];
$empresa = $_POST['empresa'];
$dataEntregueCompras = $_POST['dataEntregueCompras'];
$entUsuarioCompras = $_POST['entUsuarioCompras'];

// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

// echo "Solicitante => " . $solicitante .  " <br> Empresa => " . $empresa . "<br> Data Entregue => " . $dataEntregueCompras . "<br> Entregue para " . $entUsuarioCompras . "<br>";

// echo "Na classe solicitanteController o solicitante é o " . $solicitante;

// primeiro eu instancio a classe, para mandar os gett e setts
$s = new solicitante();
$s->__set('solicitante', $solicitante);
$s->__set('empresa', $empresa);
$s->__set('data', $dataEntregueCompras);
$s->__set('entregueParaUsuario', $entUsuarioCompras);

// depois eu jogo os dados para a função
$resultado = $s->insert($pdo);

// if ($resultado == 1) {
//     header("location:viewCompras.php");
// }
if ($resultado == 1) {
    header("location:solicitante.php");
}
