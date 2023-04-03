@extends('layout.main')
{{-- Página referente ao formulário para cadastro de orçamento --}}
@section('body')
    <div>
        <form action ="/orçamentos" method = "post" class="form-input">
            @csrf
            <table>
                <tr> <h2>{{$titulo}}</h2></tr>
                <br>
                <tr>
                    <td><label for ="nomeCliente">Nome:</label></td>
                    <td><input class ="campo" type = "text" name='nome_cliente' placeholder="Nome do cliente"/></td>
                </tr>
                <tr>
                    <td><label for ="dataOrc">Data:</label></td>
                    <td><input class ="campo" type = "date" name='data_orcamento'/></td>
                </tr>
                <tr>
                    <td><label for ="horaOrc">Hora:</label></td>
                    <td><input class ="campo" type = "time" name='hora_orcamento' /></td>
                </tr>
                <tr>
                    <td><label for ="nomeVendedor">Vendedor:</label></td>
                    <td><input class ="campo" type = "text" name='nome_vendedor' placeholder="Nome do vendedor"/></td>
                </tr>
                <tr>
                    <td><label for ="precoOrcamento">Valor:</label></td>
                    <td><input class="campo" type = "text" name='preco_orcamento' placeholder="ex:.100,00"/></td>
                </tr>
            </table>
            <br>
            <textarea name="texto_descricao" rows="5" cols="77">Descreva aqui os detalhes do orcamento
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
