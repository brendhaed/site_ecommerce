
<?php
  date_default_timezone_set('America/Sao_Paulo'); 
  session_start(); 
  ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Carrinho de compras</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
#divBusca{
  background-color:white;
  border:solid 2px black;
  border-radius:10px;
  color: black;
  width:280px;
  height:36px;
}

#txtBusca{
  float:left;
  background-color:transparent;
  padding-left:0px;
  font-size:15px;
  border:none;
  height:32px;
  width:181px;
}

#btnBusca{
  border:none;
  float:left;
  height:32px;
  border-radius:0 7px 7px 0;
  width:70px;
  font-weight:bold;
  background:pink;
}

#divBusca img{
  float:left;
}
.jumbotron {
  background-color:black; 
  color:#FF69B4;
  font-style:cambria;
}
.thumbnail {
  padding: 0 0 15px 0;
  border: none;
  border-radius: 0;
}

.thumbnail img {
  width: 100%;
  height: 100%;
  margin-bottom: 0 px;
  border:0;
}
.navbar {
  margin-bottom: 0;
  background-color: black;
  z-index: 9999;
  border: 0;
  font-size: 12px;
  line-height: 1.42857143;
  letter-spacing: 4px;
  border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
  color:white;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color:#FF69B4;
  background-color:#FF69B4;
}
.btn btn-primary{
color: #FF69B4;
}
.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #FF69B4;
}
 a:link { text-decoration: none; 
  }
 a{
  color:#FF69B4;
  }
  a:hover{ color: #A9A9A9;
  }
  
  #myFooter {
    background-color: black;
    color: white;
    padding-top: 10px;
}

#myFooter .footer-copyright {
    background-color: #FF69B4 ;
    padding-top: 3px;
	color:white;
    padding-bottom: 3px;
    text-align: center;
}

#myFooter .row {
    margin-bottom: 60px;
}

#myFooter .navbar-brand {
    margin-top: 45px;
    height: 65px;
}

#myFooter .footer-copyright p {
    margin: 10px;
    color: white;
}

#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter h2 a{
    font-size: 50px;
    text-align: center;
    color: #fff;
}

#myFooter a {
    color: #d2d1d1;
    text-decoration: none;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}

#myFooter .social-networks {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 16px;
}

#myFooter .social-networks a {
    font-size: 32px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

#myFooter .social-networks a:hover {
    text-decoration: none;
}

#myFooter .facebook:hover {
    color: #0077e2;
}

#myFooter .instagram:hover {
    color: purple;
}

#myFooter .twitter:hover {
    color: #00aced;
}

#myFooter .btn {
    color: white;
    background-color:#FF69B4 ;
    border-radius: 20px;
    border: none;
    width: 150px;
    display: block;
    margin: 0 auto;
    margin-top: 10px;
    line-height: 25px;
}

@media screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }
}

html{
    height: 100%;
}

body{
    background-color:#FFFFFF;
    display: flex;
    display: -webkit-flex;
    flex-direction: column;
    -webkit-flex-direction: column;
    height: 100%;
	width:100%;
}

.content{
   flex: 1 0 auto;
   -webkit-flex: 1 0 auto;
   min-height: 200px;
}

#myFooter{
   flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}
</style>

<body>
<div class="jumbotron">
<center> <h1><a href="Indexx.php">Dress Out</a></h1> 
<p>Roupas e Acessórios</p>
 <div id="divBusca">
  <img src="Img/Publicidade/lupa.png" width="25  px" height="25 px" alt="Buscar..." />
  <input type="text" id="txtBusca" placeholder="Busque Produtos..."/>
  <button id="btnBusca">Buscar</button>
