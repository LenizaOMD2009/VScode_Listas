const salvarRegistro = document.getElementById('salvarRegistro');
const Pesquisar = document.getElementById('pesquisa');
async function Insert() {
    const form = document.getElementById('form');
    if (!form) {
        alert('Formulário com os dados não encontrado!');
        return;
    }
    const formData = new FormData(form);
    const option = {
        method: 'POST',
        body: formData,
        mode: 'cors',
        cache: 'default'
    };
    const response = await fetch('controllercliente.php', option);
    return await response.json();
}

async function Pesquisa() {
    const form = document.getElementById('form');
    if (!form) {
        alert('Formulário com os dados não encontrado!');
        return;
    }
    const formData = new FormData(form);
    const option = {
        method: 'POST',
        body: formData,
        mode: 'cors',
        cache: 'default'
    };
    const response = await fetch('controllerpesquisauser.php', option);
    const query = await response.json();
    let html = '';
    query.data.forEach(element => {
        html += `
            <tr>
                <td>${element.id}</td>
                <td>${element.nome}</td>
                <td>${element.sobrenome}</td>
                <td>${element.cpf}</td>
                <td>${element.rg}</td>
                <td>
                  <button class="btn btn-primary btn-sm btn-warning"><i
                  class="fa-solid fa-pen"></i>Editar</button>
                  <button class="btn btn-danger btn-sm btn-danger"><i
                  class="fa-solid fa-trash"></i>Excluir</button>
                </td>
            </tr>
        `;
    });

    document.getElementById('listacliente').innerHTML = '';
    document.getElementById('listacliente').innerHTML = html;
}

salvarRegistro.addEventListener('click', async () => {
    const response = await Insert();
    if (!response.status) {
        alert(response.msg);
        return;
    }
    alert(response.msg);
    await Pesquisa();

    const modalElement = document.getElementById('cadastroCliente');
    const modal = bootstrap.Modal.getInstance(modalElement) || bootstrap.Modal.getOrCreateInstance(modalElement);
    modal.hide();
});



document.addEventListener('DOMContentLoaded', async () => {
    await Pesquisa();
});
Pesquisar.addEventListener('keypress', async () => {
    await Pesquisa();
});
