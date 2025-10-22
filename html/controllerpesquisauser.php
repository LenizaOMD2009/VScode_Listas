<?php

include_once 'Conexao.php';

$pesquisa = $_POST['pesquisa'];
$where = '';

if (!is_null($pesquisa) and !empty($pesquisa)) {
    $where = " WHERE nome ILIKE '%{$pesquisa}%' OR sobrenome ILIKE '%{$pesquisa}%' OR cpf ILIKE '%{$pesquisa}%'  OR rg ILIKE '%{$pesquisa}%'";
}

$sql = "SELECT * FROM cliente" . $where;

$query = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$response = [
    'status' => true,
    'data' => $query
];

echo json_encode($response);
