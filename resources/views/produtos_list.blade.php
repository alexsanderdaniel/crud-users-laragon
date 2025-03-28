@extends('layouts.main_layout')


<header class="header">
    <h2></h2>
</header>
<div>
<!-- <div class="d-flex justify-content-between align-items-center p-3">
    <h2 class="">Produtos</h2>
    <a class="text-decoration-none btn btn-outline-primary fw-semibold d-flex align-items-center gap-2" href="{{ route('produtos.create') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
    Adicionar Produto</a>
</div> -->
<h2 class="title">Separado especialmente para você...</h2>
<section class="contet">
    @foreach ($produtos as $produto)
        <div class="card">
            <img class="" src="{{ $produto->url_imagem }}" alt="{{ $produto->descricao }}" width="100">
            <div class="card_body">
                <p class="card_descricao">{{ $produto->descricao }}</p>
                <p class="card_preco">R$ {{ number_format($produto->valor, 2, ',', '.') }}</p>
            </div>
            <div class="card_footer">
                <a class="card_footer_button" href="{{ route('produtos.edit', ['produto' => $produto->id]) }}">Editar</a>
                <form action="{{ route('produtos.destroy', $produto) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="card_footer_button" type="submit">Excluir</button>
                </form>
            </div>
        </div>
    @endforeach
    <a class="card_novo" href="{{ route('produtos.create') }}">
        +
    </a>

</section>

</div>

