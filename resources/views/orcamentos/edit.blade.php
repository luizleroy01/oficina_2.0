@extends('layout.main')
@section('body')
    <form action ="/orçamentos" method = "post">
        <table>
            <tr> <h2>{{$titulo}}</h2></tr>
            <br>
            <tr>
                <td><label for ="nomeCliente">Nome:</label></td>
                <td><input class ="campo" type = "text" name='nome_cliente' placeholder="Nome do cliente" value ="{{$orcamento['nome_cliente']}}"/></td>
            </tr>
            <tr>
                <td><label for ="nomecliente">Vendedor:</label></td>
                <td><input class ="campo" type = "text" name='nome_cliente' placeholder="Nome do vendedor" value = "{{$orcamento['nome_vendedor']}}"/></td>
            </tr>
            <tr>
                <td><label for ="precoOrcamento">Valor:</label></td>
                <td><input class="campo" type = "text" name='preco_orcamento' placeholder="ex:.100.00" value = "{{$orcamento['preco']}}"/></td>
            </tr>
        </table>
        <br>
        <textarea name="texto_descricao" rows="5" cols="70" value = "{{$orcamento['descricao']}}">Descreva aqui os detalhes do orcamento
        </textarea>
        <br>
        <input class = "bt-save" type = "submit" value ="salvar"/>
        <a class = "bt-cancel" href="/orçamentos">Cancelar</a>
    </form>

@endsection
