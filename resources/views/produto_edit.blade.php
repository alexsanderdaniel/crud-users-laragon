@extends('layouts.main_layout')

<link rel="stylesheet" href="{{asset('assets/css/produto_edit.css')}}" >
<!-- <div class="d-flex align-items-center p-3">
    <a href="{{ route('produtos.index') }}" class="text-black">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
        </svg>
    </a>
    <h2 class="px-3">Editar Produto</h2>
</div> -->

@if (session()->has('message'))
    {{session()->get('message')}}
@endif

<div class="container">
    <form action="{{route('produtos.update',['produto' => $produto->id]) }}" method="post"
        class="form">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <!-- <input type="text" name="codigo" value="{{$produto->codigo}}"> -->
    <div class="form_row">
        <img src="{{ $produto->url_imagem }}" alt="{{ $produto->descricao }}" width="100">

        <div class="form_column">
            <div class="form_row">
                <div class="form_group">
                    <label for="codigo">Código:</label>
                    <input type="text" id="codigo"value="{{$produto->codigo}}"
                        placeholder="Código" aria-label="Código">
                </div>
                <div class="form_group">
                    <label for="descricao">Descrição:</label>
                    <input id="descricao" type="text" value="{{$produto->descricao}}"
                        placeholder="Descrição" aria-label="Descrição">
                </div>
            </div>
            <div class="form_group">
                <label for="valor" >Valor: </label>
                <input type="number" class="input_full" id="valor"
                    value="{{$produto->valor}}" placeholder="Valor"
                    aria-label="Valor">
            </div>
            <div class="form_group">
                <label for="form-control">Url da Imagem: </label>
                <input type="text" id="form-control" class="input_full" name="url_imagem" value="{{$produto->url_imagem}}" placeholder="url_imagem" aria-label="url_imagem" aria-describedby="basic-addon1">
            </div>

            <button class="form_submit" type="submit">Editar</button>
            <a href="{{ route('produtos.index') }}" class="form_cancel">
                Cancelar
            </a>
        </div>

    </form>
</div>

