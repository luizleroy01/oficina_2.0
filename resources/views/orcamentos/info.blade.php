@extends('layout.main')
{{-- Página referente a tabela com todas as informaç~~oes sobre os orçamentos --}}
@section('body')
    <div class ="informacoes">
        <h1 style ="padding:10px;">{{$Titulo}}</h1>
        <table class = "table-info">
            <tr>
                <td class ="td-dados">Nome do cliente</td>
                <td class ="td-dados">{{$orcamento->nome_cliente}}</td>
            </tr>
            <tr>
                <td class ="td-dados">Data</td>
                <td class ="td-dados">{{$orcamento->data}}</td>
            </tr>
            <tr>
                <td class ="td-dados">Hora</td>
                <td class ="td-dados">{{$orcamento->hora}}</td>
            </tr>
            <tr>
                <td class ="td-dados">Nome do vendedor</td>
                <td class ="td-dados">{{$orcamento->nome_vendedor}}</td>
            </tr>
            <tr>
                <td class ="td-dados">Preço</td>
                <td class ="td-dados">{{$orcamento->preco}}</td>
            </tr>
            <tr>
                <td class ="td-dados">Descrição</td>
                <td class ="td-dados"><p>{{$orcamento->descricao}}</p></td>
            </tr>
        </table>
        <br>
        <hr>
        <br>
        <a class = "bt-cancel" href="/orçamentos">Voltar</a>
    </div>
@endsection
