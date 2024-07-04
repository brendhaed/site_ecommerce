<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Edicao do produto</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    include_once("server.php");
	$sql = "select * from produto where idproduto = ".$_GET['id'];
	$idproduto = $_GET['id'];
	$result = $mysqli -> query($sql);
	$linha = $result ->fetch_assoc();
	$descricao = $linha['descricao'];
	$valor  = $linha['valor'];
	$image  = $linha['img'];

?>
<div class="container">
<h2> Edicao do produto</h2>
  <form action="#" enctype="multipart/form-data" method="POST">
    <div class="form-group">
    <label for="arquivo">Selecione o Arquivo:</label>
    <input type="file" class="form-control" name="arquivo" accept="image/*">
  </div>
   <div class="form-group">
    <label for="descricao">Descricao:</label>
    <input type="text" class="form-control" name="descricao" value="<?php echo $descricao; ?>" required>
  </div>
    <div class="form-group">
    <label for="valor">Valor:</label>
    <input type="text" class="form-control" name="valor" value="<?php echo $valor; ?>" onKeyPress="return(event.charCode >= 48 && event.charCode <= 57) {} event.charCode ==44" required>
  </div>
  <button type="submit" class="btn btn-primary">Editar produto</button>
</form>


<?php
	
	if ($_POST)
  {
      $uploaddir = 'img/';
	  $descricao = $_POST['descricao'];
	  $valor = $_POST['valor'];
	  $img = $_FILES['arquivo'];
	  $uploadfile = $uploaddir . $_FILES['arquivo'];
	  $sql = " update  produto set descricao='$descricao', valor= '$valor' , img='$image' where idproduto = $idproduto ";
		 
		 if ($mysqli->query($sql))		
     		{  
		  echo '<br><div class="alert alert-success">
  <strong>Successo!</strong> Alterado com Sucesso.
</div>';  
	  }
	  else
	  {
		echo '<div class="alert alert-danger">
  <strong> Erro!</strong> Erro no upload do arquivo...
</div>';  
	  }  
  }
  ?>
	
  </form>
  </div>
  </div>
</body>
</html>