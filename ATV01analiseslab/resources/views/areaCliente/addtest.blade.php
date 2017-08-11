@extends('cabecalho')

@section('titulo')
  Solicitar novo procedimento
@endsection

@section('conteudo')

<div class="container">
  <br>
  <a href="/areacliente" class="btn btn-primary"><i class="fa fa-home fa-lg"></i> Voltar ao menu principal</a>
  <form action="/analiseslab/test" method="post">
    {{ csrf_field() }}
    <br><br>
    <div class="row">
      <div class="col-md-5">
        <label for="nome">Nome do procedimento:</label>
        <div class="form-group">
          <select class="form-control" name="procedure_id">
            <option value="">Selecione...</option>
            @foreach($procedimentos as $p)
              <option value="{{ $p->id }}">{{$p->name}} - R$ {{$p->price}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-md-5">
        <label for="nome">Nome do paciente: </label><br>{{Auth::user()->name}}
      </div>

    </div>

    <div class="row">
      <div class="col-md-5">
        <label for="nome">Data:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
          <input class="form-control" type="text" name="date" placeholder="ex.: 2010-12-31">
        </div>
      </div>
    </div>
    <br>


    <input value="{{Auth::user()->id}}" name="user_id" type="hidden">


    <br>
    <input type="submit" class="btn btn-success" name="botaoSalvar" value="Salvar dados">




  </form>
</div>



@endsection
