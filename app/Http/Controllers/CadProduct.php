<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CadProduct extends Controller
{


    public function create()
    {
return view('produtos.products');
    }


    public function store(Request $request)
    {
           Produto::create([
               'nome' => $request->nome,
               'codigo'=> $request->codigo,
               'valor'=> $request->valor,
               'quantidade'=> $request->quantidade,
           ]);
           return "Produto criado com sucesso";
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id){

        $produto =Produto::FindOrFail($id);
        $produto->update([
            'nome' => $request->nome,
               'codigo'=> $request->codigo,
               'valor'=> $request->valor,
               'quantidade'=> $request->quantidade,
        ]);
        return "Produto atualizado com sucesso";

    }

    public function delete($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }

}
