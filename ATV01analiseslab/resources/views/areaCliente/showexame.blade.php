@extends('inicio')

@section('conteudo')

<div class="container">
  <form class="" action="/analiseslab/test/{{$teste->id}}" method="post">

    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <br><label for="nome">Nome do procedimento: </label>
    <p>{{ $teste->procedure->name }}</p>

    <br><label for="preco">Data: </label>
    <p>{{ $teste->date }}</p>

    <input type="submit" name="" class="btn btn-danger" value="Confirmar exclusão">
    <br><br>
    <a href="/areacliente/dltlstexame" class="btn btn-success">Cancelar exclusão</a>

  </form>

</div>



@endsection
