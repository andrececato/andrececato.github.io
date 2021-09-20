<?php
   include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr" id="html"> <!-- Site vai ser em português*/ -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libré Play - Início</title>
    <link rel="icon" type="image/jpg" href="img\icone__.png"> 
    <link rel="stylesheet" href="css/CssHome.css">
</head>
<body style="background-color:#181818;">
    <!--Inicio do conteúdo-->
    <div class="row">
        <div class="column all">
          
        </div>
    <div class="rodapé">
        <h3>Sobre:</h3><br>
        <a href="QuemSomos/quemSomos.html">Quem somos</a><br><br>
        <a href="faleconosco/faleconosco.html">Fale conosco</a><br><br>
        <footer>24/06/2021 | Revista Libré | Versão 3.3</footer>
    </div>
    <div class="formulario2">
      <br><br><br>
      <hr>
      <p>
        <div class = "form">
          <h1>Registro feito com sucesso!</h1>
          <br>
          <?php
             $nome = isset($_POST["n"])?$_POST["n"]:"[não informado]";
             $email = isset($_POST["e"])?$_POST["e"]:"[não informado]";
             $senha = isset($_POST["p"])?$_POST["p"]:"[não informado]";
             $registro_code = "INSERT INTO user (nome, email, senha)VALUES ('$nome','$email','$senha')";
             $registro = mysqli_query($mysqli, $registro_code) or die("ERRO ao consultar!" . $mysqli->error);
             date_default_timezone_set('America/Sao_Paulo');
             echo "<p>Nome cadastrado: $nome <br><br>
                      Email cadastrado: $email <br><br>
                      Senha cadastrada: $senha <br><br>
                      Data e hora: ".date("d")."/".date("m")."/".date("Y")." às ".date("H").":".date("i")."</p>";
          ?>
        </div>
      </p>
    </div>
    <div class="cabeçalho">
        <nav> <!-- Conjunto de links -->
            <div class="mobile-menu"> <!-- Todos esses divs servem para criar um "menu hamburguer" próprio, e não pegar imagem -->
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
            </div>
            <div class="logo">
              <a href="index.html"><img src="img/icone__.png" alt="Logo"></a>
            </div>
            <ul class="nav-list"> <!-- tag para lista -->
              <li><a href="index.html"><b>Início</b></a></li>
              <li><a href="#"><b>Colunas</b></a></li>
              <li><a href="https://revistalibre.com.br" target="noblank"><b>Revista Libré</b></a></li>
            </ul>
            <button id="registro"><?php echo "$nome" ?> <sub>BETA</sub></button>
          </nav>
    </div>
    <script src="botao.js"></script>
    <script src="escolher.js"></script>
    <script src="animation.js"></script>
</body>
</html>
