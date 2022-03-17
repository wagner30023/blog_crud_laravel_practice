<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Produto;

class CadastrarProdutoController extends Controller
{

    public function index()
    {
        $produto = Produto::all();
        return view('ver', ['produto' => $produto]);
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        return view('busca', ['produto' => $produto]);
    }

    public function create(Request $request)
    {
        // criando um produto no banco de dados

        //  método 1
        // $produto = new Produto;
        // $produto->nome = $request->nome;
        // $produto->valor = $request->valor;
        // $produto->estoque = $request->estoque;
        // $produto->save();

        //  método 2
        $produto = Produto::create([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque
        ]);

        return redirect()->back()->with('message', 'Produto cadastrado com sucesso');
    }

    public function updateForm($id)
    {
        $edit = Produto::find($id);
        // dd($edit);
        return view('editar', ['edit' => $edit]);
    }

    public function update(Request $request, $id)
    {
        $edit = Produto::find($id);
        $edit->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque
        ]);
        return redirect()->back()->with('message', 'Produto atualizado com sucesso');
    }

    public function formDelete($id)
    {
        $produto = Produto::find($id);
        return view('delete', compact('produto'));

    }

    public function delete($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return view('inicio')
            ->with('success', 'Produto excluído com sucesso');
    }
}
