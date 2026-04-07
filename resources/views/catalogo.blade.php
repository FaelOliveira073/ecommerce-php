@extends("index")
@section("conteudo")
<main class="page-hero">
    <div class="container page-panel">
      <div class="section-head">
        <div>
          <h2>Catalogo completo</h2>
          <p>Use filtros visuais para destacar categorias, colecoes e campanhas sazonais.</p>
        </div>
      </div>

      <div class="catalog-toolbar">
        <input type="text" placeholder="Buscar produto" />
        <select><option>Todas as categorias</option><option>Moda</option><option>Tech</option><option>Acessorios</option></select>
        <select><option>Mais vendidos</option><option>Menor preco</option><option>Maior preco</option></select>
      </div>

      <div class="grid-4" style="margin-top:22px">
        @foreach ($produtos as $produtos)
        <article class="card"><img src="assets/img/product1.svg" alt=""><div class="product-body"><span class="tag">{{$produtos["categoria"]}}</span><h3>{{$produtos["nome"]}}</h3><div class="price" data-price={{$produtos["preco"]}}></div><div class="meta"><span>Pronta entrega</span><a href="produto">Ver detalhes</a></div></div></article>
        @endforeach
      </div>
    </div>
  </main>
@endsection
