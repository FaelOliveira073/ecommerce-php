<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Pedidos</title>
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
        <a class="active" href="/admin/pedidos">Pedidos</a>
        <a href="/admin/clientes">Clientes</a>
        <a href="/admin/configuracoes">Configuracoes</a>
      </nav>
    </aside>

    <main class="content">
      <div class="top">
        <div><h1>Pedidos</h1><p class="small">Acompanhe status, pagamento e expedicao.</p></div>
        <input class="search" type="text" placeholder="Buscar por numero do pedido" />
      </div>

      <section class="card">
        <table class="table">
          <thead><tr><th>Pedido</th><th>Data</th><th>Cliente</th><th>Status</th><th>Total</th></tr></thead>
          <tbody>
            <tr><td>#10528</td><td>01/04/2026</td><td>Mariana Alves</td><td><span class="pill success">Pago</span></td><td>R$ 519,90</td></tr>
            <tr><td>#10527</td><td>01/04/2026</td><td>Lucas Silva</td><td><span class="pill warning">Separando</span></td><td>R$ 289,90</td></tr>
            <tr><td>#10526</td><td>31/03/2026</td><td>Rafaela Costa</td><td><span class="pill danger">Aguardando</span></td><td>R$ 769,80</td></tr>
            <tr><td>#10525</td><td>31/03/2026</td><td>Pedro Lima</td><td><span class="pill success">Enviado</span></td><td>R$ 199,90</td></tr>
            <tr><td>#10524</td><td>30/03/2026</td><td>Ana Melo</td><td><span class="pill success">Concluido</span></td><td>R$ 349,90</td></tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
</body>
</html>
