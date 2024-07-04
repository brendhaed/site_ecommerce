
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Logar</title>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Faça seu login</h2>
  <form action="#" method="post">
    <div class="form-group">
      <label for="login">Email:</label>
      <input type="email" class="form-control"  placeholder="Informe seu email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" placeholder="Informe a Senha" name="pwd">
    </div>    
    <button type="submit" class="btn btn-primary">Logar</button>
  </form>

<?php
if($_POST)
{
   include_once('server.php');
   $email = $_POST['email'];
   $senha = $_POST['pwd'];
   $sql ="select * from cliente where email='$email' and senha='$senha'";
   $result = $mysqli -> query($sql);
   
   if ($result -> num_rows >0)
   {
	   $linha = $result ->fetch_assoc();
	   $nome = $linha['nome'];
	   $_SESSION['nome'] = $nome;
	   $_SESSION['idcliente']=$linha['idcliente'];
	   header("location:Indexx.php");
	   exit;
   }
   else
    echo '<div class="alert alert-danger">
  <strong>Erro!</strong> Usuário e/ou Senha Inválido.
</div>';
}
?>
</div>
</body>
</html>