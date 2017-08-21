$(document).ready(function(){

  function funcao1()
  {
    alert("Existem campos em branco!");
    return();
  }

  $("#btnCadastrar").click(function(){

    if($("input[name='nome']").val() == "") {
      funcao1();
      $("input[name='nome']").focus();
      $("input[name='nome']").val("");
      return;
    }

    if($("input[name='cpf']").val() == "") {
      funcao1();
      $("input[name='cpf']").focus();
      $("input[name='cpf']").val("");
      return;
    }

    if($("input[name='rg']").val() == "") {
      funcao1();
      $("input[name='rg']").focus();
      $("input[name='rg']").val("");
      return;
    }

    if($("input[name='datanasc']").val() == "") {
      funcao1();
      $("input[name='datanasc']").focus();
      $("input[name='datanasc']").val("");
      return;
    }

    if($("input[name='rua']").val() == "") {
      funcao1();
      $("input[name='rua']").focus();
      $("input[name='rua']").val("");
      return;
    }

    if($("input[name='numero']").val() == "") {
      funcao1();
      $("input[name='numero']").focus();
      $("input[name='numero']").val("");
      return;
    }

    if($("input[name='bairro']").val() == "") {
      funcao1();
      $("input[name='bairro']").focus();
      $("input[name='bairro']").val("");
      return;
    }

    if($("input[name='cidade']").val() == "") {
      funcao1();
      $("input[name='cidade']").focus();
      $("input[name='cidade']").val("");
      return;
    }

    if($("input[name='telefone']").val() == "") {
      funcao1();
      $("input[name='telefone']").focus();
      $("input[name='telefone']").val("");
      return;
    }

    if($("input[name='celular']").val() == "") {
      funcao1();
      $("input[name='celular']").focus();
      $("input[name='celular']").val("");
      return;
    }

    if($("input[name='email']").val() == "") {
      funcao1();
      $("input[name='email']").focus();
      $("input[name='email']").val("");
      return;
    }

    if($("input[name='confirmemail']").val() == "") {
      funcao1();
      $("input[name='confirmemail']").focus();
      $("input[name='confirmemail']").val("");
      return;
    }

    if($("input[name='usuario']").val() == "") {
      funcao1();
      $("input[name='usuario']").focus();
      $("input[name='usuario']").val("");
      return;
    }

    if($("input[name='senha']").val() == "") {
      funcao1();
      $("input[name='senha']").focus();
      $("input[name='senha']").val("");
      return;
    }

    if($("input[name='confirmesenha']").val() == "") {
      funcao1();
      $("input[name='confirmesenha']").focus();
      $("input[name='confirmesenha']").val("");
      return;
    }

  });

})
