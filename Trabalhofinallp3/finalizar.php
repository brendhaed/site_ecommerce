<?php 
 session_start(); 
 date_default_timezone_set('America/Sao_Paulo');
  if(!isset($_SESSION['carrinho'])){ 
    $_SESSION['carrinho'] = array(); 
  }   
  if(!isset($_SESSION['idcliente'])){  
     header("location:login.php");
}      
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Meu carrinho</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
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
  margin-bottom: 10px;
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
 <div class="container"> 
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center"> 
</div>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" align="center">
<div class="content" align="center">
<div class="table-responsive" align="center">

     <?php
        if(count($_SESSION['carrinho'])== 0){
          echo ' Não há produto no carrinho.';
          } else {
                require("server.php");
                 $total = 0;
$data_emissao = date("Y-m-d");
$hora = date("H:i:s");
$chave = rand(0,1000000);
$idcliente= $_SESSION['idcliente'];
 
  if (!empty($_POST["FORMA"])) 
  $forma_pgto = $_POST["FORMA"];    
   else
  $forma_pgto = '';
 $idcliente =  rand(1,3);                    
 $idcliente = $_SESSION['idcliente'] ;
 $sql_vendas = "insert into vendas(data_emissao, hora, forma_pgto,chave,idcliente) values ('$data_emissao','$hora', '$forma_pgto','$chave', $idcliente);";
 $result =$mysqli->query($sql_vendas);  
 $sql_vendas = "select idvendas from vendas where data_emissao='$data_emissao' and hora='$hora' and chave='$chave' and idcliente = $idcliente";

 $result=$mysqli->query($sql_vendas);  
 $dados  = $result-> fetch_assoc();
 $idvendas = $dados['idvendas'];
   
  // INSERINDO OS ITENS DA VENDA 
$total_qtd = 0;
foreach($_SESSION['carrinho'] as $id => $qtd){
$sql= "SELECT *  FROM produto WHERE idproduto= $id";
$qr= $mysqli->query($sql);
$ln = $qr ->fetch_assoc();
$idproduto = $ln['idproduto'];  
$preco_unitario = $ln['valor'];                      
$total_item = $preco_unitario * $qtd;// TOTAL DO ITEM
$total_qtd += $qtd;
$total += $total_item;
//inserção
$sql = "insert into vendas_item (idproduto, quantidade,preco_unitario, id_vendas, total_item) values (
$idproduto, $qtd, $preco_unitario, $idvendas, $total_item)";
$qr= $mysqli ->query($sql);
}
$sql="update vendas set total_nota = $total, numero_itens = $total_qtd where idvendas = $idvendas";
$qr= $mysqli ->query($sql);
unset($_SESSION['carrinho']);
echo "<P> COMPRA REALIZADA COM SUCESSO!<br>COMPRA NÚMERO: $idvendas</P><br>";
echo '<P>Total da Compra: R$ '.number_format($total, 2, ',', '.').'</P><br>';
echo "<a href=pedidos.php?idcliente=".$idcliente."> MEUS PEDIDOS</a>";
                   
}
?>
</div>
</div>
</div>
<div class="col-xs-1 col-sm-1 col-md-1">
       </div>
</body>
</html>