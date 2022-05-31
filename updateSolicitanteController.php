<?php
require('conexao.php');
require('models/solicitanteModel.php');

$entregueParaRh = $_POST['entRhPara'];
$dataEntregueRH = $_POST['dataEntRh'];
$id = $_GET['id'];

// echo "Entregue para a " . $entregueParaRh . "<br>";
// echo "Data entregue no RH " . $dataEntregueRH . "<br>";
// echo "O id passado foi o " . $id;

// primeiro eu instancio a classe, para mandar os gett e setts
$u = new solicitante();
$u->__set('rhEntreguePara', $entregueParaRh);
$u->__set('rhDataEntrega', $dataEntregueRH);
$u->__set('id', $id);
$result = $u->update($pdo);

echo "O valor do result é " . $result;
if ($result == 1) {

    header("location:solicitante.php");
}
