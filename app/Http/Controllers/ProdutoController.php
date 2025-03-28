<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public readonly Produto $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    public function index()
    {
        $produtos = $this->produto->all();
        return view('produtos_list',['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'url_imagem' => 'required|url',
        ]);

        Produto::create($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Produto $produto)
    {
        return view('produto_edit', ['produto' => $produto]);
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'codigo' => 'required',
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'url_imagem' => 'required|url',
        ]);

        $produto->update($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso.');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto deletado com sucesso.');
    }
}
