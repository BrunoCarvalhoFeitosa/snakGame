<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="0.1;url=../index.php">
<title>Processa Cadastro</title>
</head>
<body>
<?php
$Nome = $_POST['txtPrimeiroNomeCadastro'];
$Sobrenome = $_POST['txtSobrenomeCadastro'];
$Email = $_POST['txtEmailCadastro'];
$Senha = $_POST['txtSenhaCadastro'];

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

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
die("Conexão falhou: ". $conn->connect_error);
}

$sql = "insert into usuarios(Nome, Sobrenome, Email, Senha) values ('$Nome', '$Sobrenome', '$Email', '$Senha')";

if($conn->query($sql)===TRUE){
echo "<script>alert('Dados cadastrados com sucesso!!!');</script>";
}

else{
echo "Ocorreu algum erro ao cadastrar seus dados. Tente novamente mais tarde!" . $sql . "<br>" . $conn-> error;
}

$conn->close();
?>
</body>
</html>