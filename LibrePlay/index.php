<?php
$error=isset($_GET['ERROR']);

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
    <script src="scripts/escolher.js"></script>
    <script src="scripts/animation.js"></script>
    <script src="scripts/login_senha.js"></script>
</head>
<body style="background-color:#181818;">
    <div class="cabeçalho" id="cabeca">
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
            <button id="registro" onclick="aparecer();">Conta <sub>BETA</sub></button>
          </nav>
    </div>
    <div class="intro" id="intro">
      <img src="img/icone__.png" alt="">
    </div>
    <script src="scripts/botao.js"></script>
    <!--Inicio do conteúdo-->
    <div class="row">
      <!--Coluna do canto para anúncios-->
        <div class="column side">
          <br>
          <div class="recomend">
            <img src="img/video1.png" alt="ibere">
            <div class="descricao">
              <p class="titulo">Você SABE MESMO o que é PRÉ-SAL?</p>
              <p class="prop">Manual do Mundo</p>
              <p class="prop">711 mil visualizações</p>
              <p class="prop">há 1 semana</p>
            </div>
          </div>
          <br>
          <div class="recomend">
            <img src="img/video2.png" alt="ibere">
            <div class="descricao">
              <p class="titulo">Você SABE MESMO o que é PRÉ-SAL?</p>
              <p class="prop">Manual do Mundo</p>
              <p class="prop">711 mil visualizações</p>
              <p class="prop">há 1 semana</p>
            </div>
          </div>
          <br>
          <div class="recomend">
            <img src="img/video3.png" alt="ibere">
            <div class="descricao">
              <p class="titulo">Você SABE MESMO o que é PRÉ-SAL?</p>
              <p class="prop">Manual do Mundo</p>
              <p class="prop">711 mil visualizações</p>
              <p class="prop">há 1 semana</p>
            </div>
          </div>
          <br>
          <div class="recomend">
            <img src="img/video4.png" alt="ibere">
            <div class="descricao">
              <p class="titulo">Você SABE MESMO o que é PRÉ-SAL?</p>
              <p class="prop">Manual do Mundo</p>
              <p class="prop">711 mil visualizações</p>
              <p class="prop">há 1 semana</p>
            </div>
          </div>
          <br>
          <div class="recomend">
            <img src="img/video5.png" alt="ibere">
            <div class="descricao">
              <p class="titulo">Você SABE MESMO o que é PRÉ-SAL?</p>
              <p class="prop">Manual do Mundo</p>
              <p class="prop">711 mil visualizações</p>
              <p class="prop">há 1 semana</p>
            </div>
          </div>
          <br>
          <div class="recomend">
            <img src="img/video6.png" alt="ibere">
            <div class="descricao">
              <p class="titulo">Você SABE MESMO o que é PRÉ-SAL?</p>
              <p class="prop">Manual do Mundo</p>
              <p class="prop">711 mil visualizações</p>
              <p class="prop">há 1 semana</p>
            </div>
          </div>
        </div>
        <!--Conteúdo principal que vai estar no meio é dividido em Left e Right-->
        <div class="column middle">
          <div class="conteudo">
            <div class="video" id="v1">
              <br>
              <iframe width="640" height="360" src="https://www.youtube.com/embed/6_l5n3MQR6Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <br>
              <br>
              <h1>Audiolivro: Vidas Secas - Graciliano Ramos</h1>
            </div>
            <div class="video2" id="v2">
              <br>
              <iframe src="https://open.spotify.com/embed/episode/4fKVJM3ganpnyYj9AXBfGT?theme=0" width="640" height="360" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
              <br>
              <br>
              <h1>Audiolivro: Vidas Secas - Graciliano Ramos</h1>
            </div>
            <div class="botoes">
              <button onclick="trocar_v1();"><img src="img/youtube_logo_pequeno.png" alt="youtube_logo"></button>
              <button onclick="trocar_v2();"><img src="img/spotify_logo_pequeno.png" alt="spotify_logo"></button>
              <button><a href="https://drive.google.com/u/0/uc?id=173TmwYHJE8lKksRAAzt_vFG44HOxr4X5&export=download"><img src="img/download_logo.png" alt=""></a></button>
            </div>
          </div>
        </div>
        <!--Conteúdo principal que vai estar no meio é dividido em Left e Right-->
 
        <br>
        <!--Coluna do meio sem estar dividida (Para ser usada para textos ou títulos)-->
        
      <!--rodapé com últimas informações-->
    <div class="rodapé">
        <h3>Sobre:</h3><br>
        <a href="QuemSomos/quemSomos.html">Quem somos</a><br><br>
        <a href="faleconosco/faleconosco.html">Fale conosco</a><br><br>
        <footer>24/06/2021 | Revista Libré | Versão 3.3</footer>
    </div>
    <div id="fundo" class="fundo">
      <div class="formulario">
        <button id="x" onclick="sair();"><svg aria-label="Fechar" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M41.1 9.1l-15 15L41 39c.6.6.6 1.5 0 2.1s-1.5.6-2.1 0L24 26.1l-14.9 15c-.6.6-1.5.6-2.1 0-.6-.6-.6-1.5 0-2.1l14.9-15-15-15c-.6-.6-.6-1.5 0-2.1s1.5-.6 2.1 0l15 15 15-15c.6-.6 1.5-.6 2.1 0 .6.6.6 1.6 0 2.2z" fill-rule="evenodd"></path></svg></button>
        
        <br><br><br>
        <hr>
        <p>
          <div class="form">
            <button id="login_b" onclick="login();">Login</button> 
            <button id="register_b" onclick="register();">Registrar</button>
            <form action="resgistro.php" method="post" id="register">
              <p>Nome:</p> <input type="name" autocomplete="off" name="n" id="nome">
              <p>Email:</p> <input type="email" autocomplete="off" name="e" id="email">
              <p>Senha:</p> <input type="password" name="p" id="senha">
              <br>
              <input type="submit" value="Enviar" id="enviar">
              <input type="reset" value="Limpar" id="limpar">
            </form>
            <form action="conta.php" method="post" id="login">
            <?php
              if($error === true){
                  ?>
                  <p id="aviso">Email ou senha incorreto</p>
                  <?php
              }else{
              }
            ?>
              <p>Email:</p> <input type="email" autocomplete="off" name="e" id="email2">
              <p>Senha:</p> <input type="password" name="p" id="senha2">
              <br>
              <input type="submit" value="Enviar" id="enviar2">
              <input type="reset" value="Limpar" id="limpar2">
            </form>
            <img src="img/icone__.png" alt="logo" class="logo-form">
          </div>
        </p>
      </div>
    </div>


    <script src="scripts/botao.js" language="javascript" type="text/javascript"></script>
    <script src="scripts/escolher.js" language="javascript" type="text/javascript"></script>
    <script src="scripts/animation.js" language="javascript" type="text/javascript"></script>
<?php 
    if($error === true){
?>
<script>
 aparecer();
 </script>
<?php
     }
?>
</body>
</html>
