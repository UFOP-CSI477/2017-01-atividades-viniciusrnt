@extends('principal')

@section('conteudo')

<div class="container">
  <h1>Adicionar entrada</h1>

  <form action="/entradas" method="post">

    {{ csrf_field() }}

    <div class="row">
      <div class="col-md-6">
        Produtos:
        <select class="form-control" name="produto_id">
          <option value="0">Selecione...</option>
          @foreach($produtos as $p)
          <option value="{{$p->id}}">{{$p->nome}}</option>
          @endforeach
        </select>
      </div>

      <div class="col-md-6">
        Fornecedores:
        <select class="form-control" name="fornecedores_id">
          <option value="0">Selecione...</option>
          @foreach($fornecedores as $p)
          <option value="{{$p->id}}">{{$p->nome}}</option>
          @endforeach
        </select>
      </div>

    </div>

    <br>Quantidade: <input type="text" class="form-control" name="quantidade" value="">
    <br>
    <input type="submit" name="botaoSalvar" class="btn btn-success" value="Salvar"><br><br>

  </form>
</div>


@endsection
