@extends('layout.main')
{{-- Página index em que temos o formulário para filtragem e a tabela para
    exibição dos dados --}}
@section('body')
    <div >
        <h1 style = "text-align: center">Lista de Orçamentos</h1>
        <br>
        <br>
        <a class = "botoes bt-adicionar"  href="{{route('novo')}}">Novo orcamento</a>
        <br><br>
        @if (count($orcamentos)>0)
        <form action ="{{route('index')}}" method="GET" class="form-search">
            <table>
                <tr>
                    <td>
                        <label for="filtro">Filtar por: </label>
                    </td>
                    <td>
                        <select class="campo-busca" name="select_filter">
                            <option value="0">Todos os orçamentos</option>
                            <option value="1">Nome do cliente</option>
                            <option value="2" >Nome do vendedor</option>
                            <option value="3">Intervalo de datas</option>

                          </select>
                    </td>

                    <td>
                        <input class = "bt-save" type ="submit" value="buscar"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nome_digitado" name="NomeDigitado">Nome:</label>
                    </td>
                    <td>
                        <input class="campo-busca" type = "text" name="nome_digitado" placeholder = "cliente ou vendedor"/>
                    </td>
                    <td>
                        <label style="margin-left:10px;" for="data_inicio" name="dataInicio">Data Início:</label>
                    </td>
                    <td>
                        <input class="campo-busca" type="date" name="data_inicio"/>
                    </td>
                    <td>
                        <label style="margin-left:10px;" for="data_fim" name="dataFim">Data Fim:</label>
                    </td>
                    <td>
                        <input class="campo-busca" type="date" name="data_fim"/>
                    </td>
                </tr>
            </table>
        </form>
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
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome_cliente}}</td>
                    <td>{{$item->nome_vendedor}}</td>
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
