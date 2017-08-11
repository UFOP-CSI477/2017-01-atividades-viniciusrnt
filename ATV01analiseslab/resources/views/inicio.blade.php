@extends('cabecalho')

@section('titulo')
Sistema de Controle de Solicitações de Análises Laboratoriais
@endsection

@section('conteudo')
  <div class="container-fluid" id="corpo" align="center">
    <br><br>
    <div class="col-md-4" id="sublinhado">
      <img src="img/icnAreaGeral.png" width="20%">
      <h3 id="secao"><a href="analiseslab/"><strong>Área geral</strong></a></h3>
      <p>Visualize uma lista com todos<br>os procedimentos disponíveis.</p>
    </div>

    <div class="col-md-4" id="sublinhado">
      <img src="img/icnUser.png" width="20%">
      <h3 id="secao"><a href="/login"><strong>Área do cliente</strong></a></h3>
      <p>Realize solicitações de procedimentos<br>e visualize os procedimentos agendados. </p>
    </div>

    <div class="col-md-4" id="sublinhado">
      <img src="img/icnAdmin.png" width="20%">
      <h3 id="secao"><a href="/login"><strong>Área administrativa</strong></a></h3>
      <p>Realize todas as operações<br>do administrador do sistema.</p>
      <br>
    </div>
  </div>
@endsection
