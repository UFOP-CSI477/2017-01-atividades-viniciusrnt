@extends('cabecalho')

@section('titulo')
  Adicionar novo procedimento
@endsection

@section('conteudo')

<div class="container">
  <br>
  <a href="/areaadmin" class="btn btn-primary"><i class="fa fa-home fa-lg"></i> Voltar ao menu principal</a>
  <form action="/analiseslab" method="post">
    {{ csrf_field() }}
    <br><br>
    <div class="row">
      <div class="col-md-5">
        <label for="nome">Nome do procedimento:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-certificate fa-fw"></i></span>
          <input class="form-control" type="text" name="name" placeholder="ex.: Glicemia">
        </div>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-5">
        <label for="nome">Preço:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-usd fa-fw"></i></span>
          <input class="form-control" type="text" name="price" placeholder="ex.: 10.00">
        </div>
      </div>
    </div>
    <input class="form-control" type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <br>
    <input type="submit" class="btn btn-success" name="botaoSalvar" value="Salvar dados">




  </form>
</div>



@endsection
