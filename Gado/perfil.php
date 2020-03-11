<?php

  include_once "conf/default.inc.php";
  require_once "conf/Conexao.php";

  require_once "utils/utils.php";

  $id = isset($_GET['id']) ? $_GET['id'] : "";
  $pdo = Conexao::getInstance();
  $sql = $pdo->query("SELECT * FROM veterinario WHERE id = $id;");

  while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
    $nome = $linha['nome'];
    $crmv = $linha['crmv'];
    $telefone = $linha['telefone'];
    $info = $linha['info'];
    $imagem = $linha['imagem'];
  }

?>
<html lang="en" dir="ltr">
  <head>
    <fieldset style="background-color: white">
    <meta charset="utf-8">
    <title>Cadastro Veterinário</title>

    <!-- Compiled and minified CSS -->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <script
   			  src="https://code.jquery.com/jquery-3.4.1.min.js"
   			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
   			  crossorigin="anonymous"></script>

   <!-- Compiled and minified JavaScript -->

   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body class='container'>

    <nav style="background-color: #A4D3EE">
      <div class="row">
        <div class="col s12 l12 m12 ">
          <ul>
            <li class="nav"><a href="index.html" class="nav" class="nav">Início</a></li>
            <li class="nav"><a href="veterinario.php" class="nav" class="nav">Cadastro</a></li>
            <li class="nav"><a href="listaVeterinario.php" class="nav" class="nav">Listagem</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="row">
      <div class="col s12 l12 m12">
        <h1>Perfil Veterinário</h1>
      </div>
    </div>


    <div class="row">
      <div class="col s12 l12 m12 ">
        <center><img src="<?php echo $imagem?>" style="width: 125px;"></center>
      </div>
    </div>
    <div class="row">
      <div class="col s12 l12 m12 ">

        <form action="veterinario.php" method="POST">
          <fieldset>
            <div class="row form-group">
              <div class="col s12 l12 m12">
                <label style="font-size: 20px;"><?php echo $nome?></label>
              </div>
              <div class="col s12 l12 m12">
                <label style="font-size: 20px;"><?php echo $crmv?></label>
              </div>
              <div class="col s12 l12 m12">
                <label style="font-size: 20px;"><?php echo $telefone?></label>
              </div>
              <div class="col s12 l12 m12">
                <label style="font-size: 20px;"><?php echo $info?></label>
              </div>
            </div>
          </fieldset>
        </form>
        
      </div>
    </div>
    </fieldset>
  </body>
</html>