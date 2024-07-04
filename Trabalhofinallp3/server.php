<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> </title>
</head>
<body>

<?php
//Programação Orientada a Objetos
$servidor = '25dejulho.online';
$usuario  = 'dejulhoo_brendha';
$senha    = 'aula2021*';
$banco    = 'dejulhoo_brendha';
$mysqli   = new mysqli($servidor,$usuario,$senha,$banco);
// Check connection
if ($mysqli -> connect_errno) {
 echo "Falha ao conectar MySQL: " . $mysqli -> connect_error;
 exit();
}
//else
//echo "Conexão efetuada com Sucesso! Programação OO <br>";

?>
</body>
</html>
