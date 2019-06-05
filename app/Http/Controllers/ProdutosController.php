<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produtos;


class ProdutosController extends Controller
{
   

    public function index()
    {
        return Produtos::all();
    }

    public function show(Produtos $produto)
    {
        if ($produto!=null)
        {
            return $produto;
        
        }
    
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);
        
        
    
    }   

   public function store(Request $request)
    {
        $prod=json_encode($request->all());
        $produto = Produtos::create($request->all());

        return response()->json($produto, 201);
      // return var_dump($prod);
  
    }

    public function update(Request $request, Produtos $produto)
    {
        $produto->update($request->all());

        return response()->json($produto, 200);
    }

    public function destroy(Produtos $produto)
    {
        $produto->delete();

      //  return response()->json(null, 204);
      return response()->json("deletado");
    }
}

