<?php

// $select = $_POST['teste'];
// // $nome = $_POST['nome'];


// $comprasPronto = $_POST['pronto'];
// $prontoData = $_POST['prontoData'];
$pronto = $_POST['pronto'];
$prontoDatas = $_POST['prontoData'];
// $id = $_POST['id'];

foreach ($prontoDatas as $id => $prontoData) {

    echo "id " . $id . " <br>";
    echo "Pronto data " . $prontoData . " <br>";

    // 
}

// echo "ID --> " . $id . "<br>";
echo "Pronto sim ou não --> " . $pronto[0] . "<br>";
echo "Data --> " . $prontoDatas[0] . "<br>";
// echo "Data que foi finalizado --> " . $prontoData;

// $idade = $_GET['idade'];
// $nome = $_GET['nome'];
// $id = $_GET['id'];


echo "<pre>";
print_r($_POST);
echo "<pre>";
