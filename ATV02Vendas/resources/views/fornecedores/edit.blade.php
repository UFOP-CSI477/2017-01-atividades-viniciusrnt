@extends('principal')

@section('conteudo')

<div class="container">
  <h1>Editar dados do fornecedor</h1>
  <form action="/fornecedores/{{$fornecedor->id}}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH')}}


    Nome: <input type="text" name="nome" maxlength="100" value="{{$fornecedor->nome}}" class="form-control">
    Nome fantasia: <input type="text" name="nomefantasia" value="{{$fornecedor->nomefantasia}}" class="form-control">
    Telefone: <input type="text" name="telefone" value="{{$fornecedor->telefone}}" class="form-control">
<br>
    <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-warning"><br><br>

  </form>
</div>
@endsection
