@extends('principal')

@section('conteudo')

<!--<?//php $i = 0; ?>-->

    <div class="container-fluir bg-3 text-center">
      <br><h1 class="text-info">Produtos em oferta! <i class="fa fa-shopping-basket" aria-hidden="true"></i></h1><br><br>
        @foreach($produtos as $p)
        @if($loop->first || $loop->iteration % 5 == 0)
          <div class="row">
        @endif
        <div class="col-sm-3">
          <i class="fa fa-object-ungroup fa-4x"></i><br><br>
          <h4>{{$p->nome}}</h4>
          R$ {{$p->preco}}<br>
          <a href="/loja/view/{{$p->id}}" class="btn btn-info">Ver detalhes <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
        @if($loop->last || $loop->iteration % 4 == 0)
      </div>
        @endif
        @endforeach
    </div>
    <br><br>
@endsection
