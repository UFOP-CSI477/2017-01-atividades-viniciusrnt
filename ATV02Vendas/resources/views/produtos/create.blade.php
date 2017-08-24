@extends('principal')

@section('conteudo')
<div class="container">
  <h1>Inserir produto</h1>
  <form action="/produtos" method="post">

    {{ csrf_field() }}

    <div class="row">
      <div class="col-md-6">
        Nome: <input type="text" name="nome" class="form-control" maxlength="100"><br>
      </div>
      <div class="col-md-6">
        Preço: <input type="text" class="form-control" name="preco">
      </div>
    </div>


    <br><br>
    <input type="submit" name="botaoSalvar" class="btn btn-success" value="Salvar"><br><br>

  </form>
</div>

@endsection
