<?php

  // Model
  $db = new PDO('mysql:host=localhost; dbname=academico', 'sistemaweb', '123456');

  $retorno = $db->query("SELECT * FROM alunos ORDER BY nome");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <title>Lista de Alunos</title>
  </head>
  <body>
    <div class="jumbotron" align="center">
      <h2>Lista de alunos</h2>
    </div>

    <div class="container">
      <table class="table table-bordered table-hover table-striped">
          <tr>
            <th>Código</th>
            <th>Nome</th>
          </tr>

          <?php
          // Controller
          while ($linha = $retorno->fetch(PDO::FETCH_ASSOC)) {
            // View
            echo "<tr>";
            echo "<td>" . $linha["id"] . "</td>";
            echo "<td>" . $linha["nome"] . "</td>";
            echo "</tr>";
          }
          ?>
      </table>

      <a href="index.html" class="btn btn-default">Voltar ao menu principal</a>

    </div>

  </body>
</html>
