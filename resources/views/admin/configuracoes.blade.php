<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Configuracoes</title>
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
        <a href="/admin/clientes">Clientes</a>
        <a class="active" href="/admin/configuracoes">Configuracoes</a>
      </nav>
    </aside>

    <main class="content">
      <div class="notice">Configuracoes salvas em modo demonstrativo.</div>
      <div class="top">
        <div><h1>Configuracoes</h1><p class="small">Preferencias da loja, notificacoes e integracoes.</p></div>
      </div>

      <section class="settings-grid">
        <div class="card">
          <h3>Informacoes da loja</h3>
          <form class="list">
            <input type="text" placeholder="Nome da loja" value="NovaShop" />
            <input type="email" placeholder="Email comercial" value="contato@novashop.com" />
            <input type="text" placeholder="Telefone" value="+55 11 4000-0000" />
            <textarea placeholder="Descricao institucional">Loja moderna com foco em experiencia, branding e conversao.</textarea>
            <button class="btn btn-primary" type="submit">Salvar informacoes</button>
          </form>
        </div>

        <div class="card">
          <h3>Operacao</h3>
          <form class="list">
            <select><option>Moeda BRL</option><option>USD</option><option>EUR</option></select>
            <select><option>Notificacoes por email ativas</option><option>Desativadas</option></select>
            <select><option>Frete padrao</option><option>Retirada em loja</option><option>Entrega expressa</option></select>
            <button class="btn btn-primary" type="submit">Salvar preferencias</button>
          </form>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
