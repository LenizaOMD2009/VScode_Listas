<?php
require_once 'Conexao.php'; #inclui o arquivo de conexão
$cliente = $conexao->query("select * from cliente;")->fetchAll(PDO::FETCH_ASSOC); #prepara o comando SQL 
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <div class="container py-4">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="card border">
          <div class="card-header">
            <h5 class="mb-0">Lista de Clientes</h5>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped table-hover table-bordered mb-0">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Nome completo</th>
                  <th>CPF</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($cliente as $key => $value) { ?>
                  <tr>
                    <td><?php echo $value['id_cliente'] ?></td>
                    <td><?php echo $value['nome'] ?></td>
                    <td><?php echo $value['sobrenome'] ?></td>
                    <td><?php echo $value['cpf'] ?></td>
                    <td><?php echo $value['rg'] ?></td>
                    <td><?php echo $value['ativo'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>


</html>