</div>
</div>
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Indexx.php">Dress Out</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav navbar-right">
      <li><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span>Cadastre-se</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Entrar</a></li>
	   <li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span>Carrinho</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="sobre.php">SOBRE</a></li>
        <li><a href="servicos.php">COLEÇÕES</a></li>
        <li><a href="produtos.php">PRODUTOS</a></li>
        <li><a href="lancamentos.php">LANÇAMENTOS</a></li>
        <li><a href="contatos.php">CONTATO</a></li>
      </ul>
    </div>
  </div>
  </nav>

    <div class="container">
       <div class="row">
       <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" align="center">
       </div>
       <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" align="center">    
                 <div class="table-responsive" align="center">
						  <table class="table center-block" align="center">
							<thead>
							  <tr>
								<th >Imagem</th>
								<th >Produto</th>
								<th >Quantidade</th>
								<th >Preco</th>
								<th >SubTotal</th>
								<th >Remover</th>
							  </tr>
							</thead>
							 <form action="?acao=up" method="post">
							<tfoot>   
							  <tr>
								<td colspan="5"> <input type="submit" value="Atualizar Carrinho"/> </td>
							  <td colspan="5"> <button type="submit"> <a href="produtos.php">Continuar Comprando</a></button></td>
							   </tr>       
							</tfoot>
							<tbody>
<?php
  if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
  } 
  
  if(isset($_GET['acao'])){ 
    //ADICIONAR CARRINHO 
    if($_GET['acao'] == 'add'){ 
      $id = $_GET['id']; 
      if(!isset($_SESSION['carrinho'][$id])){ 
        $_SESSION['carrinho'][$id] = 1; 
      } else { 
        $_SESSION['carrinho'][$id] += 1; 
      } 
    } 
	
	//REMOVER CARRINHO 
    if($_GET['acao'] == 'del'){ 
      $id = $_GET['id']; 
      if(isset($_SESSION['carrinho'][$id])){ 
        unset($_SESSION['carrinho'][$id]); 
      } 
    } 
	
	//ALTERAR QUANTIDADE 
    if($_GET['acao'] == 'up')
	{ 
      	if(is_array($_POST['prod']))
	  	{ 
			foreach($_POST['prod'] as $id => $qtd)
			{
				
				if(!empty($qtd) and $qtd <> 0)
				  $_SESSION['carrinho'][$id] = $qtd;
				else			
				  unset($_SESSION['carrinho'][$id]);    
			}
      	}
    }
          
   }
          
    ?>
							 
<?php
								if(count($_SESSION['carrinho']) == 0){
								  echo '
								<tr>
								  <td colspan="5">Não há produto no carrinho</td>
								</tr>';
								  } else {
										require("server.php");
										$total = 0;
										foreach($_SESSION['carrinho'] as $id => $qtd){
												$sql= "SELECT *  FROM produto WHERE idproduto= '$id'";
												$qr = $mysqli-> query($sql);
												$ln = $qr->fetch_assoc();
												$nome  = $ln['descricao'];
												$preco = number_format($ln['valor'], 2, ',', '.');
												$sub   = number_format($ln['valor'] * $qtd, 2, ',', '.');
												$total += ($ln['valor'] * $qtd);
												 echo '<tr>';  
											 echo '<td><img src="img/'.$ln['img'].'"  class="img-responsive  center-block" width=100px heigth=100px ></td>';    
									  echo'  <td>'.$nome.'</td>
										<td><input type="number" min="1" name="prod['.$id.']" value="'.$qtd.'" /></td>
										<td>R$ '.$preco.'</td>
										<td>R$ '.$sub.'</td>
										<td><a href="?acao=del&id='.$id.'">Remove</a></td>
										 </tr>';
										}
										$total = number_format($total, 2, ',', '.');
										echo '<tr>                         
									  <td colspan="5"><b>Total</b></td>
									  <td><b>R$ '.$total.'</b></td>
											</tr>';
								  }
										   ?>
								 </tbody>
							</form>  
						 </table>
        </div>
		</div>
		</div>
         <div class="row">
			   <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" align="center">
			   </div>
               <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" align="center">   
  <table class="table center-block" align="center"> 
  <tr>
		<th>Opções de pagamento</th>
		<th> <form action="finalizar.php" method="post" name="pgto">
		<select name="FORMA">
        <option value="BOLETO">BOLETO</option>
        <option value="CARTÃO">CARTÃO</option>
        <option value="DEPÓSITO">DEPÓSITO</option></th>
		<th> </th>
		<th> </th> 
		<th> </th>  
		</tr>
		<tr> <input type="submit" value="FINALIZAR VENDA"> </tr> 
<th> </th>
 <th> </th>
  <th> </th>
   <th> </th>
		</td>
		</tr>
   </table> 
   </form>
   </div>
   </div>
   </div>
   </body>
</html>
 
