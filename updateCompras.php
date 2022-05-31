<?php

// $select = $_POST['teste'];
// // $nome = $_POST['nome'];


$comprasPronto = $_POST['pronto'];
$prontoData = $_POST['prontoData'];
// $id = $_GET['id'];

echo "ESTÁ PRONTO --> " . $comprasPronto . "<br>";
echo "Data que foi finalizado --> " . $prontoData;

// $idade = $_GET['idade'];
// $nome = $_GET['nome'];
// $id = $_GET['id'];


echo "<pre>";
print_r($_POST);
echo "<pre>";
