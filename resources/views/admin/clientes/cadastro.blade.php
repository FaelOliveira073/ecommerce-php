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
        <button class="btn btn-primary" onclick="location.href='/admin/clientes'">Voltar</button>
      </div>

    <div class="card">
        <h3>Cadastrar ou editar</h3>
            <form class="list" method="post" action="/admin/clientes/salvar">
                <input type="text" placeholder="Nome do cliente" name="nome" requeired/>
                <input name="email" type="email" placeholder="Email"/>
                <input name="data" type="date" placeholder="Data"/>
                <select name="perfil">
                    <option>Selecione o perfil</option>
                    <option value="1">VIP</optiom>
                    <option value="2">Normal</option>
                    <option value="3">Recorrente</option>
                </select>
            <button class="btn btn-primary" type="submit">Salvar cliente</button>
          </form>
        </div> 
      </section>
    </main>
</body>
</html>