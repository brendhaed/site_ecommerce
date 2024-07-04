<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Novo</title>
</head>
<body>

<form action="#" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="arquivo">Selecione o Arquivo:</label>
    <input type="file" class="form-control" name="arquivo" accept="image/*">
  </div>
   <div class="form-group">
    <label for="descricao">Descricao:</label>
    <input type="text" class="form-control" name="descricao" >
  </div>
    <div class="form-group">
    <label for="valor">Valor:</label>
    <input type="text" class="form-control" name="valor" onKeyPress="return(event.charCode >= 48 && event.charCode <= 57) {} event.charCode ==44" required >
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
</form>
<?php
if($_POST)
{
     include_once('server.php');
     $uploaddir = 'Img/';
	 $descricao = $_POST['descricao'];
	 $valor     = $_POST['valor'];
	 $image = $_FILES['arquivo']['name'];
     $uploadfile = $uploaddir . $_FILES['arquivo']['name'];
	 
     if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile))
	 {	 
		 $sql = "insert into produto(descricao, valor, img) values('$descricao',$valor,'$image')";
		 if ($mysqli->query($sql))		
     		echo "Arquivo Enviado".'<br>'.$_FILES['arquivo']['name'];	
		else
		    echo "Houve um problema no upload do arquivo no SGBD.<br>".$mysqli ->error; 	 
	 }
  
     else 	
			echo "Houve um problema no upload do arquivo.<br>".$mysqli ->error; 

}
?>

</body>
</html>
