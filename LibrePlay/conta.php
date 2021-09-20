<?php
   include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr" id="html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libré Play - Início</title>
    <link rel="icon" type="image/jpg" href="img\icone__.png"> 
    <link rel="stylesheet" href="css/CssHome.css">
    <script language="javascript" type="text/javascript">
    function re(){
        window.location.href = "index.php?&ERROR=true";
    }
  </script>
  <link href="scripts/animation.js">
  <link href="scripts/escolher.js">
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
          <?php
             $email = isset($_POST["e"])?$_POST["e"]:"[não informado]";
             $senha = isset($_POST["p"])?$_POST["p"]:"[não informado]";
             $sql_code = "SELECT * FROM user WHERE email = '$email'";
             $sql_query = mysqli_query($mysqli,$sql_code) or die("ERRO ao consultar!" . $mysqli->error);
             if($sql_query->num_rows == 0){
              echo "<h1>Conta não encontrada!</h1> <br>";
              ?>
              <script type="text/javascript">re();</script>
              <?php
             }else{
              while($dados = $sql_query->fetch_assoc()){
                if($senha === $dados['senha']){
                  echo "<button id='registro'>".$dados['nome']." <sub>BETA</sub></button>";
                   echo "<h1>Conta de ".$dados['nome']."!</h1> <br>";
                   date_default_timezone_set('America/Sao_Paulo');
                   echo "<p>Email cadastrado: ".$dados['email']." <br><br>
                       Senha cadastrada: ".$dados['senha']." <br><br>
                       Data e hora: ".date("d")."/".date("m")."/".date("Y")." às ".date("H").":".date("i")."</p>";
              }else{
                ?>
                <script type="text/javascript">re();</script>
                <?php
              }
             }
            }
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
            
          </nav>
    </div>
    <div class="intro" id="intro" style="background-color:#181818;">
      <img src="img/icone__.png" alt="">
    </div>
    <script src="scripts/botao.js" language="javascript" type="text/javascript"></script>
    <script src="scripts/escolher.js" language="javascript" type="text/javascript"></script>
    <script src="scripts/animation.js" language="javascript" type="text/javascript"></script>
</body>
</html>