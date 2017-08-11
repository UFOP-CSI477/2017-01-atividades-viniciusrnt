@extends('cabecalho')

@section('titulo')
  Editar exame
@endsection

@section('conteudo')

<div class="container">
  <form action="/analiseslab/test/{{$teste->id}}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH')}}
    <br>
    <a href="/areaoperador" class="btn btn-primary"><i class="fa fa-home fa-lg"></i> Voltar ao menu principal</a>
    <br><br>
    <div class="row">
      <div class="col-md-5">
        <label for="nome">Nome do procedimento:</label>
        <div class="form-group">
          <select class="form-control" name="procedure_id" >
            <option value="0">Selecione...</option>
            @foreach($procedimentos as $p)
              <option value="{{ $p->id }}">{{$p->name}} - R$ {{$p->price}}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-5">
        <label for="nome">Data:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
          <input class="form-control" type="text" name="date" value="{{$teste->date}}">
        </div>
      </div>
    </div>

    <label for="nome">Nome do paciente: </label> {{Auth::user()->name}}

    <input value="{{Auth::user()->id}}" name="user_id" type="hidden">


    <br>



    <input type="submit" class="btn btn-success" name="botaoSalvar" value="Salvar dados">




  </form>
</div>



@endsection
