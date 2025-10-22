<?php
require_once 'Conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$ativo = $_POST['ativo'];

$sql = "INSERT INTO cliente (nome, sobrenome , cpf , rg, ativo) VALUES ('{$nome}', '{$sobrenome}','{$cpf}','{$rg}')";

$result = $conexao->exec($sql);
if ($result) {
    $response = [
      'msg' => 'Cliente cadastrado com sucesso!',
      'status' => true
    ];
    echo json_encode($response);
    die;
};
$response = [
    'msg' => 'Restrição em fazer o cadastro!',
    'status' => false,
];
    echo json_encode($response);


