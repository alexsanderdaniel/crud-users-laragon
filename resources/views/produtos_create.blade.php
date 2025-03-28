@extends('layouts.main_layout')

<link rel="stylesheet" href="{{asset('assets/css/produto_edit.css')}}" >

<!-- <div class="d-flex align-items-center p-3">
    <a href="{{ route('produtos.index') }}" class="text-black">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
        </svg>
    </a>
    <h2 class="px-3">Adicionar Produto</h2>
</div> -->

@if (session()->has('message'))
    {{session()->get('message')}}
@endif

<div class="container">
<form class="form" action="{{route('produtos.store')}}" method="post">
    @csrf

    <div class="form_column">
        <div class="form_row">
            <div class="form_group">
                <label for="codigo">Código:</label>
                <input type="text" id="codigo" placeholder="Código"
                    aria-label="Código">
            </div>
            <div class="form_group">
                <label for="descricao" class="fw-semibold px-2">Descrição:</label>
                <input id="descricao" type="text" placeholder="Descrição"
                    aria-label="Descrição">
            </div>
        </div>
        <div class="form_group">
            <label for="valor" class="fw-semibold align-self-center px-2" >Valor: </label>
            <input type="number" class="input_full" id="valor"
                placeholder="Valor" aria-label="Valor">
        </div>

        <div class="form_group">
            <label for="form-control" class="fw-semibold align-self-center px-2" >Url da Imagem: </label>
            <input type="text" id="form-control" class="input_full"
                placeholder="url_imagem" aria-label="url_imagem">
        </div>

    <button class="form_submit" type="submit">Adicionar</button>
    <a href="{{ route('produtos.index') }}" class="form_cancel">
        Cancelar
    </a>
</form>
</div>
