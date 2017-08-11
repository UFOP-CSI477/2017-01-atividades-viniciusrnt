@extends('cabecalho')

@section('titulo')
  Área do cliente - Início
@endsection

@section('conteudo')

<div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
      </div>
      <div class="col-md-2">
        <p class="text-right"><strong>Seja bem-vindo(a),</strong><br>{{ Auth::user()->name }}.
      </div>
      <div class="col-md-1" align="center">
        <a class="btn btn-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out fa-lg"></i> Sair </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
      </div>
    </div>
    <br>
  </div>
</div>

<div class="container" id="corpo" align="center">
  <br>
    <div class="col-md-3" id="sublinhado">
      <img src="img/icnExame.png" width="25%"><br>
      <h4 id="secao"><a href="/analiseslab/test/create">Solicitar novo<br>exame</h4></a>
    </div>

    <div class="col-md-3" id="sublinhado">
      <img src="img/altProced.png" width="25%"><br>
      <h4 id="secao"><a href="/areacliente/listaedtexames">Alterar dados de um<br>exame agendado</h4></a>
    </div>

    <div class="col-md-3" id="sublinhado">
      <img src="img/delProc.png" width="25%"><br>
      <h4 id="secao"><a href="/areacliente/listadltexames">Excluir um<br>exame agendado</h4></a>
    </div>

    <div class="col-md-3" id="sublinhado">
      <img src="img/listSolic.png" width="25%"><br>
      <h4 id="secao"><a href="/areacliente/listaexames">Listar todos os<br>exames solicitados</h4></a>
    </div>

  </div>
@endsection
