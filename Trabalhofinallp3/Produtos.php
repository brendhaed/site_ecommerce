
  <!DOCTYPE html>
<html lang="pt">
<head>
  <title>Roupas e Acessórios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

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
<div class="jumbotron">
<center> <h1> <a href="indexx.php">Dress Out</a> </h1> 
<p>Roupas e Acessórios</p>
<div id="divBusca">
  <img src="Img/Publicidade/lupa.png" width="25  px" height="25 px" alt="Buscar..." />
  <input type="text" id="txtBusca" placeholder="Busque Produtos..."/>
  <button id="btnBusca">Buscar</button>
</div>
</div>
</center>

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
        <li><a href="sobre.php">SOBRE</a></li>
        <li><a href="servicos.php">COLEÇÕES</a></li>
        <li><a href="produtos.php">PRODUTOS</a></li>
        <li><a href="lancamentos.php">LANÇAMENTOS</a></li>
        <li><a href="contatos.php">CONTATO</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
          include_once("server.php");          
          $sql = "SELECT * FROM produto order by rand()";
          $result = $mysqli -> query($sql);              
  echo  '<table class="table"> 
         <tbody>'; 
  $linha = 2;
          while($row = $result->fetch_assoc())
  {
  echo '<td>';
  echo '<p>'.$row['descricao'].'<span style="font-size: 10px"> </p> <br>';           
            echo '<img src="img/'.$row['img']. '"width="150px" height="150px"/> ';

  echo '<br> Preço : R$ '.number_format($row['valor'], 2, ',', '.');
             echo '<a href="carrinho.php?acao=add&id='.$row['idproduto'].'">
<img src="Img/Publicidade/carrinho.png"  width="20px" height="20px" /> </a>';
             echo '</td>';
			 
if ($linha==8)
{
$linha = 4;
echo '</tr><tr>';
}
$linha++;
  }
  echo '</tbody>
          </table>';
     $mysqli ->close();
?>

<div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#"> Dress Out </a></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="Indexx.php">Home</a></li>
                        <li><a href="Produtos.php">Produtos</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sobre-nós</h5>
                    <ul>
                        <li><a href="sobre.php">Informações da Empresa</a></li>
                        <li><a href="contatos.php">Contato</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Suporte</h5>
                    <ul>
                        <li><a href="contatos.php">FAQ</a></li>
                        <li><a href="contatos.php">Telefones</a></li>
                        <li><a href="contatos.php">Chat</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                        <button type="button" class="btn btn-default"><a href="contatos.php">Contato</a></button>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2021 Copyright - Dress Out</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</center>
</body>
</html>