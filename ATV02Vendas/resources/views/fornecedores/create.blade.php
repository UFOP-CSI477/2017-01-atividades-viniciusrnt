@extends('principal')

@section('conteudo')



<div class="container">
  <h1>Cadastrar fornecedor</h1>
  <form action="/fornecedores" method="post">

    {{ csrf_field() }}

    <div class="row">
      <div class="col-md-4">
        Nome: <input type="text" name="nome" class="form-control"><br>
      </div>
      <div class="col-md-4">
        Nome fantasia: <input type="text" class="form-control" name="nomefantasia"><br>
      </div>
      <div class="col-md-4">
        Telefone: <input type="text" class="form-control" name="telefone">
      </div>
    </div>

    <input type="submit" name="botaoSalvar" value="Salvar" class="btn btn-success"><br><br>

  </form>


</div>


@endsection
