<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt" >
<head>
  <meta charset="UTF-8">
  <meta name="author" content="*Bruno Carvalho Feitosa* & Victor Augusto & Jailson Evangelista Teixeira" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Sistema desenvolvido em HTML5, CSS3, JavaScript, PHP e MySQL para o curso de Análise e Desenvolvimento de Sistemas" />
  <link rel="icon" href="./images/fav.png" />
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/stylemobile.css" />
  <title>Acesso SnaKGame</title>
</head>

<body>

<!-- Cobra -->
<div class="cobra"> </div>

<!-- Nome Game -->
<h1 class="name-Game">SnaKGame</h1>

<!-- Formulário Cadastro -->
  <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Cadastrar</a></li>
        <li class="tab"><a href="#login">Entrar</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Cadastre-se</h1>
          
          <form name="formCadastro" action="./php/processaCadastro.php" method="post" onSubmit="return checa(this)">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Primeiro Nome<span class="req">*</span>
              </label>
              <input type="text" name="txtPrimeiroNomeCadastro" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Sobrenome<span class="req">*</span>
              </label>
              <input type="text" name="txtSobrenomeCadastro" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Endereço de e-mail<span class="req">*</span>
            </label>
            <input type="email" name="txtEmailCadastro" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Insira uma senha<span class="req">*</span>
            </label>
            <input type="password" name="txtSenhaCadastro" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Cadastrar</button>
          </form>
        </div>
        
        <!-- Formulário Login -->
        <div id="login">   
          <h1>Bem-vindo!</h1>
          
          <form name="formLogin" action="./php/processaLogin.php" method="post" onSubmit="return checa(this)">
          
            <div class="field-wrap">
            <label>
              Endereço de e-mail<span class="req">*</span>
            </label>
            <input type="email" name="txtEmailLogin" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password" name="txtSenhaLogin" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="recuperarSenha.php">Esqueceu sua senha?</a></p>
          
          <button class="button button-block" name="btnEntrar"/>Entrar</button>
          </form>

          <p class="textError">
            <?php if(isset($_SESSION['loginErro'])) {
              echo $_SESSION['loginErro'];
              unset($_SESSION['loginErro']);
            } ?>
          </p>
        </div>
    </div>
</div>

    <!-- Scripts-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>
