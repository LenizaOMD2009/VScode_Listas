<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista cliente</title>
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/cdn.css" rel="stylesheet">
</head>

<body>

  <form id="form">
    <div class="modal fade" id="cadastroCliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="cadastroClienteLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="cadastroClienteLabel">
              Cadastro Cliente
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-6 mt-3">
                <div class="form-floating mb-3">
                  <input type="search" class="form-control fs" id="nome" name="nome" placeholder="nome">
                  <label for="nome"><i class="fa-solid fa-magnifying-glass"></i>
                    Digite seu Nome
                  </label>
                </div>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-6 mt-3">
                    <div class="form-floating mb-3">
                      <input type="search" class="form-control fs" id="sobrenome" name="sobrenome" placeholder="sobrenome">
                      <label for="sobrenome"><i class="fa-solid fa-magnifying-glass"></i>
                        Digite seu Sobrenome
                      </label>
                    </div>
                  </div>
                  <div class="col-6 mt-3">
                    <div class="form-floating mb-3">
                      <input type="search" class="form-control fs" id="cpf" name="cpf" placeholder="cpf">
                      <label for="cpf"><i class="fa-solid fa-magnifying-glass"></i>
                        Digite seu CPF
                      </label>
                    </div>
                  </div>
                  <div class="col-6 mt-3">
                    <div class="form-floating mb-3">
                      <input type="search" class="form-control fs" id="rg" name="rg" placeholder="rg">
                      <label for="rg"><i class="fa-solid fa-magnifying-glass"></i>
                        Digite seu RG
                      </label>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                      <i class="fa-solid fa-ban"></i>
                      Cancelar
                    </button>
                    <button id="salvarRegistro" type="button" class="btn btn-success">
                      <i class="fa-solid fa-floppy-disk"></i>
                      Salvar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 mt-3 mb-3">
          <button type="button" class="btn btn-primary btn-sm btn-success" data-bs-toggle="modal"
            data-bs-target="#cadastroCliente"><i class="fa-solid fa-user-plus"></i>
            Novo Cliente
          </button>
        </div>
        <div class="col-12">
          <h1><i class="fa-regular fa-user"></i>
            Clientes Cadastrados
          </h1>
          <div class="col-6 mt-3">
            <div class="form-floating mb-3">
              <input type="search" class="form-control fs" id="pesquisa" name="pesquisa" placeholder="Pesquisar">
              <label for="pesquisa"><i class="fa-solid fa-magnifying-glass"></i>
                Digite seu Nome
              </label>
            </div>
          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th><i class="fa-solid fa-fingerprint"></i>Código</th>
                <th><i class="fa-solid fa-user"></i>Nome</th>
                <th><i class="fa-solid fa-user"></i>Sobre nome</th>
                <th><i class="fa-solid fa-id-card"></i>CPF</th>
                <th><i class="fa-solid fa-id-card"></i>RG</th>
                <th><i class="fa-solid fa-id-card"></i>Ativo</th>
                <th><i class="fa-solid fa-wrench"></i>Ação</th>
              </tr>
            </thead>
            <tbody id="listacliente"></tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
  <script src="/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="/js/cdn.js"></script>
  <script src="/js/listacliente.js"></script>
</body>

</html>