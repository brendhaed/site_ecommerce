
<!DOCTYPE html>
<html lang="pt">
<head>
  <title>The Dress Out - Roupas e Acessórios:</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
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
<center> <h1> <a href="Indexx.php">Dress Out</a></h1> 
<p>Roupas e Acessórios</p>
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
        <li><a href="sobre.php">SOBRE</a></li>
        <li><a href="servicos.php">COLEÇÕES</a></li>
        <li><a href="produtos.php">PRODUTOS</a></li>
        <li><a href="lancamentos.php">LANÇAMENTOS</a></li>
        <li><a href="contatos.php">CONTATO</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <h2>Quem somos?</h2>
  <h4> Dress Out é uma loja online que oferece o melhor para os nossos clientes, onde podemos atender todas as expectativas sobre a moda feminina sempre de 
  olho nas tendências e lançamentos.
Nossa loja oferece o que há de mais moderno e atual em todas as categorias de produtos. Desde o princípio, nossa preocupação é oferecer os melhores produtos
 com os melhores preços aliado a um ótimo atendimento a você cliente, que é a pessoa mais importante para nós.</h4>
 <h2> Formas de Pagamento:</h2>
 <h4>Você poderá usar as Seguintes formas de Pagamento em nosso site:<br>
→ Cartão de Crédito, podendo parcelar em até 10X Sem Juros.<br>
→ Boleto Bancário à Vista.<br>
→ Depósito, Transferência Bancária com 10% de Desconto ou trasferência de pix.</h4><br>
<img src="Img/Publicidade/meios de pagamento.png" alt="some text" width=250 height=100> <br><br>
  <button class="btn btn-default btn-lg"><a href="contatos.php">Entre em contato:</a></button>
</div>
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