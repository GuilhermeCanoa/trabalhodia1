<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = DB::table('produtosgv')->get();

        return view('produto.vitrine', ['produtos' => $produtos]);
        
    }

    public function create()
    {
       return view('produto.create');
    }

    public function store(Request $request)
    {   
   
     Produto::create(['nome_produto'=> $request->nome, 'preco_produto'=>$request->preco, 'imagem_produto'=>'imagem_televisao', 'descricao_produto' => $request->descricao]);

     return 'produto cadastrado com sucesso';

    }

    public function show($id)
    {
        $produto = Produto::find($id);

        return view('produto.show', ['produto' => $produto]);
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
