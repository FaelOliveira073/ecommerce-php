<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Produtos</title>
  <link rel="stylesheet" href="/assets_admin/css/style.css" />
  <script defer src="assets/js/script.js"></script>
</head>
<body>
  <div class="wrapper">
    <aside class="sidebar">
      <div class="logo"><span class="logo-badge">A</span><span>CesarShop Admin</span></div>
      <nav class="menu">
        <a href="/admin">Dashboard</a>
        <a class="active" href="/admin/produtos">Produtos</a>
        <a href="/admin/pedidos">Pedidos</a>
        <a href="/admin/clientes">Clientes</a>
        <a href="/admin/configuracoes">Configuracoes</a>
      </nav>
    </aside>

    <main class="content">
      <div class="notice">Acao simulada com sucesso. Conecte esta tela ao seu backend ou CMS.</div>
      <div class="top">
        <div><h1>Gestao de produtos</h1><p class="small">Cadastre itens, altere preco e acompanhe estoque.</p></div>
        <button class="btn btn-primary">Novo produto</button>
      </div>

      <section class="grid-main">
        <div class="card">
          <h3>Catalogo</h3>
          <table class="table">
            <thead><tr><th>Produto</th><th>Categoria</th><th>Preco</th><th>Estoque</th></tr></thead>
            <tbody>
              @foreach ($produtos as $produtos)
              <tr>
                <td>{{ $produtos->nome }}</td>
                <td>{{ $produtos->fkIdCategorias }}</td>
                <td>R$ {{ number_format($produtos->preco, 2, ',', '.') }}</td>
                <td>{{ $produtos->nome  }}</td></tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="card">
          <h3>Cadastrar ou editar</h3>
          <form class="list" method="post" action="/admin/produtos/salvar">
            <input type="text" placeholder="Nome do produto" name="nome" requeired/>
            <select name="categoria">
              <option>Selecione a categoria</option>
              <option value="1">César</optiom>
              <option value="2">Martado</option>
              <option value="3">???</option> 
            </select>
            <div class="grid-3">
              <input name="preco" type="text" placeholder="Preco"/>
              <input name="estoque" type="text" placeholder="Estoque"/>
              <input name="sku" type="text" placeholder="SKU"/>
            </div>
            <textarea placeholder="Descricao do produto"></textarea>
            <button class="btn btn-primary" type="submit">Salvar produto</button>
          </form>
        </div> 
      </section>
    </main>
  </div>
</body>
</html>
