<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produto;

class CadProduct extends Controller
{


    public function create()
    {
return view('produtos.products');
    }


    public function store(Request $request) //cria um novo
    {
           Produto::create([
               'nome' => $request->nome,
               'codigo'=> $request->codigo,
               'valor'=> $request->valor,
               'quantidade'=> $request->quantidade,
           ]);

           return view('produtos.products');
    }

    public function show($id){ //exibe um novo
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit($id){ // edita
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id){//atualiza

        $produto =Produto::FindOrFail($id);
        $produto->update([
            'nome' => $request->nome,
               'codigo'=> $request->codigo,
               'valor'=> $request->valor,
               'quantidade'=> $request->quantidade,
        ]);
        return "Produto atualizado com sucesso";

    }

    public function delete($id){ //deleta
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }

    public function destroy( $id){//deleta

        $produto =Produto::FindOrFail($id);
        $produto->delete();
        return "Produto excluido com sucesso";

    }
     public function search(Request $request){
         $search = request('search');

         if($search){
            $produto = DB::table('produtos')
            ->where('codigo', '=', $search)
            ->get();


         }



     return ['produto' => $produto];
   }


}
