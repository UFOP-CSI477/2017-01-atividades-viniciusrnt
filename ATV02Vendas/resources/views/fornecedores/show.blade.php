@extends('principal')

@section('conteudo')
<h1>Excluir fornecedor</h1>
<a href="/fornecedor">Voltar</a>

<p>ID: {{ $fornecedor->id }}</p>
<p>Nome: {{ $fornecedor->nome }}</p>
<p>Nome fantasia: {{ $fornecedor->nomefantasia }}</p>

<form action="/fornecedores/{{ $fornecedor->id }}" method="post">

  {{ csrf_field() }}
  {{ method_field('DELETE') }}

  <input type="submit" value="Confirmar exclusão">

</form>

@endsection
