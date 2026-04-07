<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Clientes</title>
  <link rel="stylesheet" href="/assets_admin/css/style.css" />
  <script defer src="assets/js/script.js"></script>
</head>
<body>
  <div class="wrapper">
    <aside class="sidebar">
      <div class="logo"><span class="logo-badge">A</span><span>CesarShop Admin</span></div>
      <nav class="menu">
        <a href="/admin">Dashboard</a>
        <a href="/admin/produtos">Produtos</a>
        <a href="/admin/pedidos">Pedidos</a>
        <a class="active" href="/admin/clientes">Clientes</a>
        <a href="/admin/configuracoes">Configuracoes</a>
      </nav>
    </aside>

    <main class="content">
      <div class="top">
        <div><h1>Clientes</h1><p class="small">Base de compradores e relacionamento.</p></div>
        <button class="btn btn-primary" onclick="location.href='/admin/clientes/cadastro'">Novo clientes</button>
      </div>

      <section class="grid-3">
        <div class="card"><h3>Clientes ativos</h3><div class="value" style="font-size:2rem;font-weight:800">2.431</div><p class="small">Com compras nos ultimos 90 dias</p></div>
        <div class="card"><h3>Taxa de retorno</h3><div class="value" style="font-size:2rem;font-weight:800">38%</div><p class="small">Clientes recorrentes</p></div>
        <div class="card"><h3>Ticket medio</h3><div class="value" style="font-size:2rem;font-weight:800">R$ 317</div><p class="small">Media por pedido</p></div>
      </section>

      <section class="card" style="margin-top:18px">
        <table class="table">
          <thead>
            <tr>
              <th>Cliente</th>
              <th>Email</th>
              <th>Ultima compra</th>
              <th>Perfil</th>
              <th>Excluir</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            @foreach ($clientes as $c)
            <td>{{ $c->nome }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->data }}</td>
            <td>{{ $c->perfil }}</td>
            <td> <a href="/admin/clientes/excluir/{{$c->id}}">Excluir</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </section>
    </main>
  </div>
</body>
</html>
