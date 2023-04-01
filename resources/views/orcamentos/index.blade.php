@extends('layout.main')
@section('body')
    <div >
        <h1>Lista de Orçamentos:</h1>
        <a href="{{route('novo')}}">Adicionar novo orcamento</a>
        @if (count($orcamentos)>0)
        <table class = "table-index">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do cliente</th>
                    <th>Nome do vendedor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orcamentos as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['nome_cliente']}}</td>
                    <td>{{$item['nome_vendedor']}}</td>
                    <td>

                        <a class= "botoes bt-info" href="/orçamentos/info/{{$item->id}}">Info</a>
                        <a class ="botoes bt-edit" href="/orçamentos/editar/{{$item->id}}">Editar</a>
                        <a class ="botoes bt-erase" href="/orçamentos/excluir/{{$item->id}}">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        @else
            <h2>Não há registros de orçamentos</h2>
        @endif
    </div>
@endsection
