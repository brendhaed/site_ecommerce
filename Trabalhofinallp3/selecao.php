<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Selecao de produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Selecao de produtos</div>
      <div class="panel-body">
      
      <form action="#" method="post">
      <div class="form-group">
        <label for="descricao">Produto:</label>
        <input type="text" class="form-control" name="descricao">
      </div>
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>
      </div>
    </div>
 </div>   
<table class="table table-striped">
    <thead>
      <tr>
        <th>Descricao produto:</th>
        <th>Valor:</th>
        <th>Imagem</th>
		<th> Novo </th>
		<th> Editar </th>
		<th> Excluir </th>
      </tr>
    </thead>
    <tbody>
	
<?php
if(isset($_POST['descricao']))
  $procurar = $_POST['descricao'];
else
   $procurar ='';
   
if(isset($_POST['valor']))
  $valor = $_POST['valor'];
else
   $valor ='';
   
if(isset($_POST['arquivo']))
  $arquivo = $_FILES['arquivo']['name'];
else
   $arquivo ='';      
   
  include_once ("server.php");
$sql = "select idproduto ,descricao, valor, img from produto order by descricao";
$result = $mysqli -> query ($sql);

  if ($result -> num_rows > 0 )
{
  while ($row = $result -> fetch_assoc ())
 {
    $id = $row['idproduto'];
    echo "<tr>";
	echo "<td>" .$row["descricao"]. "</td>";
	echo  "<td>" .$row["valor"] . "</td>";
	echo "<td>" .$row ["img"] . "</td>";
	echo "<td> <a href='novo.php'> <button type= 'button' class='btn btn-primary'> Novo </button> </a> </td>";
	echo "<td> <a href='editar.php?id=$id'> <button type='button' class='btn btn-success'> Editar </button> </a></td>";
	echo "<td> <a href='excluir.php?id=$id'> <button type='button' class='btn btn-danger'> Excluir </button> </a> </td>";
	echo "</tr>";
   }
   echo "Total de registros:" .$result -> num_rows;
   }
   else
  {
  echo "Consulta nao retornou dados:";
  }
 $mysqli -> close();
?>
  
  </table>
  </div>
</body>
</html>
 

