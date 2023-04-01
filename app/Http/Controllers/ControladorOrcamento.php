<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orcamentos;

class ControladorOrcamento extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orcamentos = Orcamentos::all();
        return view('orcamentos.index',compact(['orcamentos']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orcamentos.create')
        ->with('titulo','Cadastrar orçamento:');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orcamento = new Orcamentos();
        $orcamento->nome_cliente = $request->input('nome_cliente');
        $orcamento->data_hora = date('d-m-y H:i:s');
        $orcamento->nome_vendedor = $request->input('nome_vendedor');
        $orcamento->descricao = $request->input('texto_descricao');
        $orcamento->preco = $request->input('preco_orcamento');
        $orcamento->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orcamento = Orcamentos::find($id);
        if(isset($orcamento)){
            return view('orcamentos.edit',compact('orcamento'))
            ->with('titulo','Editar orçamento:');
        }
        return redirect()->route('index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orcamento = Orcamentos::find($id);
        if(isset($orcamento)){
            $orcamento->delete();
        }
        return redirect()->route('index');
    }
}
