@extends('inicio')

@section('conteudo')

<div class="container">
  <form class="" action="/analiseslab/{{$procedimento->id}}" method="post">

    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <br><label for="nome">Nome do procedimento: </label>
    <p>{{ $procedimento->name }}</p>

    <br><label for="preco">Preço: </label>
    <p>R$ {{ $procedimento->price }}</p>

    <input type="submit" name="" class="btn btn-danger" value="Confirmar exclusão">
    <br><br>
    <a href="/areaadmin/deletelist" class="btn btn-success">Cancelar exclusão</a>

  </form>

</div>



@endsection
