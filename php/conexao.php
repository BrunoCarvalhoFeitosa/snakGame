<?php

//Server
$servidor = "den1.mysql3.gear.host";
$usuario = "appgame";
$password = "Nt9?~2Qdlwic";
$dbname = "appgame";

//Local
// $servidor = "localhost";
// $usuario = "root";
// $password = "";
// $dbname = "snakgame";

$conn = mysqli_connect($servidor, $usuario, $password, $dbname);

if(!$conn) {
	die("Falha na conexão " . mysli_connect_error());
}

else {
	//echo "Conexão realizada com sucesso";
}

?>