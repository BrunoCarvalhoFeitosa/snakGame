<?php 
  $email = $_POST['txtEmailLogin'];
  $senha = $_POST['txtSenhaLogin'];
  //Server
  $connect = mysqli_connect('den1.mysql3.gear.host','appgame','Nt9?~2Qdlwic');
  $db = mysqli_select_db($connect, 'appgame');

  //Local
  // $connect = mysqli_connect('localhost','root','');
  // $db = mysqli_select_db($connect, 'snakgame');
    
  	session_start();
    if (isset($email)) {
             
      $verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE Email = '$email' AND Senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
          die();
        }else {
          $_SESSION['login'] = $email;
          $_SESSION['senha'] = $senha;
          header('location: ../game/SnaKGame.php');
        }
    }
?>