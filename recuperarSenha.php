<!DOCTYPE html>
<html lang="pt-br" />
<head>
  <meta charset="UTF-8" />
  <meta name="author" content="*Bruno Carvalho Feitosa* & Victor Augusto & Jailson Evangelista Teixeira" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Sistema desenvolvido em HTML5, CSS3, JavaScript, PHP e MySQL para o curso de Análise e Desenvolvimento de Sistemas" />
  <link rel="icon" href="./images/fav.png" />
  <link rel="icon" href="./images/fav.png" />
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Recuperar Senha SnaKGame</title>
</head>

<body>

<!-- Cobra -->
<div class="cobra"> </div>

<!-- Nome Game -->
<h1 class="name-Game">SnaKGame</h1>
  <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Recuperar</a></li>
        <li class="tab"><a href="#login">Entrar</a></li>
      </ul>
      
      <div class="tab-content">

        <!-- Formulário Recuperar Senha -->
        <div id="signup">   
          <h1>Recuperar Senha</h1>
          
          <form name="formRecuperarSenha" action="./php/processaRecuperar.php" method="post" onSubmit="return checa(this)">
          
            <div class="field-wrap">
            <label>
              Endereço de e-mail<span class="req">*</span>
            </label>
            <input type="email" name="txtEmailRecuperacao" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password" name="txtSenhaRecuperacao" required autocomplete="off"/>
          </div>
          
          <button class="button button-block" name="btnRecuperar"/>Recuperar</button>
          </form>

        </div>
        
        <!-- Formulário Login-->
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
          
          <button class="button button-block" name="btnEntrar"/>Entrar</button>
          </form>
        </div>
    </div>
</div>

    <!-- Scripts -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>

</html>
