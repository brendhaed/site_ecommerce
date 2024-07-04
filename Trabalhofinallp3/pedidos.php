<?php 
  session_start(); 
  if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
  } 
?>
   <!DOCTYPE html>
<html lang="pt">
<head>
  <title>Meus pedidos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<div class="container center-block"> 
<div class="content center-block">

<?php
include_once("server.php");
 if ($_GET){
$idcliente = $_GET['idcliente'];
}
else
    header("location:Indexx.php");
$sql ="select * from vendas where idcliente=".$idcliente;
$resultado=$mysqli ->query($sql);	 
  if(mysqli_num_rows($resultado)==0){
   echo 'Não há vendas'; } 
   else {
$total = 0;
echo '<div class="panel-group" id="accordion"> ';
$i=0;
  while($ln =$resultado -> fetch_assoc()){
	echo'<div class="panel panel-primary class">';
    echo '<div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$ln['idvendas'].'"> Venda:'.$ln['idvendas'].' Data:'.date('d/m/Y',strtotime($ln['data_emissao'])).'
		  Valor: R$'.number_format($ln['total_nota'], 2, ',', '.').'
		  </a>
        </h4>
      </div>
      <div id="collapse'.$ln['idvendas'].'" class="panel-collapse collapse">
        <div class="panel-body">';
		
		echo '<table class="table">
    <caption><h3>Compras Efetuadas</h3></caption>
    <thead>
      <tr>
        <th >Imagem</th>
        <th >Produto</th>
        <th >Quantidade</th>
        <th >Preço</th>
        <th >SubTotal</th>
      </tr>
    </thead>';
	echo ' <tfoot>
     <tr>
        <th>Total</th>
        <th></th>
        <th></th>
        <th></th>
        <th>'.number_format($ln['total_nota'], 2, ',', '.').'</th>
      </tr>
    </tfoot>';
		 $sqlpro = "SELECT * FROM vendas_item v, produto p where v.idproduto = p.idproduto and v.id_vendas=".$ln['idvendas'];
		 $resultadoprod = $mysqli -> query($sqlpro);
		 while($lnp =  $resultadoprod -> fetch_assoc()){
		 echo '<tr>';
		 echo '<td><img src="img/'.$lnp['img'].'" class="img-responsive  center-block img-thumbnail" width="150px" heigth="150px" ></td>';    
		 echo '<td>'.$lnp['descricao'].'</td>';
		 echo '<td>'.$lnp['quantidade'].'</td>';
		 echo '<td>'.number_format($lnp['preco_unitario'], 2, ',', '.').'</td>';
		 echo '<td>'.number_format($lnp['total_item'], 2, ',', '.').'</td>';
		 echo '</tr>';
		}
		 echo '</table>';		
    	echo '</div>
       </div>
       </div>';	 
				 }
            echo ' </div>';         
          }
		  	echo "<center><a href=produtos.php> Voltar para as Compras</a>";
                   ?>

 </div>
 </div>
 </div>
</div>

</body>
</html>