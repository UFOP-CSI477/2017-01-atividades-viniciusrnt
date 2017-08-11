@extends('cabecalho')

@section('titulo')
  Área do Operador - Início
@endsection

@section('conteudo')

  <div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
        </div>
        <div class="col-md-2">
          <p class="text-right"><strong>Seja bem-vindo,</strong><br>{{ Auth::user()->name }}.
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

    <div class="col-md-4" id="sublinhado">
      <img src="img/altPreco.png" width="25%"><br>
      <h4 id="secao"><a href="/areaadmin/editlist">Editar preço<br>de procedimento</h4></a>
    </div>

    <div class="col-md-4" id="sublinhado">
      <img src="img/listProc.png" width="25%"><br>
      <h4 id="secao"><a href="/analiseslab/">Listar todos<br>procedimentos</h4></a>
    </div>

    <div class="col-md-4" id="sublinhado">
      <img src="img/icnUsers.png" width="25%"><br>
      <h4 id=secao><a href="/areaadmin/listaexames">Listar todos exames<br>dos pacientes</a></h4>
    </div>


  </div>



@endsection
