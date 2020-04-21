<?php
session_start();
unset($_SESSION['login']);
session_destroy();
echo"<script language='javascript' type='text/javascript'>alert('Esperamos que tenha se divertido!!!');";
header('location: ../index.php');
exit;
?>