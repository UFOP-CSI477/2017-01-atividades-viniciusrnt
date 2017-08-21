<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <title>Dados cadastrados</title>
  </head>
  <body>
    <div class="jumbotron text-center">
      <h2>Dados informados</h2>
    </div>

    <div class="container">
      <div class="col-md-6">
        <fieldset>
          <legend>Dados Pessoais</legend>
          <p><strong>Nome: </strong><?php $nome = $_POST["nome"]; echo "$nome";?></p>
          <p><strong>CPF: </strong><?php $cpf = $_POST["cpf"]; echo "$cpf";?></p>
          <p><strong>RG: </strong><?php $rg = $_POST["rg"]; echo "$rg";?></p>
          <p><strong>Data de nascimento: </strong><?php $datanasc = $_POST["datanasc"]; echo "$datanasc";?></p>
          <p><strong>Gênero: </strong><?php $genero = $_POST["genero"];
                                          if ($genero == "F") {
                                            echo "Feminino";
                                          } else if ($genero == "M") {
                                            echo "Masculino";
                                          } else if ($genero = "O") {
                                            echo "Outro";
                                          }
                                      ?></p>
        </fieldset>
      </div>

      <div class="col-md-6">
        <fieldset>
          <legend>Endereço</legend>
          <p><strong>Rua: </strong><?php $rua = $_POST["rua"]; echo "$rua";?></p>
          <p><strong>Número: </strong><?php $numero = $_POST["numero"]; echo "$numero";?></p>
          <p><strong>Bairro: </strong><?php $bairro = $_POST["bairro"]; echo "$bairro";?></p>
          <p><strong>UF do estado: </strong><?php $estado = $_POST["estado"]; echo "$estado";?></p>
          <p><strong>Cidade: </strong><?php $cidade = $_POST["cidade"]; echo "$cidade";?></p>
        </fieldset>
      </div>

      <div class="col-md-6">
        <fieldset>
          <legend>Contato</legend>
          <p><strong>Telefone: </strong><?php $telefone = $_POST["telefone"]; echo "$telefone";?></p>
          <p><strong>Celular: </strong><?php $celular = $_POST["celular"]; echo "$celular";?></p>
        </fieldset>
      </div>

      <div class="col-md-6">
        <fieldset>
          <legend>Login</legend>
          <div class="col-md-6">
            <p><strong>E-mail: </strong><?php $email = $_POST["email"]; echo "$email";?></p>
            <p><strong>Confirmar e-mail: </strong><?php $confirmemail = $_POST["confirmemail"]; echo "$confirmemail";?></p>
            <p><strong>Usuário: </strong><?php $usuario = $_POST["usuario"]; echo "$usuario";?></p>
          </div>
          <div class="col-md-6">
            <p><strong>Senha: </strong><?php $senha = $_POST["senha"]; echo "$senha";?></p>
            <p><strong>Confirmar senha: </strong><?php $confirmesenha = $_POST["confirmesenha"]; echo "$confirmesenha";?></p>
          </div>
        </fieldset>
      </div>

      <button type="button" class="btn btn-success" name="button">Voltar ao menu principal</button>
      <button type="button" class="btn btn-info" name="button">Realizar novo cadastro</button>







    </div>



  </body>
</html>
