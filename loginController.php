<?php
session_start();
require('conexao.php');
require('models/loginModel.php');


// pegando os dados do formulário
$user = $_POST['user'];
$pass = $_POST['pass'];

$l = new login();
// quando eu for pegar no model, preciso pegar com esse nome q estou passando no set
$l->__set('user', $user);
$l->__set('pass', $pass);
$result = $l->verifyLogin($pdo);

// echo "O resultado retornado foi " . $result;
if ($result == 0) {
    $_SESSION['user'] = $user;
    $_SESSION['page'] = 'solicitante.php';
    header("location:solicitante.php");
} else {
    header("location:index.php?p=fail");
}
