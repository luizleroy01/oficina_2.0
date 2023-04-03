@extends('layout.main')
{{-- Página referente ao formulário para edição do orçamento --}}
@section('body')
    <div>
        <form action ="/orçamentos/{{$orcamento->id}}" method = "POST" class="form-input">
            @csrf
            <table>
                <tr> <h2>{{$titulo}}</h2></tr>
                <br>
                <tr>
                    <td><label for ="nomeCliente">Nome:</label></td>
                    <td><input class ="campo" type = "text" name='nome_cliente' placeholder="Nome do cliente" value ="{{$orcamento['nome_cliente']}}"/></td>
                </tr>
                <tr>
                    <td><label for ="dataOrc">Data:</label></td>
                    <td><input class ="campo" type = "date" name='data_orcamento' value="{{$orcamento['data']}}"/></td>
                </tr>
                <tr>
                    <td><label for ="horaOrc">Hora:</label></td>
                    <td><input class ="campo" type = "time" name='hora_orcamento'value="{{$orcamento['hora']}}" /></td>
                </tr>
                <tr>
                    <td><label for ="nomecliente">Vendedor:</label></td>
                    <td><input class ="campo" type = "text" name='nome_vendedor' placeholder="Nome do vendedor" value = "{{$orcamento['nome_vendedor']}}"/></td>
                </tr>
                <tr>
                    <td><label for ="precoOrcamento">Valor:</label></td>
                    <td><input class="campo" type = "text" name='preco_orcamento' placeholder="ex:.100.00" value = "{{$orcamento['preco']}}"/></td>
                </tr>
            </table>
            <br>
            <textarea name="texto_descricao" rows="5" cols="70" >{{$orcamento['descricao']}}
            </textarea>
            <br>
            <input class = "bt-save" type = "submit" value ="salvar"/>
            <a class = "bt-cancel" href="/orçamentos">Cancelar</a>
        </form>
        @if ($errors->any())
        @foreach ($errors->all() as $item)
            <div class = "warning">
                {{$item}}
            </div>

        @endforeach
    @endif
    </div>


@endsection
