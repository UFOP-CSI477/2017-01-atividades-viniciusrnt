@extends('cabecalho')

@section('titulo')
  Lista de procedimentos disponíveis
@endsection

@section('conteudo')
  <div id="tabela">
    <div class="container">
      <br>
      <a href="/" class="btn btn-primary"><i class="fa fa-home fa-lg"></i> Voltar ao menu principal</a>
      <br><br>
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th class="text-center">Nome do procedimento</th>
            <th class="text-center">Preço</th>
          </tr>
        </thead>

        <tbody>
          @foreach($procedimentos as $i)
          <tr>
            <td>{{$i->name}}</td>
            <td>R$ {{$i->price}}</td>
          </tr>
          @endforeach

        </tbody>

      </table>

    </div>
  </div>
@endsection
