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
            <thead>
              <tr>
                <th>Produto</th>
                <th>Categoria</th>
                <th>Preco</th>
                <th>Estoque</th>
                <th>Editar</th>
                <th>Excluir</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              @foreach ($produtos as $p)
                <td>{{ $p->nome }}</td>
                <td>{{ $p->fkIdCategoria }}</td>
                <td>R$ {{ number_format($p->preco, 2, ',', '.') }}</td>
                <td>{{ $p->estoque  }}</td>
                <td><a href="/admin/produtos/{{ $p->id }}">Editar</a></td>
                <td><a href="/admin/produtos/excluir{{ $p->id }}">Excluir</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="card">
          <h3>Cadastrar ou editar</h3>
          <form class="list" method="post" action="/admin/produtos/salvar">
            <input type="text" placeholder="Nome do produto" name="nome" value="{{isset($produto) ? $produto->nome : ''}}" require/>
            <select name="categoria">
              <option>Selecione a categoria</option>
              <option value="1" {{isset($produto) && $produto->fkIdCategoria == 1 ? 'selected' : ''}}>César</option>
              <option value="2" {{isset($produto) && $produto->fkIdCategoria == 2 ? 'selected' : ''}}>Martado</option>
              <option value="3" {{isset($produto) && $produto->fkIdCategoria == 3 ? 'selected' : ''}}>???</option> 
            </select>
            <div class="grid-3">
              <input name="preco" type="text" placeholder="Preco" value="{{isset($produto) ? $produto->preco : ''}}"/>
              <input name="estoque" type="text" placeholder="Estoque" value="{{isset($produto) ? $produto->estoque : ''}}"/>
              <input name="sku" type="text" placeholder="SKU" value="{{isset($produto) ? $produto->sku : ''}}"/>
            </div>
            <textarea placeholder="Descricao do produto" value="{{isset($produto) ? $produto->descricao : ''}}"></textarea>
            <button class="btn btn-primary" type="submit">Salvar produto</button>
          </form>
        </div> 
      </section>
    </main>
  </div>
</body>
</html>
