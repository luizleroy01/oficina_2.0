<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orcamentos;
use Illuminate\Support\Facades\DB;

class ControladorOrcamento extends Controller
{
    /**
     * Exibe todos os recursos na tela principal
     */
    public function index(Request $request)
    {
        /**
         * Definição da query de busca em que ordena os resultados do orçamento
         * mais recente para o mais antigo
         */
        $orcamentos = DB::table('orcamentos')
        ->select('id','nome_cliente','nome_vendedor','descricao','preco')
        ->orderBy('data','DESC');

        /**
         * Para filtrar os dados das três formas necessárias através da própria query
         * de busca, assim temos 1-Filtrar por nome do cliente;2-Filtrar por nome do
         * vendedor;3-Filtrar por intervalo de dadtas
         */
        if($request->select_filter == 1){
            $orcamentos->where('nome_cliente','like',"%$request->nome_digitado%");
        }else if($request->select_filter == 2){
            $orcamentos->where('nome_vendedor','like',"%$request->nome_digitado%");
        }else if($request->select_filter == 3){
            $start= $request->data_inicio;
            $end= $request->data_fim;
            $orcamentos->whereBetween('data',array($start,$end));
        }
        $orcamentos=$orcamentos->get();
        return view('orcamentos.index',compact(['orcamentos']));
    }

    /**
     * Direciona para a página que contém o formuláriop de cadastro de orçamento
     */
    public function create()
    {
        return view('orcamentos.create')
        ->with('titulo','Cadastro de orçamento');
    }

    /**
     * Salva no banco de dados um novo recurso criado.
     */
    public function store(Request $request)
    {
        $orcamento = new Orcamentos();
        /**
         * Definição das frase que serão exibidas ao usuário na validação
         * das informações
         */
        $mensagens = [
            'nome_cliente.required'=>'O preenchimento do campo Nome é obrigatório',
            'data_orcamento.required'=>'O preenchimento da Data é obrigatório',
            'hora_orcamento.required'=>'O preenchimento da Hora é obrigatório',
            'nome_vendedor.required'=>'O preenchimento do campo Vendedor é obrigatório',
            'texto_descricao.required'=>'O preenchimento do campo Descrição é obrigatório',
            'preco_orcamento.required'=>'O preenchimento do campo Preço é obrigatório',
            'preco_orcamento.numeric'=>'O Valor digitado deve ser numérico',
            'preco_orcamento.min'=>'O Valor digitado deve ser maior ou igual a 0'
        ];
        /**
         * Definindo os tipos de validações
         */
        $request->validate([
            'nome_cliente'=>'required',
            'data_orcamento'=>'required',
            'hora_orcamento'=>'required',
            'nome_vendedor'=>'required',
            'texto_descricao'=>'required',
            'preco_orcamento'=>'required|numeric|min:0'

        ],$mensagens);

        /**
         * Salvando os dados vindos da requisição no banco de dados
         */
        $orcamento->nome_cliente = $request->input('nome_cliente');
        $orcamento->data = $request->input('data_orcamento');
        $orcamento->hora = $request->input('hora_orcamento');
        $orcamento->nome_vendedor = $request->input('nome_vendedor');
        $orcamento->descricao = $request->input('texto_descricao');
        $orcamento->preco = $request->input('preco_orcamento');
        $orcamento->save();
        return redirect()->route('index');
    }

    /**
     * Mostra os detalhes de um recurso específico, a funcionalidade Info
     */
    public function show(string $id)
    {
        $orcamento = Orcamentos::find($id);
        if(isset($orcamento)){
            return view('orcamentos.info',compact(['orcamento']))
            ->with('Titulo','Informações sobre o orçamento');
        }
    }

    /**
     * Direciona para a página que contem o formulário para edição
     * do orçamento
     */
    public function edit(string $id)
    {
        $orcamento = Orcamentos::find($id);
        if(isset($orcamento)){
            return view('orcamentos.edit',compact(['orcamento']))
            ->with('titulo','Editar orçamento');
        }
    }

    /**
     * Atualiza determinado recurso que é identificado pleo id no
     * banco de dados
     */
    public function update(Request $request, string $id)
    {
        $mensagens = [
            'nome_cliente.required'=>'O preenchimento do campo Nome é obrigatório',
            'data_orcamento.required'=>'O preenchimento da Data é obrigatório',
            'hora_orcamento.required'=>'O preenchimento da Hora é obrigatório',
            'nome_vendedor.required'=>'O preenchimento do campo Vendedor é obrigatório',
            'texto_descricao.required'=>'O preenchimento do campo Descrição é obrigatório',
            'preco_orcamento.required'=>'O preenchimento do campo Preço é obrigatório',
            'preco_orcamento.numeric'=>'O Valor digitado deve ser numérico',
            'preco_orcamento.min'=>'O Valor digitado deve ser maior ou igual a 0'
        ];
        /**
         * Definindo os tipos de validações
         */
        $request->validate([
            'nome_cliente'=>'required',
            'data_orcamento'=>'required',
            'hora_orcamento'=>'required',
            'nome_vendedor'=>'required',
            'texto_descricao'=>'required',
            'preco_orcamento'=>'required|numeric|min:0'

        ],$mensagens);
        $orcamento = Orcamentos::find($id);
        if(isset($orcamento)){
            $orcamento->nome_cliente = $request->input('nome_cliente');
            $orcamento->nome_vendedor = $request->input('nome_vendedor');
            $orcamento->descricao = $request->input('texto_descricao');
            $orcamento->preco = $request->input('preco_orcamento');
            $orcamento->save();
        }
        return redirect()->route('index');
    }

    /**
     * Responsável por remover um recurso do banco de dados
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
