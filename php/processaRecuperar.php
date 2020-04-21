<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="0.1;url=../recuperarSenha.php">
<title>Processa Cadastro</title>
</head>
<body>
<?php
$Email = $_POST['txtEmailRecuperacao'];
$Password = $_POST['txtSenhaRecuperacao'];

//Server
$servername = "den1.mysql3.gear.host";
$username = "appgame";
$password = "Nt9?~2Qdlwic";
$dbname = "appgame";

//Local
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "snakgame";

$conn = new mysqli ($servername, $username, $password, $dbname );

if($conn->connect_error){
die("Conexão falhou: ". $conn->connect_error);
}

$sql = "update usuarios set Senha = '$Password' where Email = '$Email'";

if($conn->query($sql)===TRUE){
echo "<script>alert('Senha atualizada com sucesso!!!');</script>";
}

else{
echo "Ocorreu algum erro ao recuperar sua senha! Tente novamente mais tarde" . $sql . "<br>" . $conn-> error;
}

$conn->close();
?>
</body>
</html>