<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle de Solicitações de Análises Laboratoriais</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Cabin" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/b7b5ad8085.js"></script>
    <link rel="stylesheet" href="/css/format.css">
  </head>
  <body>

    <div class="jumbtron container-fluid" id="titulo" align="center">
      <h1>@yield('titulo')</h1>
      <img src="/img/banner.jpg" width="32%" alt="Banner"><br><br>
    </div>

    <div id="corpo">
        @yield('conteudo')
    </div>

  </body>
</html>
