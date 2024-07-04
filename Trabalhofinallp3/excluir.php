<?php
if (!isset ($_GET['id']))
header ("location:selecao.php");

//isset verifica se existe ou não a variavel
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Excluir do arquivo</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<?php
include_once("server.php");
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "select * from produto where idproduto = ".$id;
	$result = $mysqli ->query($sql);
	$linha = $result -> fetch_assoc(); 
	$descricao = $linha['descricao'];
	
}
?>

<br/>
<br/>
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  
      <div class="panel-group">  
        <div class="panel panel-primary">
          <div class="panel-heading text-center"> <strong> Exclusao do arquivo </strong> </div>
          <div class="panel-body text-center"> Deseja realmente excluir o arquivo <strong><?php echo $descricao?></strong> selecionado?<br/><br/>
		  <a href ="?id=<?php echo $id?>&resp=S">
          <button type="button" class="btn btn-primary"><strong>SIM</strong></button></a>
		  &nbsp;&nbsp;
          <a href="selecao.php">    
          <button type="button" class="btn btn-danger"><strong>NAO</strong> </button> </a>
		  </a>
		   
		   <?php
		   if(isset($_GET['id']) and isset ($_GET['resp']))
		   {
		   if ($_GET['resp'] == 'S')
		   {
		    $sql ="delete from produto where idproduto = " .$_GET['id'];
			
			if ($mysqli -> query($sql))
			{
			echo '<br><p><div class="alert alert-success">
			<strong> Sucesso! </strong> Registro excluido com sucesso.
			</div>';
			   header ("Refresh: 3; url=selecao.php");
		   }
		   else
		   {
		   echo '<br><p><div class="alert alert-danger">
		   <strong> Erro! </strong> Erro ao excluir o resgistro.<br>'.$mysqli -> error.'
			</div>';
			      }
			  }
		}
		   ?>
          </div>
        </div>
      </div>    
  </div>
  <div class="col-sm-2"></div>
</div>
</div>    
</body>
</html>
