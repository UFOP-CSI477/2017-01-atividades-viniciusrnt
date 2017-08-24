@extends('principal')

@section('conteudo')

<div class="container">
  <h1>Visualizar forncedores</h1><br>
  <a href="/fornecedores/create" class="btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i> Adicionar novo fornecedor</a><br><br>

  <div class="container">

    <table class="table table-bordered table-hover">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Nome fantasia</th>
        <th>Telefone</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>

      @foreach($fornecedores as $f)
      <tr>
        <td>{{$f->id}}</td>
        <td>{{$f->nome}}</td>
        <td>{{$f->nomefantasia}}</td>
        <td>{{$f->telefone}}</td>
        <td><a href="/fornecedores/{{$f->id}}/edit" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
        <td><a href="/fornecedores/{{$f->id}}/" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>
      @endforeach

    </table>

  </div>

</div>

@endsection
